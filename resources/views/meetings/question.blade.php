@extends('layouts.app')
    @section('content')
       <h1 class="questionH1">Questions</h1>
       <form action="/motion-meeting/public/rooms" method="get">
        <label for="numberOfPeople" >How many people are attending?: (Max 10)</label>
        <input name="numberOfPeople" type="text">
        <button class="fill" type="submit">SUBMIT</button>
       </form>
    @endsection
