<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show | Post</title>

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
		width: 80%;
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
   <?php if(strlen(session('messagei'))>0): ?>
						  <div class="umessage">
								<div class="message">
								   <p>{{session('messagei')}}</p>
								</div>
						  </div>
			  <?php endif; ?>	   
       <div class="wrapper-content">
   	     <h1>All Post</h1>
   	    <center>
   	     	<table table border="3">
   	     		<tr>
   	     			<th>Title</th>
   	     			<th>Content</th>
   	     			<th>Comment</th>
   	     			<th>Image</th>
   	     			<th>Edit</th>
   	     			<th>Delete</th>
   	     			
   	     			
   	     		</tr>
   	     		@foreach($post as $posts)
   	     		<tr>

   	     			<td><a href="{{route('admin.single.post',[$posts->id])}}">{{$posts->title}}</a></td>
   	     			<td>{{$posts->content}}</td>
   	     			<td>{{$posts->total_comment}}</td>
   	     			<td><img src="uploads/post/{{$posts->image}}" width="100px" height="100px"></td>
   	     			<td><a href="{{route('view.the.post',[$posts->id])}}">Edit</a></td>
   	     			<td><a href="{{route('delete.the.post',[$posts->id])}}">Delete</a></td>
   	     			
   	     		</tr>
   	     		@endforeach
   	     	</table>


            </center>
</div>
</div>




	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		

          jQuery('.umessage').slideUp(8000);
           

		

			

	</script>
</body>
</html>