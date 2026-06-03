<?php

namespace App\Http\Controllers;
use App\Models\Masyarakat;
use App\Models\Keluhan;
// use App\Models\Masyarakat as ModelsMasyarakat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Numeric;

class MasyarakatController extends Controller
{
    public function index(){
        $masyarakats = Masyarakat::all();
        return view('index',compact('masyarakats'));
        }

    public function create(){
        $genders = ['laki-laki', 'perempuan'];
        return view('create',compact('genders'));
     }

    public function show(Masyarakat $masyarakat):Masyarakat
    {
        $masyarakat = Masyarakat::with('keluhans')->where('id', $masyarakat->id)->first();
        return $masyarakat;

    }

     public function store(Request $request){ 

        $rules = [
            'nama'=> ['required'],
            'nomor_kk' => 'required|digits:12|numeric',
            'nomor_ktp' => 'required|digits:12|numeric|unique:masyarakats,nomor_ktp',
            'alamat' => 'required|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki, Perempuan',
        ];

        $messages = [
            'nama.required'=> 'kudu di isi atuh euy',
        ];

        $validated = $request->validate($rules,$messages);

        Masyarakat::create($validated);

        return redirect()->route('data-masyarakat');


     }


            public function edit($id)
        {
            $masyarakat = Masyarakat::findOrFail($id);
            $genders = ['laki-laki', 'perempuan'];

            return view('edit', compact('masyarakat', 'genders'));
        }

        public function update(Request $request, $id)
    {
                
        $masyarakat = \App\Models\Masyarakat::findOrFail($id);

            $masyarakat->update([
            'nama' => $request->nama,
            'nomor_kk' => $request->nomor_kk,
            'nomor_ktp' => $request->nomor_ktp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

            return redirect()->route('data-masyarakat.index');
        // $masyarakat = \App\Models\Masyarakat::findOrFail($id);

        // $masyarakat->update($request->all());

        // return redirect('/data-masyarakat');
    // dd('update terpanggil');

    // $rules = [
    //     'nama' => 'required',
    //     'nomor_kk' => 'required|digits:12|numeric',
    //     'nomor_ktp' => 'required|digits:12|numeric',
    //     'alamat' => 'required|max:255',
    //     'jenis_kelamin' => 'required|in:laki-laki,perempuan',
    // ];

    // $validated = $request->validate($rules);

    // $masyarakat = Masyarakat::findOrFail($id);
    // $masyarakat->update($validated);

    // return redirect()->route('data-masyarakat.index')
    //     ->with('success', 'Data berhasil diupdate');
    // }
            
    //     public function destroy($id)
    // {
    //     $masyarakat = Masyarakat::findOrFail($id);
    //     $masyarakat->delete();

    //     return redirect()->route('data-masyarakat.index')
    //         ->with('success', 'Data berhasil dihapus');
    }
        //by primary key
   

    // //
    // $masyarakats = Masyarakat::where('alamat', 'like', '%Tanjung Pinang%')

    // public function create(){
    //     return "Halaman CREATE";
    // }

    // public function store(){
    //     return "Halaman STOREEEEE";
    // }

    // public function show(){
    //     return "Halaman SHOWWWWWWW";
    //     }
        
    //     public function update(){
    //     return "Halaman UPDATEE";
    // }

    // public function destroy(){
    //     return "Halaman DESTROYY";
    // }

    // public function edit(){
    //     return "Halaman EDITTT";
    // }
}
