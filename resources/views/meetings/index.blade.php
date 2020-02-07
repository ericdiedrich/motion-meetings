<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Motion Meetings!</title>
</head>
<body>
    {{-- {{ var_dump($json)}} --}}
    @if(count($json) > 0)
        @foreach($json as $room)
        <div class="meetingFullContainer">
            <div class="roomcardContainer">
                <div class="roomTitleCapacityWrapper">
                    <p class="roomName">{{ $room['name'] }} <br /></p>
                    <p class="roomName">Room capacity: {{ $room['capacity'] }}</p>
                </div>
                <div class="detailsWrapper">
                    <p>The current items in this room are:</p>
                    <p>Tv: {{ $room['tv'] ? "True" : "False" }}</p> 
                    <p>Phone: {{ $room['phone'] ? "True" : "False"}}</p> 
                    <p>Projector: {{ $room['projector'] ? "True" : "False" }}</p> 
                    <p>Wheelchair Access: {{ $room['wheelchairacess'] ? "True" : "False" }}</p>
                    <a class="bookingBtn" href="">Book this room!</a>
                </div>
            </div>
            <div class="bookedMeetings">
                {{-- Booked meetings: {{ $room['bookedmeetings']}} --}}
                <div class="timeSection">
                    <p>9:00 - 9:30 : {{ $room['bookedmeetings'] ? "False" : "True" }}</p>
                    <p>9:30 - 10:00 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>10:00 - 10:30 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>10:30 - 11:00 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>11:00 - 11:30 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                </div>
                <div class="timeSection">
                    <p>11:30 - 12:00 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>12:00 - 12:30 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>12:30 - 13:00 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>13:00 - 13:30 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                    <p>13:30 - 14:00 : {{ $room['bookedmeetings'] ? "True" : "False" }}</p>
                </div>
            </div>
        </div>
        {{-- {{ var_dump($json)}} --}}
        @endforeach
    @endif
</body>
</html>