<?php
namespace App\Http\Controller;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
return 'Hello World sha';
}
public function greeting() {
    return view('blog.hello')
    ->with('name','Sesha Azzara Suriadi')
    ->with('occupation','Pretty');
    
}
}
