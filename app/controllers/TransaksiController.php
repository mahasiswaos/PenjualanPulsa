<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi;
use View;
use Validator;
use Input;
use Redirect;
use Session;

class TransaksiController extends BaseController {

    public function tampil() {
        $tampil = Transaksi::paginate(5);
        $data = [
            'isi' => $tampil,
        ];
        return View::make('transaksi.view', $data);
    }

    public function add() {
        return View::make('transaksi.add');
    }

    public function simpan() {
        $rules = [
            'jml' => 'required',
            'notu' => 'required',
            'tgl' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('transaksi/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new Transaksi;
            $ket->jumlah = $in['jml'];
            $ket->no_tujuan = $in['notu'];
            $ket->tgl = $in['tgl'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . .!');
            return Redirect::to('transaksi');
        }
    }

    public function hapus($id) {
        $user = Transaksi::find($id);
        $user->delete();
        Session::flash('message', 'Terima Kasih, Data Berhasil Terhapus. . .!');
        return Redirect::to('/transaksi/');
    }

    public function edit($id) {
        $edit = Transaksi::find($id);
        $data = [
            'isi' => $edit,
        ];
        return View::make('transaksi.edit', $data);
    }

    public function prosessimpan($id) {
        $rules = [
            'jml' => 'required',
            'notu' => 'required',
            'tgl' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('transaksi/edit/' . $id)->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = Transaksi::find($id);
            $ket->jumlah = $in['jml'];
            $ket->no_tujuan = $in['notu'];
            $ket->tgl = $in['tgl'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . .!');
            return Redirect::to('transaksi');
        }
    }

}
