@extends('layouts.app')
    @section('content')
        <h1>THIS SPECIFIC MEETING</h1>
        <form action="/motion-meeting/public/rooms" method="get">
            <div>
                <label for="numberOfPeople">How many people</label>
                <input name="numberOfPeople" type="text">

                <label for="duration">Duration of Meeting</label>
                <input name="duration" type="text">

                <label for="meetingName">Name of Meeting</label>
                <input name="meetingName" type="text">

                <label for="bookerName">Name of Booker</label>
                <input name="bookerName" type="text">

                <div>
                    <label class="container">One
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                      
                      <label class="container">Two
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      
                      <label class="container">Three
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      
                      <label class="container">Four
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                </div>
            
            </div>
            <button type="submit" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}}}'">SUBMIT</button>
        </form>
    @endsection