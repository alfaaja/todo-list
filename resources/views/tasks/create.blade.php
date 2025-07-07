@extends('layouts.app')

@section('content')
    <h1>Add Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Save</button>
    </form>
@endsection