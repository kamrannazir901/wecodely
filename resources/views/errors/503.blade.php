@extends('layouts.app')

@section('title', 'Temporarily Unavailable | Wecodely')

@section('content')

    <x-error-page code="503" title="We Will Be Back Shortly"
        message="The website is temporarily unavailable. Please try again in a little while." />

@endsection
