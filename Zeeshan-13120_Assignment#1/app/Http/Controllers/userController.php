<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
class userController extends Controller
{
    function insertData(Request $req){
        echo "I ma here";exit;
        $contactus= new contactUs;  
        $contactus->name=$req->name;  
        $contactus->email=$req->email;  
        $contactus->phoneNumber	=$req->phoneNumber;  
        $contactus->comment	=$req->comment;  
        $contactus->save();
        return view("Home");

    }
}
