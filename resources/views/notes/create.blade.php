@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Create a note</h1>

    @if(! $errors->isEmpty())
    <div class="alert alert-danger">
      <p><strong>Oops</strong>Please fix the following errors:</p>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    
    <form class="" action="{{ url('notes') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <textarea name="note"  placeholder="Write your note here...." class="form-control form-group" rows="8" cols="40">{{ old('note') }}</textarea>
      <button type="submit"  class="btn btn-danger form-group" name="button">Create note</button>
    </form>

  </div>
</div>
@endsection
