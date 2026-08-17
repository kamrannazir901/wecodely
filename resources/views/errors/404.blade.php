@extends('layouts.app')

@section('title', 'Page Not Found | Wecodely')

@section('meta_description', 'The page you are looking for could not be found.')

@section('content')

    <x-error-page
        code="404"
        title="Page Not Found"
        message="The page you are looking for does not exist or may have been moved."
    />

@endsection