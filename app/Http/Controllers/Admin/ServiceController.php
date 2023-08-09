<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session,DB,Crypt,Validator,Auth,Str,Image;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('status',1)->orderBy('id','desc')->get();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         try
       {
         $rules = Service::$rules;
         $messages = Service::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $data = $request->all();

            $data['slug'] = Str::slug($request->title, '-');

            Service::create($data);
          
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully saved service details.');
        return redirect()->route('admin.service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service_id = Crypt::decrypt($id);
        $service = Service::where([['status',1],['id',$service_id]])->first();
        return view('admin.service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_id = Crypt::decrypt($id);
        $service = Service::where([['status',1],['id',$service_id]])->first();
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         try
       {
         $service_id = Crypt::decrypt($id);
         $service = Service::where([['status',1],['id',$service_id]])->first();

         $rules = Service::$rules;
         $messages = Service::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

         $service->title = $request->title;
         $service->slug = Str::slug($request->title, '-');
         $service->sub_title = $request->sub_title;
         $service->details = $request->details;
         $service->save();
            
          
        }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully updated service details.');
        return redirect()->route('admin.service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_id = Crypt::decrypt($id);
        $service = Service::where([['status',1],['id',$service_id]])->update(['status' => 0]);
        Session::flash('success','Successfully deleted service details.');
        return redirect()->route('admin.service');
    }
}
