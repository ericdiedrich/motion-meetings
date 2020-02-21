@extends('layouts.app')
    @section('content')
        @if($selectedRooms > 0)
                @foreach($selectedRooms as $room)
                <div class="roomFullContainer">
                    <div class="roomcardContainer">
                        <div class="roomTitleCapacityWrapper">
                            <h1 class="roomName"><span>{{ $room['name'] }}</span> <br /></h1>
                            <p class="detailsWrapperH4">Room capacity: {{ $room['capacity'] }}</p>
                        </div>
                        <div class="detailsWrapper">
                            <h4 class="detailsWrapperH4">Room Items:</h4>
                            <p class="detailsWrapperP">Tv: {{ $room['tv'] ? "True" : "False" }}</p> 
                            <p class="detailsWrapperP">Phone: {{ $room['phone'] ? "True" : "False"}}</p> 
                            <p class="detailsWrapperP">Projector: {{ $room['projector'] ? "True" : "False" }}</p> 
                            <p class="detailsWrapperP">Wheelchair Access: {{ $room['wheelchairacess'] ? "True" : "False" }}</p>
                            <div class="btnWrapper">
                                <button class="raise" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/book?room={{$room['tag']}}'">Book this room!</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    @endsection