<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);



        return view ('meetings.index')->with('json', $json);
    }

    public function view() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);



        return view ('meetings.view')->with('json', $json);
    }

    public function profile() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);



        return view ('meetings.profile')->with('json', $json);
    }

    public function rooms() {

        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);
        $number = $_GET['numberOfPeople'];
        $int_cast = (int)$number;
        $selectedRooms = [];

        foreach ($json as $key => $values) {
            if(is_array($values) && $values['capacity'] >= $int_cast) {
                array_push($selectedRooms, $values);
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
        // $path2 = storage_path() . "/json/test.json";
        $json = json_decode(file_get_contents($path), true);
        // $test = json_decode(file_get_contents($path2), true);

        // foreach ($test as $key => $values) {
        //     if($key == "job" ) {
        //         $test['job'] = "Software Developer";
                
        //     }
        //     // dd("My key: " . $key . " My Value: " .$values);
        // }
        // file_put_contents($path2, json_encode($test, JSON_PRETTY_PRINT));

        // dd($test);



        $myTimeSlot = request()->input('timeSlot');
        $myCurrentRoom = request()->input('tag');
        $numberOfPeopleForMeeting = request()->input('numberOfPeople');
        $meetingDuration = request()->input('duration');
        $meetingName = request()->input('meetingName');
        $bookerName = request()->input('bookerName');


        // dd($bookerName);

        // dd($myCurrentRoom);
        //Loop over all rooms
        foreach ($json as $key => $values) {
            //Loop over all meetings for the room
            // dd($values['tag']);
            // $updatedMeeting = false;
            foreach ($values['meetings'] as $key2 => $meeting) {
                //Check if the current meeting's time slot matches my request timeslot
                // dd($values);
                // print_r($myTimeSlot);
                // dd($meeting['timeSlot']);
                // $meeting["bookerName"] = "hello";
                // dd($meeting);
                if($meeting['timeSlot'] == $myTimeSlot && $values['tag'] === $myCurrentRoom){
                    // echo $values['tag'];
                    // dd("My time slot is " . $meeting['timeSlot'] . " and I'm inside of the " .  $values['tag']);
                    // $meeting["bookerName"] = "sampaio";
                    $json[$key]['meetings'][$key2]["bookerName"] = $bookerName;
                    $json[$key]['meetings'][$key2]["meetingName"] = $meetingName;
                    $json[$key]['meetings'][$key2]["duration"] = $meetingDuration;
                    $json[$key]['meetings'][$key2]["numberOfPeople"] = $numberOfPeopleForMeeting;
                    $json[$key]['meetings'][$key2]["timeSlot"] = $myTimeSlot;
                    $json[$key]['meetings'][$key2]["booked"] = true;
                    //dd($json[$key]['meetings'][$key2]["bookerName"]);
                    // dd("My current booker is " . $meeting["bookerName"]);
                    
                    // $updatedMeeting = true;
                    //If it matches, update the current meeting we're on in the loop
                }
                // if($key2 == 1) {
                //     // dd($meeting);
                //     dd($values['meetings'][0]);
                // }
                
            }

            // dd($json[$key]['meetings'][0]["bookerName"]);

            // if($updatedMeeting) {
            //     // $meeting['numberOfPeople'] = request()->input('numberOfPeople');
            //     // $meeting['duration'] =request()->input('duration');
            //     // $meeting['meetingName'] =request()->input('meetingName');
            //     $meeting['bookerName'] =request()->input('bookerName');
            //     // $meeting['booked'] = true;
            //     break;
            // }
        }
        file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT));
        return redirect()->action(
            'RoomsController@rooms', ['numberOfPeople' => 0]
        );
    }

    public function deletemeeting() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $key => $values) {
            foreach ($values['meetings'] as $key2 => $meeting) {
                if($meeting['timeSlot'] == $myTimeSlot && $values['tag'] === $myCurrentRoom){
                    $json[$key]['meetings'][$key2]["bookerName"] = '';
                    $json[$key]['meetings'][$key2]["meetingName"] = '';
                    $json[$key]['meetings'][$key2]["duration"] = '';
                    $json[$key]['meetings'][$key2]["numberOfPeople"] = '';
                    $json[$key]['meetings'][$key2]["timeSlot"] = '';
                    $json[$key]['meetings'][$key2]["booked"] = false;
                }
            }
        }
    }






 
}
