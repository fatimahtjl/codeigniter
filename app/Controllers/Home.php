<?php

namespace App\Controllers;

use App\Models\Modelmatkul;

class Home extends BaseController
{
    protected $modelmatkul;
    public function __construct()
    {
        $this->modelmatkul = new Modelmatkul();
    }

    public function index() 
    {
        $matkultima = $this->modelmatkul->findAll();
        $data = [
            "title" => 'matkul' ,
            "matkul" => $matkultima
        ];
        return view('dashboard', $data);
    }
}
