@extends('layouts.app')

@section('title', 'Access Denied | Wecodely')

@section('content')

    <x-error-page code="403" title="Access Denied" message="You do not have permission to access this page." />

@endsection
