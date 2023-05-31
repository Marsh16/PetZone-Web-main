<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'petOwner_name' => 'required',
            'pet_name' => 'required',
            'pet_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'payment_method' => 'required',
            'total_price' => 'required|numeric',
        ]);

        Transaction::create([
            // 'id' => $imgBase,
            'petOwner_name' => $request->petOwner_name,
            'pet_name' => $request->pet_name,
            'pet_type' => $request->pet_type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
        ]);

        return redirect('/dasbor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
