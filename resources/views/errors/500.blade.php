@extends('layouts.app')

@section('title', 'Something Went Wrong | Wecodely')

@section('content')

    <x-error-page code="500" title="Something Went Wrong"
        message="Something went wrong on our side. Please try again in a moment." />

@endsection
