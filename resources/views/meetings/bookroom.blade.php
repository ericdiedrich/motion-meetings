@extends('layouts.app')
    @section('content')
      <h1>THIS SPECIFIC MEETING</h1>
      <form action="/motion-meeting/public/bookroom" method="POST">
        <div>
          <div class="detailsWrapperH4">
            <label for="tag">Which Room?: (pinkroom, orangeroom, blueroom)</label>
            <select class="selectDropDown" name="tag">
              <option value="pinkroom">The Pink Room</option>
              <option value="orangeroom">The Orange Room</option>
              <option value="blueroom">The Blue Room</option>
            </select>
          </div>

          <label class="storeForm2" for="timeSlot">TimeSlot</label>
          <input name="timeSlot" type="text">

          <label class="storeForm2" for="numberOfPeople">How many people</label>
          <input name="numberOfPeople" type="text">

          <label class="storeForm2" for="duration">Duration of Meeting</label>
          <input name="duration" type="text">

          <label class="storeForm2" for="meetingName">Name of Meeting</label>
          <input name="meetingName" type="text">

          <label class="storeForm2" for="bookerName">Name of Booker</label>
          <input name="bookerName" type="text">

                {{-- <div>
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
                </div> --}}
            
        </div>
          <button name="submit" type="submit">SUBMIT</button>
          {{ csrf_field() }}
      </form>
    @endsection

    {{-- onclick="window.location.href='http:\/\/localhost:8888/motion-meeting/public/bookroom?meeting={{$selectedRoom}}}} --}}