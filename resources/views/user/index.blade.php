@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Test</p>
@endsection

@section('content')
    <p>Test content.</p>
@endsection