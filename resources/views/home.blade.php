@extends('layouts.app')

    @section('title-block')
        Main page
    @endsection
    
    @section('content')
        <h1>Main page</h1>
    @endsection
    
    @section('aside')
        @parent
        <p>Extra string</p>
    @endsection