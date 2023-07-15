<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ph20590 extends Controller
{
    function index()
    {
        return view('index');
    }
    function lienhe()
    {
        return view('lienhe');
    }
    function lay1tt($id)
    {
        $data = ['id' => $id];
        return view('chitiet', $data);
    }
    function hocsinh()
    {
        $data = [
            'ten' => 'Nguyễn Văn Đạt',
            'lop' => 'WE17317',
            'ngsinh' => '01-01-2003',
            'chuyennganh' => 'Thiết kế website'
        ];
        return view('ttsv',$data);
    }
}