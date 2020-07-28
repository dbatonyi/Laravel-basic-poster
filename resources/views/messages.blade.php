@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
        <ul class="list-group p-2">
            <li class="list-group-item list-group-item-primary list-group-item-action">
               <h3> <strong> {{ $message->name }} </strong></h3>
            </li>
            
            <li class="list-group-item">
              <h4>  {{ $message->subject }} </h4>
            </li>
            <li class="list-group-item">
              <p>  {{ $message->message }} </p>
            </li>
        </ul>
    @endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8 offset-md-2">
    {!! $messages->appends(Request::all())->links() !!}   
            </div>
            </div>
</div>
@endsection