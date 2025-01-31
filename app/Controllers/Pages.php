<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data=[
                'title' => 'Home Manca'
        ];
        return view('pages/home',$data);
        }

    public function about()
    {
        $data=[
            'title' => 'About Manca'
    ];
        echo view('layout/header',$data);
        echo view('pages/about');
        echo view('layout/footer');
    }

}
