<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\m_infografik;
use App\m_video;
use App\m_artikel;
use App\m_grafik;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_infografik::get();
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $grafik = $response->json();
        return view('covids.infograf', compact('data','grafik'));
    }
    public function covid19(){
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
        return view('covids.kasus' , compact('data'));
    }
    public function show_covid19(){
        return view('covids.kasus');
    }
    public function v_video()
    {
        $grafik = m_grafik::find(1);
        $data = m_video::get();
        return view('covids.video',compact('grafik', 'data'));
    }
    public function v_artikel()
    {
        $grafik = m_grafik::find(1);
        $data = m_artikel::get();
        return view('covids.artikel',compact('grafik', 'data'));
    }
    public function show_artikel($id){
        $data = m_artikel::find($id);
        return view('covids.detail-artikel', compact('data'));
    }

    // Halaman Admin 

    public function infografik(){
        $data = m_infografik::get();
        $grafik = m_grafik::find(1); 
        return view('admin.infografik', compact('data','grafik'));
    }

    public function video(){
        $data = m_video::get();
        return view('admin.video', compact('data'));
    }

    public function artikel(){
        $data = m_artikel::get();
        return view('admin.artikel', compact('data'));
    }

    // Tambah Data 
    public function store_infografik(Request $request)
    {
        $data = new m_infografik;
        $data->judul = $request['judul'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/infografik/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Infografik Berhasil Ditambah');
    }
    
    public function store_video(Request $request)
    {
        $data = new m_video;
        $data->judul = $request['judul'];
        $data->link = $request['link'];
        $data->save();
        return back()->with('success','Video Berhasil Ditambah');
    }

    public function store_artikel(Request $request)
    {
        $data = new m_artikel;
        $data->judul = $request['judul'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/artikel/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Artikel Berhasil Ditambah');
    }


    // Akhir Tambah Data 

    // Ubah Data 

    public function update_infografik(Request $request, $id)
    {
        $data = m_infografik::find($id);
        $data->judul = $request['judul'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/infografik/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Infografik Berhasil Diubah');
    }

    public function update_video(Request $request, $id)
    {
        $data = m_video::find($id);
        $data->judul = $request['judul'];
        $data->link = $request['link'];
        $data->save();
        return back()->with('success','Video Berhasil Diubah');
    }

    public function update_grafik(Request $request, $id)
    {
        $data = m_grafik::find($id);
        $data->positif = $request['positif'];
        $data->sembuh = $request['sembuh'];
        $data->meninggal = $request['meninggal'];
        $data->save();
        return back()->with('success','Grafik Berhasil Diubah');
    }

    public function update_artikel(Request $request, $id)
    {
        $data = m_artikel::find($id);
        $data->judul = $request['judul'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/artikel/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Artikel Berhasil Ditambah');
    }

    // Akhir Ubah Data 

    // Hapus Data 

    public function destroy_infografik($id)
    {
        $data = m_infografik::find($id)->delete();
        return back()->with('success','Infografik Berhasil Dihapus');
    }

    public function destroy_video($id)
    {
        $data = m_video::find($id)->delete();
        return back()->with('success','Video Berhasil Dihapus');
    }

    public function destroy_artikel($id)
    {
        $data = m_artikel::find($id)->delete();
        return back()->with('success','Artikel Berhasil Dihapus');
    }

    // Akhir Hapus Data 
    // Akhir Halaman Admin 
}
