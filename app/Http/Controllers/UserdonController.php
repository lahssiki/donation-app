<?php

namespace App\Http\Controllers;

use App\Models\Usersdon;
use Illuminate\Http\Request;

class UserdonController extends Controller
{
    //public function home(){
    //    return view('home');}

    public function index(){
        $data = Usersdon::all();
        return view('index', ['data'=> $data]);

}
    public function donate(){
    return view('donate');
}
    public function store(Request $request){
     $data = $request->validate([
        'name' => 'required',
        'done' => 'required|numeric'
    ]);
    
    $newUserdon = Usersdon::create($data);
    
    return redirect(route('index'))->with('success', 'Thanks for donating');
}

}