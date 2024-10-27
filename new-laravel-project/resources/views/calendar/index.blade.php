@extends('layouts.app')

@section('content')
    <h1>Google Calendar Events</h1>
    <ul>
        @foreach($events as $event)
            <li>{{ $event->getSummary() }} ({{ $event->getStart()->getDateTime() }})</li>
        @endforeach
    </ul>
@endsection
