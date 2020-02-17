@extends('layouts.app')
    @section('content')
        @foreach($json as $key => $value)
        <div class="">
            <div class="">
                <div class=""> 
                    <h4>Room: {{ $value['name' ]}}</h4>   
                    <p>Capacity: {{ $value['capacity'] }}</p>
                    <div class="btnWrapper">
                    {{-- <button class={{$meeting['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Booked" : "Book Meeting!" }}</button> --}}
                    </div>
                </div>
            </div>
        </div>
            @foreach($value['meetings'] as $key2 => $meeting)
                <div class="meetingFullContainer">
                    <div class="roomcardContainer">
                        <div class="detailsWrapper"> 
                            <h4>TIME SLOT : {{ $meeting['timeSlot' ]}}</h4>   
                            <p>Number of People attending : {{ $meeting['numberOfPeople'] }}</p>
                            <p>Duration of Meeting : {{ $meeting['duration'] }}</p>
                            <p>Name : {{ $meeting['meetingName'] }}</p>
                            <p>Booker : {{ $meeting['bookerName'] }}</p>
                            <div class="btnWrapper">
                            {{-- <button class={{$meeting['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Booked" : "Book Meeting!" }}</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    @endsection