@extends('layouts.app')

@section('content')
    <h1>Post your ideas</h1>

<form method="post" action="{{ route('contact-form-submit')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Task name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
          
        </div>

        <div class="form-group">
          <label for="email">Author Email address</label>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
          
        </div>
        <div class="form-group">
            <label for="message">Post Text</label>
            <textarea class="form-control" name="message" id="message" rows="18"></textarea>
          </div>
        
        <button type="submit" class="btn btn-primary"> Submit</button>
      </form>
@endsection