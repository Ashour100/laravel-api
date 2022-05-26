@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- {{var_dump($posts)}} --}}
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">{{ $post['title'] }}</div>

                <div class="card-body">
                    <p>{{ $post['content'] }}</p>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
