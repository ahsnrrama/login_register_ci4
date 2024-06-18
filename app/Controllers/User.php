<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'My Profile';

        return view('user/index',$data);
    }
    public function soal()
    {
        $data['title'] = 'Soal & Jawaban';

        return view('user/soal',$data);
    }
}
