@extends('frontend.layouts.app')

@section('title', $service->exists ? 'Editing ' . $service->title : 'Create new service')

@section('content')
  <div class="row mb-4">
    <div class="col">
      {!! Form::model($service, [
        'method' => $service->exists ? 'put' : 'post',
        'route' => $service->exists ? ['service.update', $service->id] : ['service.store'],
      ]) !!}

      <div class="form-group">
        {!! Form::label('Icon') !!}
        {!! Form::textarea('icon', null, ['class' => 'form-control']) !!}
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