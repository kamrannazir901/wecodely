@extends('layouts.app')

@section('title', 'Page Expired | Wecodely')

@section('content')

    <x-error-page code="419" title="Page Expired" message="This page has expired. Please go back and try again." />

@endsection
