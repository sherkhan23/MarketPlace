<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function country(Request $request){
        $countryQuery = Country::query();
        $country = $countryQuery->paginate(3);
        return view('country', compact('country'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\сountry  $country
     * @return \Illuminate\Http\Response
     */
    public function show(сountry $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\сountry  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(сountry $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\сountry  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, сountry $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\сountry  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(сountry $country)
    {
        //
    }
}
