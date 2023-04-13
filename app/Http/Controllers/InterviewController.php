<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Respon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PDF;

use Excel;
use App\Exports\InterviewExport;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing');
    }

    public function Log()
    {
        return view('login');
    }

    public function dataAdmin(Request $request)
    {
        $search = $request->search;

        $interviews = Interview::with('respon')->where('name', 'LIKE', '%'. $search .'%')->orderBy('created_at', 'DESC')->get();
        return view('admin.data-admin', compact('interviews'));
    }

    public function dataPetugas(Request $request)
    {
        // dd(request('search'));
        $search = $request->search;
        $data = Interview::with('respon')->orderBy('created_at', 'DESC')->get();
        // $datas = Respon::where('status', 'LIKE', '% '. $search .'%')->get();
        return view('petugas.data-petugas', compact('data'));
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email|:dns',
            'password' => 'required|min:4',
        ]);

        // dd($request->all());
            $user = $request->only('email', 'password');
            if (Auth::attempt($user)){
                if (Auth::user()->role == 'admin'){
                    return redirect()->route('data.admin')->with('logSucces', "Berhasil Login Ke Halaman!");
                  }elseif(Auth::user()->role == 'petugas'){
                    return redirect()->route('data.petugas')->with('LOGBerhasil', 'Berhasil Login Ke Halaman!');
                  }
                }else{
                  return redirect()->back()->with('errors', "Gagal Login!");
                }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'no_telp' => 'required',
            'last_education' => 'required',
            'education_name' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        $file = $request->file('file');
        $fileName = rand() . '.' . $file->extension(); // 
        $path = public_path('assets/folder/');
        $file->move($path, $fileName);

        // dd($request->all());
        Interview::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'no_telp' => $request->no_telp,
            'last_education' => $request->last_education,
            'education_name' => $request->education_name,
            'file' => $fileName,
        ]);
        return redirect()->back()->with('SuccesAdd', "Berhasil Menambah Data Baru");

    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Interview::where('id', $id)->firstOrFail();
        unlink('assets/folder/'. $data->file);
        $data->delete();

        return redirect()->route('data.admin')->with('deletsucc', "Berhasil Menghapus data!");
    }

    public function createPDF(){
        $data = Interview::with('respon')->get()->toArray(); 
        // kirim data yg diambil kepada view yg akan ditampilkan, kirim dengan inisial 
        view()->share('inisial',$data); 
        // panggil view blade yg akan dicetak pdf serta data yg akan digunakan
        $pdf = PDF::loadView('print', compact('data'))->setPaper('a4', 'landscape'); 
        // download PDF file dengan nama tertentu
           return $pdf->download('pdf_interview_all.pdf'); 
      }

      public function PrintId($id)
      {
        $data = Interview::where('id', $id)->all()->toArray(); 
        view()->share('inisial',$data); 
        $pdf = PDF::loadView('print', compact('data'))->setPaper('a4', 'landscape'); 
           return $pdf->download('pdf_interview_Id.pdf');  
      }

      public function logout(){
            Auth::logout();
            return redirect('/')->with('berhasil', "Berhasil Logout");
      }

      public function exportExcel(){ 
        $file_name = 'data_Interview.xlsx'; 
        return Excel::download(new InterviewExport, $file_name); 
    }

     
}
