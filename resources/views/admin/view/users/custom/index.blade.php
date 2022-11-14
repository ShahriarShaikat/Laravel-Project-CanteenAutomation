<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update | Page</title>

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
		display: none;
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
	.wrapper{width: 100%;}
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
	.wrapper-content h2{text-align:center;color: green;}
	.edituser{
		width: 300px;
		padding: 10px;
	}
	p{
		margin: 0px;
	}
	.edituser input{
		padding: 5px 5px;
		margin-bottom: 5px;

	}
	#button{border:1px solid black;margin-top:10px;}
	#button a{
		padding: 5px 5px;
		background-color: blue;
		color:#FFFFFF;
		text-decoration:none;
	}
	</style>


<!---8888888888888888Style888888888888888888888888888---->

</head>
<body>
	
  <div class="umessage">
		<div class="message">
		   <p>{{session('messaged')}}</p>
	    </div>
	</div>

   <div class="fullwrapper">
   	   
       <div class="wrapper-content">
   	     
   	     <center>
   	        <div class="edituser">
			<h2>Update data for {{$user[0]->name}}</h2><br>
          		<form action="/update/{{$user[0]->id}}" method="post">
   	     		{{@csrf_field()}}

   	     		<p>Name</p>
   	     		<input  type="text" value="{{$user[0]->name}}" name="ulname">


   	     		<p>Email</p>
   	     		<input id="namee" type="email" value="{{$user[0]->email}}" name="edit_email">

   	     		<p>Password</p>
   	     		<input id="namep" type="text" value="{{$user[0]->password}}" name="edit_password">


   	     		<p>Mobile</p>
   	     		<input id="namem" type="number" value="{{$user[0]->mobile}}" name="edit_mobile">
   	     		 
   	     		<p>Birthday</p>
   	     		<input id="nameb" type="text" value="{{$user[0]->birthday}}" name="edit_birthday">


   	     		<p>Gender</p>

                <?php if($user[0]->gender=="Male"): ?>
   	     		<select name="gendere" >
   	     			<option value="Male">Male</option>
   	     			<option value="Female">Female</option>
   	     		</select>
                  <?php endif; ?>

                  <?php if($user[0]->gender=="Female"): ?>
   	     		<select name="gendere" >
   	     			<option value="Female">Female</option>
   	     			<option value="Male">Male</option>
   	     		</select>
   	     		 <?php endif; ?>  	
   	     		 <br> <br>     		
   	     		<button type="submit" name="submit" id="button">Update</button>
   	     		</form>

   	     	</div>
   	     </center>
       </div>
   </div>



	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		


            jQuery('.umessage').show();
            jQuery('.umessage').slideUp(5000);

		

			

	</script>
</body>
</html>