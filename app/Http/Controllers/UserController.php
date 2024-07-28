<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\StoreWorkExperienceRequest;
use App\Models\Profile;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display user Profile
     * 
     * @return string
     */
    public function profile(){
        $name = Profile::name;
        $address = Profile::address;
        $email = Profile::email;
        return "<h3>Name:</h3><h2>$name</h2><br>
                <h3>address:</h3><h2>$address</h2><br>
                <h3>email:</h3><h2>$email</h2><br>";
    }

    /**
     * Display user's work-experience
     * 
     * @return string
     */
    public function workExperience(){
        return view('work-experience');
    }

    public function storeExperience(StoreWorkExperienceRequest $request){
        $data = $request->validated();
        $user_id = $data['user_id'];
        return back()->with('success', 'Work Experience for '. $user_id .' added successfully');
    }

    public function request(Request $request){
        dd($request->query('name'));
    }

    public function register(){
        return view('register');
    }

    public function store(RegistrationRequest $request){
        $data = $request->validated();
        
        dd($data);
    }
}
