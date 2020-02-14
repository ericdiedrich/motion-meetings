<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms() {

        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);
        $number = $_GET['numberOfPeople'];
        $int_cast = (int)$number;
        $selectedRooms = [];

        foreach ($json as $key => $values) {
            if(is_array($values) && $values['capacity'] >= $int_cast) {
                array_push($selectedRooms, $values);
                echo 'The room ' . $values['tag'] .  ' can fit ' . $int_cast . ' because it has a capacity of ' . $values['capacity'];
                echo "<br />";
            }
        }

        return view ('meetings.rooms')->with('selectedRooms', $selectedRooms);
    }

    public function book() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);
        $selectedRoom = $_GET['room'];
        $roomDetails = [];

        foreach ($json as $key => $values) {
            if(is_array($values) && $values['tag'] == $_GET['room']) {
                array_push($roomDetails, $values);
            }
        }

        $data = [ 
            'roomDetails' => $roomDetails,
            'selectedRoom' => $selectedRoom
        ];

        return view ('meetings.book')->with($data);
    }

    public function bookroom() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);
        $selectedRoom = $_GET['meeting'];
        $roomDetails = [];

        foreach ($json as $key => $values) {
            if(is_array($values) && $values['tag'] == $_GET['meeting']) {
                array_push($roomDetails, $values);
            }
        }

        $data = [ 
            'roomDetails' => $roomDetails,
            'selectedRoom' => $selectedRoom
        ];



        return view ('meetings.bookroom')->with($data);   
    }

    public function bookmeeting() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);

        $myMeetingName = request()->input('meetingName');

        foreach ($json as $key => $values) {
            foreach ($values as $key2 => $meeting) {
                if(!empty(request()->input($myMeetingName))){
                    $meeting['meetingName'] = request()->input($myMeetingName);
                    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT));
                    // $meeting['booked'] = request()->input(true);
                    // $meeting['duration'] = request()->input('duration');
                    // $meeting['meetingName'] = request()->input('meetingName');
                    // $meeting['bookerName'] = request()->input('bookerName');

                        // if($meeting === 'meetingName') {
                        //     $meeting[value] = json.update($myMeetingName);
                        // }
                }
            }
            
        }


        // file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT));
        // return redirect()->back()->with('success', 'This was succesfully updated');
    }
 
}
