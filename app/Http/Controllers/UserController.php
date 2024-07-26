<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function profile()
    {
        $name = Profile::name;
        $address = Profile::address;
        $email = Profile::email;

        return "<h2>Name: $name</h2>
                <h2>Address: $address</h2>
                <h2>Email: $email</h2>" 
                ; 
    }

    
        public function workExperience()
            {
                $company = WorkExperience::company;
                $position = WorkExperience::position;
        
                return "<h2>Company: $company</h2>
                        <h2>Position: $position</h2>" 
                        ; 
            }

}
