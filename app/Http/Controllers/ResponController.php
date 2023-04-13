<?php

namespace App\Http\Controllers;

use App\Models\Respon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Respon $respon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interview_id)
    {
       
        $interview = Respon::where('interview_id', $interview_id)->first();
        $interviewId = $interview_id;
        return view('responses', compact('interview', 'interviewId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interview_id)
    {
        $request->validate([
            'status' => 'required',
            'date' => 'required',
        ]);

        //  updateOrCreate() fungsinya untuk melakukan update data
        //  kalo emang di db responya udaada data yang punya pengaduan_id sama dengan $pengaduan_id dari path dinamis, kalau gada data itu maka di create 
        // array pertama acuan cari datanya 
        // array ke dua data yang dikirm 
        // kenapa ppake updateOrCreate karena response ini kn kalo tandanya gada mau ditambahin tapi kalao ada mau diupdate juga 
        Respon::updateOrCreate(
            [
                'interview_id' => $interview_id,
            ],
            [
                'status' => $request->status,
                'date' => $request->date,
            ]
            );

            // setelah berhasail arahken ke route yang name nya data.petugas dengan pesan alert 
            return redirect()->route('data.petugas')->with('responsesSucces', 'Berhasil Mengubah Respon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respon $respon)
    {
        //
    }
}
