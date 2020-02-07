<?php

namespace App\Http\Controllers;

use App\meetings;
use Illuminate\Http\Request;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rooms = json_decode(file_get_contents("meeting.json"), true);
        $path = storage_path() . "/json/meeting.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        $json = json_decode(file_get_contents($path), true); 

        return view ('meetings.index')->with('json', $json);
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
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function show(meetings $meetings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function edit(meetings $meetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meetings $meetings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(meetings $meetings)
    {
        //
    }
}
