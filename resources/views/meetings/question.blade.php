@extends('layouts.app')
    @section('content')
       <h1>Questions</h1>
       <form action="/motion-meeting/public/rooms" method="get">
        <label for="numberOfPeople" >How many people</label>
        <input name="numberOfPeople" type="text">
        <button type="submit">SUBMIT</button>
       </form>
    @endsection
