<?php

namespace App\Controllers;

class Home extends BaseController{
    public function index(){
    
    // return view ('welcome_message');
    return view ('home');
    }

    public function coba (){
        echo "ini method coba";
    }
    public function layout(){
        return view ('Layout/main');
    }
    public function mahasiswa(){
       return view ('mahasiswa/index');
    }
    public function dosen(){
       return view ('dosen/index');
    }

    public function matakuliah(){
        return view ('matakuliah/index');
    }

    public function tentang(){
        return  view ('tentang');
    }

}