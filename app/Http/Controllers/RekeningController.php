<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekeningM;
class RekeningController extends Controller
{
    public function index(){
       $rekening = RekeningM::get();
        return view('admin.rekening.index',compact(['rekening']));
   }
}
