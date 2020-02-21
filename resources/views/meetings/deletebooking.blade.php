@extends('layouts.app')
    @section('content')
        <form action="/motion-meeting/public/bookroom" method="POST">
            <div>
                <label for="tag">Which Room?: (pinkroom, orangeroom, blueroom)</label>
                <select name="tag">
                    <option value="pinkroom">The Pink Room</option>
                    <option value="orangeroom">The Orange Room</option>
                    <option value="blueroom">The Blue Room</option>
                </select>

                <label for="timeSlot">TimeSlot</label>
                <input name="timeSlot" type="text">

            </div>
            <button name="submit" type="submit">SUBMIT</button>
            {{ csrf_field() }}
        </form>
    @endsection