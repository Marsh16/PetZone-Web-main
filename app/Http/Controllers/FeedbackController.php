<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedback = Feedback::all();

        UserLog::create([
            'log_type' => 1
        ]);
        
        return view('home', [     
            'title'=>'Home',
            'feedback' => $feedback,
            'user'=>1,
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
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'feedback_content' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Failed to submit feedback, there's an error in your data."
            ]);
        }

        Feedback::create([
            'user_id' => $request->user_id,
            'feedback_content' => $request->feedback_content
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Feedback Successfully Submitted."
        ]);
    }

    public function store2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'feedback_content' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Failed to submit feedback, there's an error in your data."
            ]);
        }

        Feedback::create([
            'user_id' => $request->user_id,
            'feedback_content' => $request->feedback_content
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
