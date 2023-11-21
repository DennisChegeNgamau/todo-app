@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <form action="{{ route('store') }}" method="POST" class="mt-4 p-4">
        @csrf 
        <div class="form-group m-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="submit">
        </div>
    </form>
