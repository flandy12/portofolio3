<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Add_Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('add');
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
        // mengambil variabel file
        $file = $request->file('file_');
        // mengambil variabel file name
        $fileName = $file->getClientOriginalName();
        // mengambil variabel Nama pengguna
        $nama = $request->Nama;
        // mengambil variabel Email pengguna
        $email = $request->Email;
        // menyimpan didalam file storage app public
        $file->storeAs('/public',$fileName);
        //insert (upload) ke database
        $db = DB::table('shop')->insert([
            'nama'=> $nama,
            'email'=> $email,
            'file'=> $fileName,
        ]);
        return view('admin',['db'=>$db]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // menampilkan databas dari xampp keview admin
        $db = DB::table('shop')->get();
        return view('admin',['db'=>$db]);
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
