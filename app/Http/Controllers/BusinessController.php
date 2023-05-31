<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use App\Models\Business;
use App\Models\City;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        UserLog::create([
            'log_type' => 2
        ]);
        
        if ($request->has('city') || $request->has('price_range') || $request->has('search')) {
            if ($request->city != "0") {
                if ($request->price_range != "Semua") {
                    if ($request->search == "") {
                        if ($request->price_range == "<=60") {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day <= 60000')->where('city_id', '=', $request->city)->get();
                        } else if ($request->price_range == ">60<=100") {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 60000')->whereRaw('price_per_day <= 100000')->where('city_id', '=', $request->city)->get();
                        } else {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 100000')->where('city_id', '=', $request->city)->get();
                        }
                    } else {
                        $city = City::where('name', 'like', '%' . $request->search . '%')->get();
    
                        if ($request->price_range == "<=60") {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day <= 60000')->where('city_id', '=', $request->city)->where(function ($query) use ($request, $city) {
                                $query->whereIn('city_id', $city->pluck('id'))
                                    ->orWhere('name', 'like', '%' . $request->search . '%')
                                    ->orWhere('address', 'like', '%' . $request->search . '%')
                                    ->orWhere('description', 'like', '%' . $request->search . '%');
                            })->get();
                        } else if ($request->price_range == ">60<=100") {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 60000')->whereRaw('price_per_day <= 100000')->where('city_id', '=', $request->city)->where(function ($query) use ($request, $city) {
                                $query->whereIn('city_id', $city->pluck('id'))
                                    ->orWhere('name', 'like', '%' . $request->search . '%')
                                    ->orWhere('address', 'like', '%' . $request->search . '%')
                                    ->orWhere('description', 'like', '%' . $request->search . '%');
                            })->get();
                        } else {
                            $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 100000')->where('city_id', '=', $request->city)->where(function ($query) use ($request, $city) {
                                $query->whereIn('city_id', $city->pluck('id'))
                                    ->orWhere('name', 'like', '%' . $request->search . '%')
                                    ->orWhere('address', 'like', '%' . $request->search . '%')
                                    ->orWhere('description', 'like', '%' . $request->search . '%');
                            })->get();
                        }
                    }
                } else if ($request->search != "") {
                    $city = City::where('name', 'like', '%' . $request->search . '%')->get();

                    $businesses = Business::where('business_type_id', '=', '1')->where('city_id', '=', $request->city)->where(function ($query) use ($request, $city) {
                        $query->whereIn('city_id', $city->pluck('id'))
                            ->orWhere('name', 'like', '%' . $request->search . '%')
                            ->orWhere('address', 'like', '%' . $request->search . '%')
                            ->orWhere('description', 'like', '%' . $request->search . '%');
                    })->get();
                } else {
                    $businesses = Business::where('business_type_id', '=', '1')->where('city_id', '=', $request->city)->get();
                }
            } else if ($request->price_range != "Semua") {
                if ($request->search != "") {
                    $city = City::where('name', 'like', '%' . $request->search . '%')->get();

                    if ($request->price_range == "<=60") {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day <= 60000')->where(function ($query) use ($request, $city) {
                            $query->whereIn('city_id', $city->pluck('id'))
                                ->orWhere('name', 'like', '%' . $request->search . '%')
                                ->orWhere('address', 'like', '%' . $request->search . '%')
                                ->orWhere('description', 'like', '%' . $request->search . '%');
                        })->get();
                    } else if ($request->price_range == ">60<=100") {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 60000')->whereRaw('price_per_day <= 100000')->where(function ($query) use ($request, $city) {
                            $query->whereIn('city_id', $city->pluck('id'))
                                ->orWhere('name', 'like', '%' . $request->search . '%')
                                ->orWhere('address', 'like', '%' . $request->search . '%')
                                ->orWhere('description', 'like', '%' . $request->search . '%');
                        })->get();
                    } else {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 100000')->where(function ($query) use ($request, $city) {
                            $query->whereIn('city_id', $city->pluck('id'))
                                ->orWhere('name', 'like', '%' . $request->search . '%')
                                ->orWhere('address', 'like', '%' . $request->search . '%')
                                ->orWhere('description', 'like', '%' . $request->search . '%');
                        })->get();
                    }
                } else {
                    if ($request->price_range == "<=60") {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day <= 60000')->get();
                    } else if ($request->price_range == ">60<=100") {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 60000')->whereRaw('price_per_day <= 100000')->get();
                    } else {
                        $businesses = Business::where('business_type_id', '=', '1')->whereRaw('price_per_day > 100000')->get();
                    }
                }
            } else {
                $city = City::where('name', 'like', '%' . $request->search . '%')->get();

                $businesses = Business::where('business_type_id', '=', '1')->where(function ($query) use ($request, $city) {
                    $query->whereIn('city_id', $city->pluck('id'))
                        ->orWhere('name', 'like', '%' . $request->search . '%')
                        ->orWhere('address', 'like', '%' . $request->search . '%')
                        ->orWhere('description', 'like', '%' . $request->search . '%');
                })->get();
            }
        } else {
            $businesses = Business::where('business_type_id', '=', '1')->get();
        }

        return view('pethotellist',[     
            'title' => 'Contact',
            'cities' => City::all(),
            'pethotels' => $businesses
            ]);
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
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
