<?php

namespace App\Http\Controller;
use Illuminate\Http\Request;
class PageController extends Controller
{
public function index() {
return'Selamat Datang';
}

public function about() {
return 'Nama : Sesha Azzara Suriadi <br /> NIM : 2341728013';
}

public function articles($id) {
return 'Halaman Artike dengan Id-'.$id;
}
}
