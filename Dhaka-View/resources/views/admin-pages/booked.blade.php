@extends('admin')
@section('content')
<link rel="stylesheet" href="admin-css/booked.css">
<section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
  
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
      @foreach ( $books as $book)
        <tr>
          
          <td>{{$book->id}}</td>
          <td>{{$book->name}}</td>
          <td>{{$book->email}}</td>
          <td>{{$book->checkin}}</td>
          <td>{{$book->checkout}}</td>
		      <td>{{$book->adults}}</td>
		      <td>{{$book->children}}</td>
		      <td>{{$book->room}}</td>
		      <td>
            <a href="{{route('bookededit',$book->id)}}">   <button>edit</button></a>
         
            <form action="{{route('delete')}}" method="POST">
              @method('DELETE')
              @csrf
            <input type="text" name="book_id" id="" value="{{$book->id}}" hidden>
             <BUtton>delete</BUtton>
            </form>
          </td>
        </tr>
        @endforeach
		  </tbody>
    </table>
    
    

  </div>
</section>
@endsection