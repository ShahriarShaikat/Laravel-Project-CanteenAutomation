<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User | Details</title>

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
		background-size: : inherit;
		background-attachment: fixed;
		background-repeat: repeat;
		background-position: top left;
	}
	.umessage{
		width: 100%;
		background-color: #D0ECE7;
		border: 1px solid #34495E;
		margin: 3px;
		padding: 5px;
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
	.fullwrapper{width: 100%;}
	
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
   	   
       <div class="wrapper-content">
   	     <h1>User | {{$even->name}}</h1>
   	    <center>
   	     	<table table border="3">
   	     		<tr>
   	     			<th>Name</th>
   	     			<th>User Name</th>
   	     			<th>Email</th>
   	     			<th>Password</th>
   	     			<th>Gender</th>
   	     			<th>Birthday</th>
   	     			<th>Contact</th>
   	     			
   	     		</tr>
   	     		
   	     		<tr>

   	     			<td>{{$even->name}}</td>
   	     			<td>{{$even->uname}}</td>
   	     			<td>{{$even->email}}</td>
   	     			<td>{{$even->password}}</td>
   	     			<td>{{$even->gender}}</td>
   	     			<td>{{$even->birthday}}</td>
   	     			<td>{{$even->mobile}}</td>
   	     			
   	     		</tr>
   	     		
   	     	</table>
        




   	     	<form method="post">
   	     		{{@csrf_field()}}
   	     	<button><a href="{{route('delete.del',[$even->uname])}}">Delete</a></button>
   	     	
   	     	</form>
   	     
       


</center>
</div>
</div>




	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		

           //jQuery('#bbbtn').click(function(){
           	//jQuery('.edituser').fadeToggle();
           //});
           

		

			

	</script>
</body>
</html>