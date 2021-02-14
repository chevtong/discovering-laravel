@extends('layouts.default')

@section('content')

    <h1 class="title">To Know More</h1>

    <div class="wrapper">

        <div class="content">

            <div class="db-item db-item-show">
                <p>Food:
                    <span class="db-info">{{ ucfirst($selectedBreakfast->food) }}</span>
                </p>
                <p>Drink:
                    <span class="db-info">{{ ucfirst($selectedBreakfast->drink) }}</span>
                </p>
                <hr>
                <p class="card-title small">Create at: {{ $selectedBreakfast->created_at }} </p>

                <div class="buttons-group-edit">
                    <a href="/db" class="btn btn-back">Back</a>

                    {{-- edit button start here --}}
                    {{-- the URL need to be /db/id/edit in order to call the edit(),
                refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
                    <a href="/db/{{ $selectedBreakfast->id }}/edit" class="btn btn-edit">Edit</a>


                    {{-- delete button start here --}}
                    {{-- the URL need to be /db/id in order to call the destroy(),
                refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
                    <form action="/db/{{ $selectedBreakfast->id }}" method="post" class="form-delete">

                        @csrf
                        {{-- need to use delete method to call the destroy()method,
                    but the form need to use post method as well --}}
                        @method('DELETE')

                        <button type="submit" class="btn btn-outline-warning btn-create">Delete</button>
                    </form>
                </div>

            </div>

        </div>

        <div class="background">
            <img src="{{ asset('assets/waffle.jpg') }}" alt="logo">
        </div>

    </div>



@endsection
