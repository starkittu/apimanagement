<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserpersonalDetails;

class UserController extends Controller
{
   
    public function userPersonalDetails(){
       $this->loggedinuser = Auth::user()->id;
       $userdetails['details'] = UserpersonalDetails::find($this->loggedinuser);
       //echo "<pre>";print_r($userdetails);exit;
       return view('users/personal_details',$userdetails); 
    }
}
