@extends('layouts.default')

@section('content')

    <h1 class="title">Add some more ideas...</h1>

    <div class="wrapper">

        <div class="content">

            <div class="form">
                <form method="POST" action="/db" class="form-create">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Food</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="food">
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label">Drink</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="drink">
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-create">Submit</button>
                </form>
            </div>

        </div>

        <div class="background">
            <img src="{{ asset('assets/waffle.jpg') }}" alt="logo">
        </div>

    </div>

@endsection
