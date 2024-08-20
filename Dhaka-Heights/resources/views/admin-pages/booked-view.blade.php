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
     
        <tr>

          <td>1</td>
          <td>md Shaheen</td>
          <td>shaheen@gmail.com</td>
          <td>08/22/2024</td>
          <td>08/24/2024</td>
		      <td>2</td>
		      <td>1</td>
		      <td>202</td>
		      
        </tr>
        <tr>

         <td>1</td>
         <td>md Shaheen</td>
         <td>shaheen@gmail.com</td>
         <td>08/22/2024</td>
         <td>08/24/2024</td>
         <td>2</td>
         <td>1</td>
         <td>202</td>

        </tr>
        <tr>

        <td>1</td>
        <td>md Shaheen</td>
        <td>shaheen@gmail.com</td>
        <td>08/22/2024</td>
        <td>08/24/2024</td>
        <td>2</td>
        <td>1</td>
        <td>202</td>

        </tr>
       
		  </tbody>
    </table>
   
  </div>
</section>
@endsection