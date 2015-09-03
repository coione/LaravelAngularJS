@extends('layouts.default')

@section('title', $title)

@section('content')
    <div class="content">
        <h3><a href="/"><span class="glyphicon glyphicon-home"></span></a> - {{ $title }}</h3>
        <div class="row-flex">
            @if (count($note) > 0)
            <h3>#{{ $note->id }} - {{ $note->title }}</h3>
            <p>Created: {{ $note->created_at }} - Last update: {{ $note->updated_at }}</p>
             <p>{{ $note->text }}</p>
            @else
            <div class="alert alert-warning" role="alert">I don't have any records!</div>
            @endif
        </div>
    </div>
@stop