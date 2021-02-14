{{-- store the msg in a separate blade file, 
include it inside the dafault layout
can also reuse in different form --}}

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-warning">
        {{ session()->get('delete') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">

        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach

    </div>
@endif
