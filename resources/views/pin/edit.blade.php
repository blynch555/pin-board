@extends('layouts.app')

@section('content')

  <h1>Edit Pin</h1>

  <form action="{{ route('pin.update', ['pin' => $pin->id]) }}" method="POST">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
      <label for="title">Title</label>
      <input name="title"
              id="title"
              type="text"
              class="form-control"
              value="{{ $pin->title }}">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input name="description"
              id="description"
              type="text"
              class="form-control"
              value="{{ $pin->description }}">
    </div>

    <button type="submit" class="btn btn-primary">Save Pin</button>

  </form>

  <a href="{{ url('pin/' . $pin->id) }}">Cancel</a>

@endsection
