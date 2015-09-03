@extends('layouts.default')

@section('title', $title)

@section('content')
    <div class="content">
        <h3>{{ $title }}</h3>
        @{{notes.user.firstname}}, @{{notes.user.lastname}}
        <div class="row-flex">
            @if (count($notes) > 0)
            <table class="table table-striped notes-list">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-5">Title</th>
                        <th class="col-md-2">Created</th>
                        <th class="col-md-2">Updated</th>
                        <th class="col-md-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                    @endforeach
                    <tr>
                        <th scope="row">{{ $note->id }}</th>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->created_at }}</td>
                        <td>{{ $note->updated_at }}</td>
                        <td class="actions">
                            <a href="/note/{{ $note->id }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <button class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>
                            <button class="btn btn-xs btn-danger note-delete" data-id="{{ $note->id }}"><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            @else
            <div class="alert alert-warning" role="alert">I don't have any records!</div>
            @endif
        </div>
    </div>
@stop