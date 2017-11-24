@extends('frontend.layouts.app')

@section('title', 'Delete')

@section('content')
  <div class="row mb-4">
    <div class="col">
    {!! Form::model($service, ['method' => 'delete', 'route' => ['service.destroy', $service->id]]) !!}
    
    <div class="alert alert-danger">
      <strong>Are you shure you want to delete?</strong>
    </div>
    
    {!! Form::submit('Yes', ['class' => 'btn btn-danger']) !!}
  
    <a href="{{ route('service.index') }}" class="btn btn-success">
      <strong>Cancel</strong>
    </a>
    
    {!! Form::close() !!}

    </div><!-- col -->
  </div><!-- row -->
@endsection