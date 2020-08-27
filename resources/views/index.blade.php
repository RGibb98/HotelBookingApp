@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Bookings</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('bookings.create')}}" class="btn btn-primary">New Booking</a>
    </div>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Date of Booking</td>
          <td>Number of People</td>
          <td>Number of Nights</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings ?? '' as $booking)
        <tr>
            <td>{{$booking->id}}</td>
            <td>{{$booking->date_of_booking}}</td>
            <td>{{$booking->no_of_people}}</td>
            <td>{{$booing->no_of_nights}}</td>
            <td>
                <a href="{{ route('bookings.edit',$booking->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('bookings.destroy', $booking->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@if(session()->get('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
</div>
</div>
@endsection