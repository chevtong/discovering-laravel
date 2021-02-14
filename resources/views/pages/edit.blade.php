@extends('layouts.default')

@section('content')
    <h1>Edit</h1>
    <div class="container">

        {{-- from action need to be /db/id in order to call the update(),
        refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
        <form action="/db/{{ $selectedBreakfast->id }}" method="post">

            @csrf

            {{-- need to use put method to call the update()method,
            but the form need to use post method as well --}}
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Food</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $selectedBreakfast->food }}"
                    name="food">


            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Drink</label>
                <input type="text" class="form-control" id="exampleInputPassword1"
                    placeholder="{{ $selectedBreakfast->drink }}" name="drink">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection
