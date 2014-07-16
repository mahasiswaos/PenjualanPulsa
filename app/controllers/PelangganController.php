<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelanggan;
use View;
use Validator;
use Input;
use Redirect;
use Session;

class PelangganController extends BaseController {

    public function tampil() {
        $tampil = Pelanggan::paginate(5);
        $data = [
            'isi' => $tampil,
        ];
        return View::make('pelanggan.view', $data);
    }

    public function add() {
        return View::make('pelanggan.add');
    }

    public function simpan() {
        $rules = [
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nope' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('pelanggan/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new Pelanggan;
            $ket->nama = $in['nama'];
            $ket->jk = $in['jk'];
            $ket->alamat = $in['alamat'];
            $ket->no_hp = $in['nope'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . .!');
            return Redirect::to('pelanggan');
        }
    }

    public function hapus($id) {
        $user = Pelanggan::find($id);
        $user->delete();
        Session::flash('message', 'Terima Kasih, Data Berhasil Terhapus. . .!');
        return Redirect::to('/pelanggan/');
    }

    public function edit($id) {
        $edit = Pelanggan ::find($id);
        $data = [
            'isi' => $edit,
        ];
        return View::make('pelanggan.edit', $data);
    }

    public function prosessimpan($id) {
        $rules = [
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nope' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('pelanggan/edit/' . $id)->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Pelanggan::find($id);
            $ket->nama = $in['nama'];
            $ket->jk = $in['jk'];
            $ket->alamat = $in['alamat'];
            $ket->no_hp = $in['nope'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . .!');
            return Redirect::to('pelanggan');
        }
    }

}
