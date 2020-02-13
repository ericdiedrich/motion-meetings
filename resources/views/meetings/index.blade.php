@extends('layouts.app')
    @section('content')
        {{-- <button onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings'" class="offset" /> --}}
        @if(count($json) > 0)
            @foreach($json as $room)
            <div class="meetingFullContainer">
                <div class="roomcardContainer">
                    <div class="roomTitleCapacityWrapper">
                        <h1 id="pinkR" class="roomName"><span>{{ $room['name'] }}</span> <br /></h1>
                        <p class="roomName">Room capacity: {{ $room['capacity'] }}</p>
                    </div>
                    <div class="detailsWrapper">
                        <h4>Room Items:</h4>
                        <p>Tv: {{ $room['tv'] ? "True" : "False" }}</p> 
                        <p>Phone: {{ $room['phone'] ? "True" : "False"}}</p> 
                        <p>Projector: {{ $room['projector'] ? "True" : "False" }}</p> 
                        <p>Wheelchair Access: {{ $room['wheelchairacess'] ? "True" : "False" }}</p>
                        <div class="btnWrapper">
                            <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room={{$room['tag']}}'">Book this room!</button>
                        </div>
                    </div>
                </div>
                <div class="bookedMeetings">
                    <div class="timeSection">
                        <p class={{$room['meeting1'] ? "individualTime" : "disabled"}}>9:00 - 9:30 : {{ $room['meeting1'] ? "True" : "False" }}</p>
                        <p class="individualTime">9:30 - 10:00 : {{ $room['meeting2'] ? "True" : "False" }}</p>
                        <p class="individualTime">10:00 - 10:30 : {{ $room['meeting3'] ? "True" : "False" }}</p>
                        <p class="individualTime">10:30 - 11:00 : {{ $room['meeting4'] ? "True" : "False" }}</p>
                        <p class="individualTime">11:00 - 11:30 : {{ $room['meeting5'] ? "True" : "False" }}</p>
                    </div>
                    <div class="timeSection">
                        <p class="individualTime">11:30 - 12:00 : {{ $room['meeting6'] ? "True" : "False" }}</p>
                        <p class="individualTime">12:00 - 12:30 : {{ $room['meeting7'] ? "True" : "False" }}</p>
                        <p class="individualTime">12:30 - 13:00 : {{ $room['meeting8'] ? "True" : "False" }}</p>
                        <p class="individualTime">13:00 - 13:30 : {{ $room['meeting9'] ? "True" : "False" }}</p>
                        <p class="individualTime">13:30 - 14:00 : {{ $room['meeting10'] ? "True" : "False" }}</p>
                    </div>
                </div>
            </div>
            {{-- {{ var_dump($json)}} --}}
            @endforeach
        @endif
    @endsection
