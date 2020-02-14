<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function bookmeeting() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);

        foreach ($json as $values) {
            foreach ($values['meetings'] as $key2 => $meeting) {
                if(!empty(request()->input('numberOfPeople'))){
                    dd($meeting);
                    // $meeting['booked'] = request()->input(true);
                    // $meeting['numberOfPeople'] = request()->input('numberOfPeople');
                    // $meeting['duration'] = request()->input('duration');
                    // $meeting['meetingName'] = request()->input('meetingName');
                    // $meeting['bookerName'] = request()->input('bookerName');


                }
            }
            
        }

        // file_put_contents($path, json_encode($json, JSON_FORCE_OBJECT));

        // file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT));
        // return redirect()->back()->with('success', 'This was succesfully updated');
    }
}
