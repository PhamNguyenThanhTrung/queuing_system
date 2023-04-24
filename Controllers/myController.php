<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\validator;
use PHPUnit\TextUI\XmlConfiguration\Group;

class myController extends Controller
{
    //
    public function xemngay(){
        $d="<h1> hom nay la ngày" .date('d/m/y')."</h1>";
        return $d;
    }
// --------------------------------------------------------------



/////////////////////////////

/////////////////////////////////////////////
public function dangkythanhvien(Request $r){
    //dd($r->all());
    $messages=[];
    $validator= validator::make($r->all(),[
        'maten' => 'required|size:4|unique:members,"MemberID"',
        'ten' => 'required|unique:members,"MemberName"',
        'sdt' => 'required|unique:members, "Tel"',
        'email' => 'required|unique:members, "Email"',
        'diachi' => 'required',
        
    ],$messages);
    if($validator->fails())
        return redirect('/register')->withErrors($validator)->withInput();
        $maten     = $r->input('maten');
        $ten     = $r->input('ten');
        $sdt    = $r->input('sdt');
        $email     = $r->input('email');
        $diachi     = $r->input('diachi');
        DB::insert('insert into members (MemberID, MemberName, Tel, Email, Adress)
        values (?, ?, ?, ?, ?)',[$maten, $ten, $sdt, $email, $diachi]);
    
        return view('register', ['success'=>'Nhập thành công']);
}
// ---------------------------------------------------------------



//=================================================

    public function nhandi(Request $r){
        dd($r->all());

    }
  

}