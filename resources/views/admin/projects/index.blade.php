@extends('layouts.app')

@section('project')
<div class="container">
    <ul class="navbar-nav list-unstyled">
        @foreach ($projects as $project)
        <li>
            <h2>{{ $project->title }}</h2>
        </li>
        <li>
            <p>
                {{ $project->content }}
            </p>
        </li>
        <li>
            {{ $project->slug }}
        </li>
        @endforeach
    </ul>
</div>
@endsection