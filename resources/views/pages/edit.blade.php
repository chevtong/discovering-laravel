@extends('layouts.default')

@section('content')
    <h1 class="title">Edit The Record</h1>

    <div class="wrapper">

        <div class="content">

            <div class="db-item db-item-edit">

                {{-- from action need to be /db/id in order to call the update(),
                refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
                <form action="/db/{{ $selectedBreakfast->id }}" method="post">

                    @csrf

                    {{-- need to use put method to call the update()method,
                    but the form need to use post method as well --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Food</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="{{ $selectedBreakfast->food }}" name="food">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Drink</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="{{ $selectedBreakfast->drink }}" name="drink">
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
