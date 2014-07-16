<?php

/**
 * namespace digunakan untuk menyatakan 
 * lokasi directory / folder 
 * tempat file BaseController berada.
 * 
 * Cara penulisan namespace adalah 
 * dengan menuliskan nama directory / folder
 * diawali dengan huruf besar
 * seperti pada sintaks dibawah ini.
 */

namespace App\Controllers;

/**
 * "use" merupakan sebuah sintak
 * yang digunakan untuk memanggil
 * sebuah class yang digunakan dalam
 * file class ini (BaseController)
 */
Use Illuminate\Routing\Controller;
use View;

/**
 * Class BaseController adalah sebuah file
 * yang secara default telah ada pada saat
 * laravel di install atau di download.
 */
class BaseController extends Controller {

    /**
     * Melakukan pengaturan layout 
     * yang akan digunakan oleh controller 
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
