@extends('home')
@section('content')

<h1 class="text-center">Donate</h1>
<div>
    @if($errors->any())
    <ul class="alert alert-danger col-md-3 m-2 " role="alert">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
</div>
<form class="row g-4" method="post" action="{{route('donate.store')}}">
    @csrf
    @method('post')

<div class="container">
    <div class="row justify-content-center align-items-center">
        <!-- Your centered content goes here -->
        <div class="col-md-6 text-center">
            <div class="p-4">
                <div class="">
                    <label class="form-label">Full Name</label>
                <div class="">
                    <input  class="form-control" type="text" name="name" placeholder="Full Name">
                </div>
                </div>
                <div class="">
                    <label class="form-label" >Donation</label>
                    <div class="">
                        <input class="form-control" type="text" name="done" placeholder="Donation DH">
                    </div>
                </div>
                <div class="m-2 text-center">
                    <input type="submit" class="btn btn-primary mb-3" value="Donate">
                </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection