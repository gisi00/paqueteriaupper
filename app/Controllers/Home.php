<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index(): string {

        return view('vista');
    }

    public function otra(){
        $data['valor'] = "Hello word";
        $data['day'] = "Wednesday";
        $data['name'] = "Gisela";
 
        return view('otro', $data);
    }

    public function sitio(){
        $data['tipo'] = "---";
        $data['valor'] = "sin valor";

        return view('valores',$data);
    }

    public function sitioId($dato){
        $data['tipo'] = "Numerico";
        $data['valor'] = "$dato";

        return view('valores',$data);
    }

    public function sitioName($dato){
        $data['tipo'] = "Alfanumerico";
        $data['valor'] = $dato;

        return view('valores',$data);
    }
}


