@extends('layouts.app')

@section('title', 'Too Many Requests | Wecodely')

@section('content')

    <x-error-page code="429" title="Please Try Again"
        message="Too many requests were made in a short time. Please wait a moment and try again." />

@endsection
