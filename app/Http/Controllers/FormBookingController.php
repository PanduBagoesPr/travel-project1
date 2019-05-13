<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormBooking;
use App\FormCustomer;
use App\FormPackage;

class FormBookingController extends Controller
{
    public function formbooking()
    {
        $data['form_bookings'] = FormBooking::all();
        $data['page'] = 'Form';
        return view('admin/booking/formbookings', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createbooking()
    {
        $packages = FormPackage::pluck('namepackage', 'id');
        $customer = FormCustomer::pluck('name', 'id');
        return view('admin/booking/addbookings', compact('id', 'customer', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebooking(Request $request)
    {
        $request->validate([
            'codebooking'=>'required'
            ]);

        $booking = new FormBooking;
        $booking ->codebooking = $request->get('codebooking');
        $booking ->form_customer_id = $request->get('form_customer_id');
        $booking ->form_packages_id = $request->get('form_packages_id');
        $booking->save();

        return redirect('booking/formbooking')->with('Success', 'Data Telah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showbooking($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editbooking($id)
    {
        $booking = FormBooking::find($id);
        $customer = FormCustomer::get();
        $packages = FormPackage::get();
        // dd($customer);
        return view('admin/booking/editbookings', compact('booking'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebooking(Request $request, $id)
    {
        $request->validate([
            'codebooking'=>'required'
        ]);

        $booking = FormPackage::find($id);
        $booking ->codebooking = $request->get('codebooking');
        $booking ->form_customer_id = $request->get('form_customer_id');
        $booking ->form_packages_id = $request->get('form_packages_id');
        $booking->save();

        return redirect('booking/formbooking')->with('Success', 'Data Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroybooking($id)
    {
        $booking = FormBooking::find($id);
        $booking->delete();

        return redirect('booking/formbooking')->with('Success', 'Data Telah Di Hapus!');
    }
}
