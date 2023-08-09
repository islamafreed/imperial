<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session,DB,Crypt,Validator,Auth,Str;

use App\Models\Booking, App\Models\BookedDate;

class CheckDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('status',1)->orderBy('id','desc')->get();
        return view('admin.check_date_availability.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.check_date_availability.booked_date.create');
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
        $rules = BookedDate::$rules;
        $messages = BookedDate::$messages;

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if($request->booked_date != ''){
        $req_date1 = $request->booked_date;
        $tdr1 = str_replace("/", "-", $req_date1);
        $new_booked_date = date('Y-m-d',strtotime($tdr1));
            }
        else
            $new_booked_date = " ";

        $booked_date1 = $new_booked_date;
        $data['booked_date'] = $booked_date1;

        BookedDate::create($data);


        }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Successfully booked date deatils');
        return redirect()->route('admin.booked-date');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking_id = Crypt::decrypt($id);
        $booking = Booking::where([['status',1],['id',$booking_id]])->first();
        return view('admin.check_date_availability.show',compact('booking'));

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

    public function bookedDateIndex()
    {
        $booked_dates = BookedDate::where('status',1)->orderBy('id','desc')->get();
        return view('admin.check_date_availability.booked_date.index',compact('booked_dates'));
    }

    public function bookedDateShow($id)
    {
        $booked_date_id = Crypt::decrypt($id);
        $booked_date = BookedDate::where([['status',1],['id',$booked_date_id]])->first();
        return view('admin.check_date_availability.booked_date.show',compact('booked_date'));
    }


}
