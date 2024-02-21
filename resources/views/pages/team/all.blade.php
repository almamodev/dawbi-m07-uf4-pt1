@extends('layouts.body')
@section('title', 'Manage teams')
@section('content')
    <button class="btn btn-outline-primary mb-5">Add team</button>
    @include('components.team.table', ['teams' => $teams])
@endsection