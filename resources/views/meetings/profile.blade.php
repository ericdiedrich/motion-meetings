@extends('layouts.app')
    @section('content')
    <div class="profileFullContainer">
        <img class="navImg" onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/profile'" src="{{ asset('img/defaultPP.png') }}">
        <h3>Username: </h3>
        <h3>Rank: </h3>
        <h3>Total Meetings Created: </h3>
        <h3>Total Meetings Attended: </h3>
    </div>
    @endsection