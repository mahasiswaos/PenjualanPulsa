<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use View;
use Validator;
use Input;
use Redirect;
use Session;

class UserController extends BaseController {

    public function home() {
        return View::make('user.home');
    }

    public function tampil() {
        $tampil = User::paginate(5);
        $data = [
            'isi' => $tampil,
        ];
        return View::make('user.view', $data);
    }

    public function add() {
        return View::make('user.add');
    }

    public function simpan() {
        $rules = [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('user/add')->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = new User;
            $ket->username = $in['username'];
            $ket->password = $in['password'];
            $ket->email = $in['email'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . . !');
            return Redirect::to('user');
        }
    }

    public function hapus($id) {
        $hapus = User::find($id);
        $hapus->delete();
        Session::flash('message', 'Terima Kasih, Data Berhasil Terhapus. . . !');
        return Redirect::to('user');
    }

    public function edit($id) {
        $edit = User ::find($id);
        $data = [
            'isi' => $edit,
        ];
        return View::make('user.edit', $data);
    }

    public function prosessimpan($id) {
        $rules = [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('user/edit/' . $id)->withErrors($validator);
        } else {
            $in = Input::all();
            $ket = User::find($id);
            $ket->username = $in['username'];
            $ket->password = $in['password'];
            $ket->email = $in['email'];
            $ket->save();
            Session::flash('message', 'Terima Kasih, Data Berhasil Tersimpan. . .!');
            return Redirect::to('user');
        }
    }

}
