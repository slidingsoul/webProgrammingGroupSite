@extends('layout.master')
@section('container')

<div class="container-fluid mt-3">
  <div class="card text-center mb-3" style="width: 25rem;">
    <div class="card-header">
      <h3>Member of Team Crusader</h3>
    </div>
    <div class="card-body">
      <p>
        @foreach($data as $key => $value)

        @if($value->user == 'odit')
        <b>Ketua: </b>
        @endif
        {{$value->name}} - {{$value->nim}} <br>
        @endforeach
      </p>
    </div>
  </div>

  <!-- start cards -->

  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/daniel.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Daniel</h5>
          <a href="{{url('profile/daniel')}}" class="btn btn-primary">Go to profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/nathan.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nathan</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="{{url('profile/nathan')}}" class="btn btn-primary">Go to profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/naufal.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Naufal</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="{{url('profile/naufal')}}" class="btn btn-primary">Go to profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/odit.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Odit</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="{{url('profile/odit')}}" class="btn btn-primary">Go to profile</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/ricky.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ricky</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="{{url('profile/ricky')}}" class="btn btn-primary">Go to profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

@stop