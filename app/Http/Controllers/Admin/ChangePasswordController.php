<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash, Crypt, Session;
use App\Admin;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.change-password');
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
        if($request->user_id):
         $user_id = $request->user_id;

           $user = Admin::find($user_id);

            if($user):
                $old_password = $request->old_password;

                $new_password = $request->new_password;
                $confirm_password = $request->confirm_password;


                $check = Hash::check($old_password, $user->password); 
 
                if($check):
                    if($new_password == $confirm_password):
                      $user->password= bcrypt($confirm_password);
                       // if($user->password = Crypt::encrypt($confirm_password)):
                      if($user->save()):
                          // $message = "Password Changed !";
                          // return redirect()->back()->with('message', $message);
                            Session::flash('success','Successfully Changed Your Password !');
                            return redirect()->route('admin.dashboard');
                        else:
                          // $message = "Unable to change password ! Please try again";
                          // return redirect()->back()->with('message', $message);
                            Session::flash('error','Unable to change password ! Please try again');
                            return redirect()->back();
                        endif;
                    else:
                        //  $message = "Password not matched !";
                        // return redirect()->back()->with('message', $message);
                        Session::flash('error','Password not matched !');
                        return redirect()->back();
                    endif;
                else:
                    // $message = "Invalid Password !";
                    // return redirect()->back()->with('message', $message);
                    Session::flash('error','Invalid Password !');
                    return redirect()->back();
                endif;
            else:
                // $message = "Invalid User !";
                // return redirect()->back()->with('message', $message);
                Session::flash('error','Invalid User !');
                return redirect()->back();
            endif;
        else:
            // $message = "User ID is Empty !";
            // return redirect()->back()->with('message', $message);
            Session::flash('error','Admin ID is Empty !');
            return redirect()->back();
        endif;

       return redirect()->route('admin.dashboard');
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
