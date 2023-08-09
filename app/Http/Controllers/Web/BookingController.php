<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session,DB,Crypt,Validator,Str,Mail;

use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index');
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
         $rules = Booking::$rules;
         $messages = Booking::$messages;

         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            Session::flash('error', 'Please fix the error and try again!');
            return redirect()->back()->withErrors($validator)->withInput();
         }

            $data = $request->all();

            if($request->booking_date != ''){
            $req_date1 = $request->booking_date;
            $tdr1 = str_replace("/", "-", $req_date1);
            $new_booking_date = date('Y-m-d',strtotime($tdr1));
                }
            else
                $new_booking_date = " ";

            $booking_date1 = $new_booking_date;
            $data['booking_date'] = $booking_date1;


            Booking::create($data);
          
      }catch(ValidationException $e)
            {
                return Redirect::back();
            }

        Session::flash('success','Thank you for the booking, will be in touch shortly.');
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
