<!DOCTYPE html>
<html>
 <head>
  <title>live search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Admin's Serach Engine</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Search User Data</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search User Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead class="thead-dark">
        <tr>
         <th scope="col">Id</th>
         <th scope="col">Name</th>
         <th scope="col">User Name</th>
         <th scope="col">Email</th>
         <th scope="col">Password</th>
         <th scope="col">Image</th>
         <th scope="col">Birthday</th>
         <th scope="col">Gender</th>
         <th scope="col">Mobile</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query)
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $('#search').keyup(function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
