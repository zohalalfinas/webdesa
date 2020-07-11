<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_event;
use Alert;

class EventController extends Controller
{
    public function index()
    {
        $data = m_event::get();
        return view('events.event', compact('data'));
    }
    public function event(){
        $data = m_event::get();
        return view('admin.event', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new m_event;
        $data->nama = $request['nama'];
        $data->tgl = $request['tgl'];
        $data->waktu = $request['waktu'];
        $data->lokasi = $request['lokasi'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/event/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Event Berhasil Ditambah');
    }

    public function show($id)
    {
        $data = m_event::find($id);
        return view('events.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = m_event::find($id);
        $data->nama = $request['nama'];
        $data->tgl = $request['tgl'];
        $data->waktu = $request['waktu'];
        $data->lokasi = $request['lokasi'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/event/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Event Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = m_event::find($id)->delete();
        return back()->with('success','Event Berhasil Dihapus');
    }
}
