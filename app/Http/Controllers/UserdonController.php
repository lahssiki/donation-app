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
public function payment(Request $request){
    $donationValue = $request->input('done');
    
    return view('payment')->with('donationValue', $donationValue);
}
    public function store(Request $request){
     $data = $request->validate([
        'name' => 'required',
        'done' => 'required|numeric'
    ]);

    $newUserdon = Usersdon::create($data);
    $donationValue = $request->input('done');
    // Other donation processing logic...

    return redirect()->route('payment', ['done' => $donationValue]);
}

    
}

