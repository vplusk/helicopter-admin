@extends('frontend.layouts.app')

@section('content')
  <div class="row mb-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <strong>
          Offers
          </strong>
        </div><!--card-header-->
        <div class="card-body">
          <a href="{{ route('offer.create') }}" class="btn btn-primary">New offer</a>
          <table class="table table-hover">
            <thead>
              <tr>                
                <th>Title</th>                
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>  
            <tbody>
              @foreach($offers as $offer)
                <tr>
                  <td>{{ $offer->title }}</td>                  
                  <td><a href="{{ route('offer.edit', $offer->id) }}"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="{{ route('offer.confirm', $offer->id) }}"><i class="fa fa-trash"></i></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div> <!-- card-body -->
      </div><!-- card -->
    </div><!-- col -->
  </div><!-- row -->
@endsection
