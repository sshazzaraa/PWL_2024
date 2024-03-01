<?php
namespace App\Http\Controller;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
public function articles($id) {
return 'Halaman Artike dengan Id-'.$id;
}
}
