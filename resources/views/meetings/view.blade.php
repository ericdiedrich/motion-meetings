@extends('layouts.app')
    @section('content')
        {{-- <img onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/'" src="{{ asset('img/motionmeetings.gif') }}"> --}}
        @foreach($json as $key => $value)
        <div class="roomFullContainer">
            <div class="roomcardContainer">
                <div class="detailsWrapper"> 
                    <h1 class="roomTitle">{{ $value['name' ]}}</h1>   
                    <h4 class="detailsWrapperH4">Capacity: {{ $value['capacity'] }}</h4>
                    <div class="btnWrapper">
                    {{-- <button class={{$meeting['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Booked" : "Book Meeting!" }}</button> --}}
                    </div>
                </div>
            </div>
        </div>
            @foreach($value['meetings'] as $key2 => $meeting)
                @if($meeting['booked'] === true)
                    <div class="meetingFullContainer">
                        <div class="roomcardContainer">
                            <div class="detailsWrapper"> 
                                <h4 class="detailsWrapperH4">TIME SLOT : {{ $meeting['timeSlot' ]}}</h4>   
                                <p class="detailsWrapperP">Number of People attending : {{ $meeting['numberOfPeople'] }}</p>
                                <p class="detailsWrapperP">Duration of Meeting : {{ $meeting['duration'] }}</p>
                                <p class="detailsWrapperP">Name : {{ $meeting['meetingName'] }}</p>
                                <p class="detailsWrapperP">Booker : {{ $meeting['bookerName'] }}</p>
                                <div class="btnWrapper">
                                {{-- <button class={{$meeting['booked'] ? "pulse" : "raise"}} onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}&data={{$meeting['timeSlot']}}'"> {{ $meeting['booked'] ? "Booked" : "Book Meeting!" }}</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endsection