<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pyramid extends Controller
{
    /**
     * Display a listing of the resource.
     * $i is representing the number or rows to be displayed
     * $j is the asterisk to be displayed in every row staring from 1 to 5 representing as a pyramid style

     */
    public function index()
    {
        for($i=1;$i<=5;$i++){
            for($j=1;$j<=$i;$j++){
             echo "*";
            }
            echo "<br />";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
