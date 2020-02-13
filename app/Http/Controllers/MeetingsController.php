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
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true); 
        // return view ('meetings.index')->with('json', $json);
        return view('meetings.question');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true); 
        $room = $_GET['room'];
        if ($room == "pinkroom") {
            return view('meetings.pinkroom')->with('json', $json);;
        } elseif ($room == "orangeroom") {
            return view('meetings.orangeroom')->with('json', $json);;
        } elseif ($room == "blueroom") {
            return view('meetings.blueroom')->with('json', $json);;
        } else {
            echo "error";
        }
        return view ('meetings.create')->with('json', $json);
        // var_dump($room);
        // return view('meetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true); 
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
