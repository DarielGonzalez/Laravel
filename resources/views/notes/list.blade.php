
@extends('layout')

@section('content')
  <h3>Notes</h3>
  <p>
    <a href=" {{ url('notes/create') }}" class="btn btn-primary">Add a note</a>
  </p>
  <ul class="list-group">
    @foreach( $notes as $note)
      <li class="list-group-item">
        @if ($note->category)
          <span class="label label-info">{{ $note->category->name }}:</span>
        @else
          {{ substr($note->note, 0, 100) }}...
          <a class="btn bnt-primary" href="{{ url('notes/'.$note->id) }}">View note</a>
        </li>
      @endif
      @endforeach
    </ul>
    {!! $notes->render() !!}
  @endsection
