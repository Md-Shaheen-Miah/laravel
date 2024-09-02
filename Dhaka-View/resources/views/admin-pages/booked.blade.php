@extends('admin')
@section('content')


<link rel="stylesheet" href="admin-css/booked.css">
<section>
  
  <h1>This is booked table</h1>
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
    
        <tr>
          
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td>

          <a href="#">   <button>edit</button></a>
         
          <form action="#" method="POST">
                      
                        <button type="submit">delete</button>
                    </form>
          </td>
        </tr>
       
		  </tbody>
    </table>
    
    

  </div>
</section>
@endsection