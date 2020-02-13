@extends('layouts.app')
    @section('content')
    <form>
        <h1><span>MOTION</span> MEETINGS</h1>
        <input placeholder="Duration" type="text"/>
        <input placeholder="Room" type="text"/>
        <input placeholder="Number of People" type="text"/>
        <input placeholder="Name of Meeting" type="text"/>
        <input placeholder="Name of Booker" type="text"/>
        <button class="pulse">Submit</button>
    </form>
    @endsection