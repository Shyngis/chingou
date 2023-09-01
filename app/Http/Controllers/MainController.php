<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
    { public function home(){return view('home');}
    public function about(){return view('about');}
    public function address(){return view('address');}
    public function main(){return view('main');}
    public function pink(){return view('pink');}
    public function ordering(){return view('ordering');}
    public function ordering_check(Request $request)
    {$valid = $request->validate([
            'email' => 'required|min:6|max:50',
            'number' => 'required',
            'order' => 'required|min:2|max:50',]);
        $ordering = new Contact();
        $ordering->email = $request->input('email');
        $ordering->phone_numbers = $request->input('number');
        $ordering->ordering_foods = $request->input('order');
        $ordering->save();
        return redirect()->route('ordering');
    }

   // public function pink_check(Request $req){
       // $valid = $req->validate([
           // 'mail' => 'required|min:6|max:50',
         //   'otzyv' => 'required',
       // ]);
       // $pink = new reviews();
       // $pink->mail = $req->input('mail');
       // $pink->otzyv = $req->input('otzyv');

       // $pink->save();
     //   return redirect()->route('pink');

   // }
}
