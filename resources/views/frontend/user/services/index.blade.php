@extends('frontend.layouts.app')

@section('content')
  <div class="row mb-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <strong>
          Services
          </strong>
        </div><!--card-header-->
        <div class="card-body">
          <a href="{{ route('service.create') }}" class="btn btn-primary">New service</a>
          <table class="table table-hover">
            <thead>
              <tr>                
                <th>Text</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>  
            <tbody>
              @foreach($services as $service)
                <tr>                  
                  <td>{{ $service->text }}</td>
                  <td><a href="{{ route('service.edit', $service->id) }}"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="{{ route('service.confirm', $service->id) }}"><i class="fa fa-trash"></i></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div> <!-- card-body -->
      </div><!-- card -->
    </div><!-- col -->
  </div><!-- row -->
@endsection
