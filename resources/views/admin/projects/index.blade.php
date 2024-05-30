@extends('layouts.app')


<div class="container">
    <ul class="navbar-nav list-unstyled">
        <li class="nav-item my-4">
            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
        </li>
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