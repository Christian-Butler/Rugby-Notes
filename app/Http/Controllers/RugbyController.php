<?php

namespace App\Http\Controllers;

use App\Models\fs;
use Illuminate\Http\Request;

class RugbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'first_name' => $this->faker->namespace,
            'last_name' => $this->faker->namespace,
            'dob' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31') ->format('d/m/Y'), // outputs something like 17/09/2001
            'player_number' => $this->faker->integer
        ];

        return
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fs  $fs
     * @return \Illuminate\Http\Response
     */
    public function show(fs $fs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fs  $fs
     * @return \Illuminate\Http\Response
     */
    public function edit(fs $fs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fs  $fs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fs $fs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fs  $fs
     * @return \Illuminate\Http\Response
     */
    public function destroy(fs $fs)
    {
        //
    }
}
