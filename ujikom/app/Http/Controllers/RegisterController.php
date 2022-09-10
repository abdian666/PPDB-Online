<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Register::all();
        return view('register.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Register;
        return view('register.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Register;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->jk = $request->jk;
        $model->alamat = $request->alamat;
        $model->agama = $request->agama;
        $model->asal_smp = $request->asal_smp;
        $model->jurusan = $request->jurusan;
        $model->save();

        return redirect('register')->with('success','Register created successfully.');
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
        $model = Register::find($id);
        return view('register.edit', compact(
            'model'
        ));
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
        $model = Register::find($id);
        $model->nama_lengkap = $request->nama_lengkap;
        $model->jk = $request->jk;
        $model->alamat = $request->alamat;
        $model->agama = $request->agama;
        $model->asal_smp = $request->asal_smp;
        $model->jurusan = $request->jurusan;
        $model->save();

        return redirect('register')
        ->with('success','Register updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Register::find($id);
        $model->delete();
        return redirect('register')
        ->with('success','Register deleted successfully');;
    }
    public function cetak($id)
    {
        $model = Register::where('id',$id)->first();

        return view('register.cetak',compact('model'));
    }
    public function cari(Request $request)
    {
        $datas = Register::where('nama_lengkap',$request->cari)->get();
        return view('register.index', compact(
            'datas'
        ));

    }
}
