<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms() {

        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true); 
        // var_dump($json);

        $number = $_GET['numberOfPeople'];
        $int_cast = (int)$number;
        // var_dump(gettype($int_cast));
        // $arrays = ["pink" => [5, "TV"], "orange" => [10, "TV"], "blue" => [2, "Phone"]];
        $selectedRooms = [];

        // foreach($json as $room) {
        //     if( $room["capacity"] > $int_cast  ) {
        //         array_push($selectedRooms, $capacity);
        //         return view('meetings.pinkroom')->with('json', $json);
        //     } elseif ($array[0] < $int_cast) {
        //         return view('meetings.orangeroom')->with('json', $json);
        //     } elseif ($array[0] > $int_cast) {
        //         return view('meetings.blueroom')->with('json', $json);;
        //     } else {
        //         echo "error";
        //     }    
        // }

        foreach ($json as $key => $values) {
            // foreach ($room->capacity as $capacity) {
            //     if( $capacity > $int_cast  ) {
            //         array_push($selectedRooms, $capacity);
            //         return view('meetings.pinkroom')->with('json', $json);
            //     }   
            // }
            // print_r($values["capacity"]);
            // echo "<br />";

            if( $values["capacity"] >= $int_cast  ) {
                array_push($selectedRooms, $values);
                echo 'The room ' . $values['tag'] .  ' can fit ' . $int_cast . ' because it has a capacity of ' . $values['capacity'];
                echo "<br />";
            }





            // foreach($values as $key2 => $values2) {
            //     // print_r($values2);
            //     echo $values2;
            //     echo "<br />";
            // }
            
          }
        return view ('meetings.rooms')->with('selectedRooms', $selectedRooms);
        // return view('meetings.rooms')->with('number', $selectedRooms);
    }

    public function book() {
        $path = storage_path() . "/json/meeting.json";
        $json = json_decode(file_get_contents($path), true);

        $selectedRoom = $_GET['room'];
  
        $roomDetails = [];

        foreach ($json as $key => $values) {
            if( $values["tag"] == $_GET['room']  ) {
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
            if( $values["tag"] == $_GET['meeting']  ) {
                array_push($roomDetails, $values);
            }
        }

        $data = [ 
            'roomDetails' => $roomDetails,
            'selectedRoom' => $selectedRoom
        ];
        return view ('meetings.bookroom')->with($data);

        
    }






}
