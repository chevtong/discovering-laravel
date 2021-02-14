@extends('layouts.default')

@section('content')
    <div class="container" style="display: flex; flex-wrap: no-wrap;">
        <h1>Show</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $selectedBreakfast->food }}</h5>
                <h5 class="card-title">{{ $selectedBreakfast->drink }} </h5>
                <hr>
                <p class="card-title small">Create at: {{ $selectedBreakfast->created_at }} </p>
                <a href="/db" class="btn btn-primary">Back</a>

                {{-- edit button start here --}}
                {{-- the URL need to be /db/id/edit in order to call the edit(),
                refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
                <a href="/db/{{ $selectedBreakfast->id }}/edit" class="btn btn-warning">Edit</a>


                {{-- delete button start here --}}
                {{-- the URL need to be /db/id in order to call the destroy(),
                refer to the table of https://laravel.com/docs/8.x/controllers#resource-controllers --}}
                <form action="/db/{{ $selectedBreakfast->id }}" method="post">

                    @csrf
                    {{-- need to use delete method to call the destroy()method,
                    but the form need to use post method as well --}}
                    @method('DELETE')

                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>


            </div>
        </div>


    </div>



@endsection
