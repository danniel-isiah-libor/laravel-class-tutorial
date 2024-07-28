<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const name = 'Ted Aron Cardona Jr';
    const address = 'Paranaque';
    const email = 'tedaronjr@gmail.com';

    public function getData()
    {
        return [
            'name' => fake()->name()
        ];
    }
}
