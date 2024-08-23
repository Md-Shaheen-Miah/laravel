@extends('admin')
@section('content')
<link rel="stylesheet" href="admin-css/booked.css">
<section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
  @if(isset($bookings) && $bookings->count() > 0)
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Check In</th>
          <th>Check Out</th>
		      <th>Adult</th>
		      <th>Child</th>
		      <th>Room No.</th>
		      <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      @foreach( $bookings as $booking)
        <tr>

          <td>{{$booking->id}}</td>
          <td>{{$booking->name}}</td>
          <td>{{$booking->email}}</td>
          <td>{{$booking->checkin}}</td>
          <td>{{$booking->checkout}}</td>
		      <td>{{$booking->adults}}</td>
		      <td>{{$booking->children}}</td>
		      <td>{{$booking->room}}</td>
		      
        </tr>
        @endforeach
		  </tbody>
    </table>
    @else
    <p>কোন বুকিংস পাওয়া যায়নি।</p>
@endif
  </div>
</section>
@endsection