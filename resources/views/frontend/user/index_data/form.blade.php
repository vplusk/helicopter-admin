@extends('frontend.layouts.app')

@section('title', 'Delete')

@section('content')
  <div class="row mb-4">
    <div class="col">
      
      {!! Form::model($index_data, [
        'method' => 'put',
        'route' => ['index_data.update'],
      ]) !!}

      <div class="form-group">
          {!! Form::label('Keywords') !!}
          {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
          {!! Form::label('GoogleAnalytics Script') !!}
          {!! Form::text('ga_script', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
          {!! Form::label('Description') !!}
          {!! Form::text('description', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
          {!! Form::label('Logo') !!}
          {!! Form::textarea('logo', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
          {!! Form::label('Site name') !!}
          {!! Form::text('site_name', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Title') !!}
          {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Subtitle') !!}
          {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
      </div>      

      {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}

    </div><!-- col -->
  </div><!-- row -->
@endsection