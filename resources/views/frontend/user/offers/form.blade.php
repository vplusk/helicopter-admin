@extends('frontend.layouts.app')

@section('title', $offer->exists ? 'Editing ' . $offer->title : 'Create new offer')

@section('content')
  <div class="row mb-4">
    <div class="col">
      {!! Form::model($offer, [
        'method' => $offer->exists ? 'put' : 'post',
        'route' => $offer->exists ? ['offer.update', $offer->id] : ['offer.store'],
      ]) !!}

      <div class="form-group">
        {!! Form::label('Icon') !!}
        {!! Form::textarea('icon', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Title') !!}
        {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Text') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
      </div>

      {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}

    </div><!-- col -->
  </div><!-- row -->
@endsection