@extends('layouts.app')
    @section('content')
        @if($json > 0)
            @foreach($json as $value)
                {{-- @foreach($meeting1 as $key => $value) --}}
                <div class="meetingFullContainer">
                    <div class="timeSection">
                        <p>9:00 - 9:30 : {{ print_r($value['meetings'[0]]) }}</p>





                        {{-- <p class={{$room['pinkmeeting1'] ? "individualTime" : "disabled"}}>9:00 - 9:30 : {{ $room['pinkmeeting1'] ? "True" : "False" }}</p> --}}
                        {{-- <button id="roombtn" class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">9:00 - 9:30 : {{ $room['meeting1'] ?? '' }}</button>
                        <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">9:30 - 10:00 : {{ $room['meeting2'] ?? '' }}</button>
                        <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">10:00 - 10:30 : {{ $room['meeting3'] ?? '' }}</button>
                        <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">10:30 - 11:00 : {{ $room['meeting4'] ?? '' }}</button>
                        <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">11:00 - 11:30 : {{ $room['meeting5'] ?? '' }}</button>
                        <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/meetings/create?room=pinkroom/create?room={{$room ?? ''}}'">13:30 - 14:00 : {{ $room['meeting11'] ?? '' }}</button> --}}
                    </div>
                    {{-- <h1>The Pink Room!</h1> --}}
                </div>
                {{-- @endforeach --}}
            @endforeach
        @endif
@endsection