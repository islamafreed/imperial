<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session,DB,Crypt,Validator,Str,Mail;

use App\Models\SendQuote, App\Models\Ocation, App\Models\SendQuoteFacility, App\Models\Facility;

class SendQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocations = Ocation::where('status',1)->get();
        $facilities = Facility::where('status',1)->orderBy('id','desc')->get();
        return view('getquote.index',compact('ocations','facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         $rules = SendQuote::$rules;
         $messages = SendQuote::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $snd_quote = new SendQuote();
            $snd_quote->name = $request->name;
            $snd_quote->email = $request->email;
            $snd_quote->phone_no = $request->phone_no;
            $snd_quote->ocation_id = $request->ocation_id;
            $snd_quote->estimated_guest = $request->estimated_guest;
           
            if($request->req_date != ''){
            $req_date1 = $request->req_date;
            $tdr1 = str_replace("/", "-", $req_date1);
            $new_req_date = date('Y-m-d',strtotime($tdr1));
                }
            else
                $new_req_date = " ";

            $req_date1 = $new_req_date;
            $snd_quote->req_date = $req_date1;
            $snd_quote->preferance_id = $request->preferance_id;
            $snd_quote->add_preferance_id = $request->add_preferance_id;
            $snd_quote->save();

            
            
          
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Thank you for your interest, will be in touch shortly.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
