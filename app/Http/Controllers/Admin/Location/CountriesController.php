<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$countries = Country::get();

        $countries = Country::orderBy('name', 'asc')
                        ->get();

        return view('admin.location.countries')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.createcountry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'flag' => 'image|max:1999',
        ]);
        
        //Get filename with extension
        $filenameWithExt = $request -> file('flag')->getClientOriginalName();

        //Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //Get extension
        $extension = $request->file('flag')->getClientOriginalExtension();

        //Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        //Upload image
        $path = $request->file('flag')->storeAs('public/img/flags', $filenameToStore);

        //Create Country
        $country = new Country;
        $country->name = $request->input('name');
        $country->iso2 = $request->input('iso2');
        $country->iso3 = $request->input('iso3');
        $country->phoneCode = $request->input('phoneCode');
        $country->flag = $filenameToStore;

        $country->save();

        return redirect('/countries')->with('success', 'Country Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
