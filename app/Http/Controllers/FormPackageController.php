<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPackage;

class FormPackageController extends Controller
{
    public function formpackages()
    {
        $data['form_packages'] = FormPackage::all();
        $data['page'] = 'Form';
        return view('admin/packages/formpackages', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpackages()
    {
        return view('admin/packages/addpackages');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepackages(Request $request)
    {
        $request->validate([
            'codepackage'=>'required'
            ]);

        $packages = new FormPackage;
        $packages ->codepackage = $request->get('codepackage');
        $packages ->namepackage = $request->get('namepackage');
        $packages ->destination = $request->get('destination');
        $packages ->price = $request->get('price');
        $packages ->departure_time = $request->get('departure_time');
        $packages->save();

        return redirect('packages/formpackages')->with('Success', 'Data Telah Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showpackages($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpackages($id)
    {
        $packages = FormPackage::find($id);
        // dd($customer);
        return view('admin/packages/editpackages', compact('packages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepackages(Request $request, $id)
    {
        $request->validate([
            'codepackage'=>'required',
            'namepackage'=>'required'
        ]);

        $packages = FormPackage::find($id);
        $packages ->codepackage = $request->get('codepackage');
        $packages ->namepackage = $request->get('namepackage');
        $packages ->destination = $request->get('destination');
        $packages ->price = $request->get('price');
        $packages ->departure_time = $request->get('departure_time');
        $packages->save();

        return redirect('packages/formpackages')->with('Success', 'Data Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroypackages($id)
    {
        $packages = FormPackage::find($id);
        $packages->delete();

        return redirect('packages/formpackages')->with('Success', 'Data Telah Di Hapus!');
    }
}
