<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return string
     */
    public function profile()
    {
        $name = (new Profile)->getData()['name'];
        $address = Profile::address;
        $email = Profile::email;

        return "
            <strong>Name: </strong> $name
            <br>
            <strong>Address: </strong> $address
            <br>
            <strong>Email: </strong> $email
        ";
    }

    /**
     * Display the user's work experience.
     *
     * @return string
     */
    public function workExperience()
    {
        // env('DB_CONNECTION');
        config('database.default');

        return "
            <strong>Company: </strong> Inventive Media
            <br>
            <strong>Position: </strong> Trainer
        ";
    }

    /**
     * Display register page.
     *
     * @return view
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a new user.
     *
     */
    public function store(Request $request)
    {
        /**
         * name
         * email
         * password
         * confirm password
         */

        // if ($request->name !== null) {
        //     return "Error";
        // }

        $request->validate([
            'name' => ['required', 'alpha', 'string', 'max:50'],
            'email' => [
                'required',
                'string',
                'email',
                'unique:users,email',
                'max:50'
            ],
            'password' => [
                'required',
                'string',
                'max:12',
                // 'min:8',
                'confirmed',
                Password::min(8)
                    ->numbers()
                    ->mixedCase()
                    ->symbols()
                    ->letters()
            ],
            'confirm_password' => 'required'
        ]);

        dd("Test");
    }

    /**
     * Display login page.
     *
     * @return view
     */
    public function login()
    {
        return view('login');
    }
}
