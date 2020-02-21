@extends('layouts.app')
    @section('content')
        @foreach($roomDetails as $key => $value)
            @foreach($value['meetings'] as $key2 => $meeting)
                <div class="meetingFullContainer">
                    <div class="roomcardContainer">
                        <div class="detailsWrapper"> 
                            <h4 class="questionH1">TIME SLOT : {{ $meeting['timeSlot' ]}}</h4>   
                            <p class="detailsWrapperP">Number of People attending : {{ $meeting['numberOfPeople'] }}</p>
                            <p class="detailsWrapperP">Duration of Meeting : {{ $meeting['duration'] }}</p>
                            <p class="detailsWrapperP">Name : {{ $meeting['meetingName'] }}</p>
                            <p class="detailsWrapperP">Booker : {{ $meeting['bookerName'] }}</p>
                            <div class="btnWrapper">
                                <button class={{$meeting['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Booked" : "Book Meeting!" }}</button>
                                <button class={{$meeting['booked'] ? "pulse" : "disabled"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Delete this meeting" : "" }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    @endsection