<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Redirect;

class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }

    public function tampilkan(Request $request)
    {
        $model =  new Mahasiswa();
        $model::insert(['nim'=>@$request->nim,'nama'=>@$request->nama,'alamat'=>@$request->alamat,'created_at'=>date("Y-m-d H:i:s")]);
        
        $dataAll=$model->all();
        return view('tampil2', ['data'=>$request->all(),'dataAll'=>@$dataAll]);
    }

    public function create(){
        return view('create');
    }
    
    public function update($nim){
        if($data=Mahasiswa::find($nim)) {
            return view('update', ['data'=>$data]);
        } else return redirect('/read');
    }
    
    
    public function edit(Request $request){
        
        if($data=Mahasiswa::find($request->nim)) {
            $validateData = $request ->validate([
                'nama'=> 'required|string|max:25',
                'umur'=> 'required|integer|between:1,100',
                'alamat'=> 'required|min:6',
                'email'=> 'required|email',
                ]);
            $data->nama=@$request->nama;
            $data->umur=@$request->umur;
            $data->email=@$request->email;
            $data->alamat=@$request->alamat;
            $data->updated_at=date("Y-m-d H:i:s");
            $data->save();
            return redirect('/read')->with('pesan', 'data dengan NIM : '.$request->nim. ' berhasil diupdate');
        } else {
            return redirect('/read')->with ('pesan', 'data tidak ditemukan/gagal diupdate');
        }
    }
    
    public function save(Request $request)
    {
        $validateData = $request ->validate([
            'nim' => 'required|regex:/^G.\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama'=> 'required|string|max:25',
            'umur'=> 'required|integer|between:1,100',
            'alamat'=> 'required|min:6',
            'email'=> 'required|email',
            ]);

        $model = new Mahasiswa();
        $model::insert([
            'nim'=>@$request->nim,
            'nama'=>@$request->nama,
            'alamat'=>@$request->alamat,
            'umur'=>@$request->umur,
            'email'=>@$request->email,
            'created_at'=>date("Y-m-d H:i:s")]);
        return view('view',['data'=>$request->all()]);
    }
    
    public function read(){
        $model = new Mahasiswa();
        $dataAll=$model->all();
        return view('read',['dataAll'=>$dataAll]);
    }

    public function delete($nim){
        if($data = Mahasiswa::find($nim))
        {
            $data->delete();
        } else{
            return redirect('/read')->with('pesan','Data NIM : '.@$nim.' tidak ditemukan');
        }
        
        return redirect('/read')->with('pesan','Data NIM : '.@$nim.' Berhasil dihapus');
    }
        

    public function logout()
    {
        return view('logout');
    }
}