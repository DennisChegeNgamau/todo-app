@extends('layouts.app')

@section('title')
    My Todo App
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item">
                        <a href="{{ route('details', ['id' => $todo->id]) }}" style="color: cornflowerblue">{{ $todo->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
