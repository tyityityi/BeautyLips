<?php

namespace App\Http\Controllers;

use App\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){

            //$notice = App\notification::join('purchase_product','notification.PONum','purchase_product.PONum')->join('product','purchase_product.productID','product.productID')->where('customerID','=',6)->get();
            $notice = notification::where('customerID','=',Auth::user()->customerID)->orderBy('notificationID', 'desc')->get();
            return view('notificationPage',compact('notice'));
        }

        return view('auth.login');
    }

    public function get()
    {
        //
        if(Auth::check()){

            $notice = notification::where('customerID','=',Auth::user()->customerID)->where('isread','=',0)->get();
            return $notice->count();

        }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $update = notification::where('customerID','=',Auth::user()->customerID)->where('notificationID',$id)->update(['isread'=>1]);
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(notification $notification)
    {
        //
    }
}
