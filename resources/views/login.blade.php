@extends('layout.master')
@section('container')

<div class="container">

    @if($errors->any())
        <h4 class="alert alert-danger">{{$errors->first()}}</h4>
    @endif
    <form action="{{url('authenticate')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@stop