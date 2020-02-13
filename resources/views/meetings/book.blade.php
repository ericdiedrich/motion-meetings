@extends('layouts.app')
    @section('content')
        @foreach($roomDetails as $key => $value)
            <p>{{ $value['name'] }}</p>
            @foreach($value['meetings'] as $key2 => $value2)
                <div class="meetingFullContainer">
                    <div class="roomcardContainer">
                        <div class="detailsWrapper"> 
                            <h4>TIME SLOT : {{ $value2['timeSlot' ]}}</h4>   
                            <p>Number of People attending : {{ $value2['numberOfPeople'] }}</p>
                            <p>Duration of Meeting : {{ $value2['duration'] }}</p>
                            <p>Name : {{ $value2['meetingName'] }}</p>
                            <p>Booker : {{ $value2['bookerName'] }}</p>
                            <div class="btnWrapper">
                                {{-- {{var_dump($selectedRoom)}}
                                {{var_dump($value2)}} --}}
                            <button class={{$value2['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$value2['timeSlot']}}'"> {{ $value2['booked'] ? "Booked" : "Book Meeting!" }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    @endsection