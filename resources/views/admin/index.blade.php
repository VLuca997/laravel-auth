@extends('layouts.app')

@section('page-title', 'AllProgect')

@section('main-content')
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($projects as $project)
                            <h3> {{$project->title}}</h3>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
