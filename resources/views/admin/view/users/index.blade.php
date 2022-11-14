<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit | Page</title>

<!---8888888888888888Style888888888888888888888888888---->
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	.marquee{
		color: green;
		font-size: 20px;
		margin-top: 6px;
		font-weight: bold;
	}
	body{
		background-image: url('images/pattern29.png');
		
		background-attachment: fixed;
		background-repeat: repeat;
		background-position: center center;
	}
	.umessage{
		width: 100%;
		background-color: #D0ECE7;
		border: 1px solid #34495E;
		margin: 3px;
		padding: 5px;
		position:absolute;
		display: none;
		top:0px;
		left:0px;
	}
	.message{
		width: 100%;
		background-color: #EBF5FB;
		border: 1px solid #17202A;
	}
	.message p{
		margin: 3px 3px 3px 6px;
		color: green;
		font-size: 20px;
	}
	.fullwrapper{width: 100%;
		position:relative;}
	.fullwrapperr{width: 100%;height:70px;}
	.wrapper ul{
		margin-left: 20px;
		margin-top: 10px;
	}
	.wrapper ul li{
		list-style: none;
		margin-bottom: 10px;
		text-align: center;
	}
	.wrapper ul li a{
		color: #FFFFFF;
		text-decoration: none; 
	}
	.wrapper-content{
		width: 60%;
		background-color: #F0F3F4;
		margin: auto;
		border-radius: 10px;
		padding: 50px 10px;
		margin-top: 10px;
	}
	.wrapper-content h1{text-align:center;color: green;}
	</style>


<!---8888888888888888Style888888888888888888888888888---->

</head>
<body>

   <div class="fullwrapper">
	   <div class="fullwrapperr">
			   <?php if(strlen(session('messaged'))>0): ?>
						  <div class="umessage">
								<div class="message">
								   <p>{{session('messaged')}}</p>
								</div>
						  </div>
			  <?php endif; ?>
	  </div>
  
       <div class="wrapper-content">
   	     <h1>Table:User</h1>
   	     <center>
   	     	<table table border="3">
   	     		<tr>
   	     			<th>Name</th>
   	     			<th>User Name</th>
   	     			<th>Email</th>
   	     			<th>Edit</th>
   	     		</tr>
   	     		@foreach($data as $value)
   	     		<tr>

   	     			<td><a href="{{route('edit.give',[$value->id])}}">{{$value->name}}</a></td>
   	     			<td>{{$value->uname}}</td>
   	     			<td>{{$value->email}}</td>
   	     			<td><a href="custom_edit/{{$value->id}}">Edit</a></td>
   	     			
   	     		</tr>
   	     		@endforeach
   	     	</table>
   	     </center>
       </div>
   </div>



	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		


            jQuery('.umessage').show();
            jQuery('.umessage').slideUp(7000);

		

			

	</script>
</body>
</html>