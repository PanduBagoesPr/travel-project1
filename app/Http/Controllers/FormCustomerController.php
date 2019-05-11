<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormCustomer;

class FormCustomerController extends Controller
{
    // public function index()
    // {
    //     $customer = Customer::all();
    //     $data['page'] = 'Dashboard';
    //     $data['data_count'] = count($customer);

    //     return view('layouts.index',$data);
    // }
    
    public function form()
    {
        $data['form_customer'] = FormCustomer::all();
        $data['page'] = 'Form';
        return view('admin/customers/form', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/customers/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $customer = new FormCustomer;
        $customer ->name = $request->get('name');
        $customer ->datebirth = $request->get('datebirth');
        $customer ->address = $request->get('address');
        $customer ->telp = $request->get('telp');
        $customer ->city = $request->get('city');
        $customer ->province = $request->get('province');
        $customer->save();
        return redirect('admin/customers/form')->with('Success', 'Data Telah Tersimpan!');
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
        $customer = FormCustomer::find($id);
        // dd($customer);
        return view('admin/customers/edit', compact('customer'));

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
        $request->validate([
            'name'=>'required'
        ]);

        $customer = FormCustomer::find($id);
        $customer->name = $request->get('name');
        $customer->datebirth = $request->get('datebirth');
        $customer->address = $request->get('address');
        $customer->telp = $request->get('telp');
        $customer->city = $request->get('city');
        $customer->province = $request->get('province');
        $customer->save();

        return redirect('admin/customers/form')->with('Success', 'Data Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = FormCustomer::find($id);
        $customer->delete();

        return redirect('customer/form')->with('Success', 'Data Telah Di Hapus!');
    }
}
