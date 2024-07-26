<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\workExp;
use Illuminate\Http\Requeste;
class UserController extends Controller
{

   

    public function profile() {
        $name = profile::name;
        $address = Profile::address;
        $email = Profile::email;

        return " $name <br> $address <br> $email";
    }


    public function workExp() {
        $company = workExp::company;
        $workexp  = workExp::workexpi;
        return " $company <br> $workexp ";
    }
}
