<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add | Post</title>

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
		width: 40%;
		background-color: #F0F3F4;
		margin: auto;
		border-radius: 10px;
		padding: 50px 10px;
		margin-top: 10px;
	}
	.wrapper-content input{
		padding: 5px 5px;
		margin-bottom: 15px;
 

	}
	.wrapper-content label{color: blue;}
	.wrapper-content textarea{padding: 5px 5px;
		margin-bottom: 5px;}
	.wrapper-content h2{text-align:center;color: green;}
	.wrapper-content button{text-align:center;color: green;padding: 5px;border-radius: 3px;border: 1px solid transparent;background-color: #D0D3D4 ;cursor: pointer;}
	
	</style>


<!---8888888888888888Style888888888888888888888888888---->

</head>
<body>
	
  

<div class="fullwrapper">
   	   
       <div class="wrapper-content">
   	     
   	    <center>
            <h2>Add New Post</h2>
   	     	<form action="{{route('insert.post')}}" method="post" enctype="multipart/form-data">
   	     		{{@csrf_field()}}
				
				<label for="title">Title</label><br>
				<input id="title" placeholder="Title" type="text" name="title"><br>
				<input  type="file" name="image"><br>
				<label for="text">Content</label><br>
				<textarea id="text" placeholder="Write something" rows="10" cols="60" type="text" name="content"></textarea>  <br>
				<br>
   	     	<button  type="submit">Add Post</button>
   	     	
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