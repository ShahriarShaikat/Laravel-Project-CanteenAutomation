<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Page</title>

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
		/*background-image: url('/images/pattern29.png');*/
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
	.wrapper{width: 100%;}
	.wrapper ul{
		margin-left: 20px;
		margin-top: 10px;
		text-align: center;
	}
	.wrapper ul li{
		list-style: none;
		margin-bottom: 30px;
		
	}
	.wrapper ul li a{
		color: #17202A;
		text-decoration: none;
		padding: 9px 10px;
		background-color: #BDC3C7;
		border-radius: 3px;
		text-align: center;
	}
	.wrapper-content{width: 80%;background-color: #B3B6B7;margin: auto;}

	</style>

<!---8888888888888888Style888888888888888888888888888---->

</head>
<body>

	<?php if(strlen(session('message_A'))>0): ?>
						  <div class="umessage">
								<div class="message">
								   <p>{{session('message_A')}}</p>
								</div>
						  </div>
			  <?php endif; ?>
  
   <center> 
    <marquee class="marquee">Welcome! to Admin page</marquee>
   </center>
   <div class="fullwrapper">
   	   <div class="wrapper">
   	     <ul>
   		   <li><a href="{{route('users.index')}}">View User</a></li>
   		   <li><a href="{{route('show.post')}}">Add Post</a></li>
				 <li><a href="{{route('view.all.post')}}">View Post</a></li>
				 <li><a href="{{route('live_search.show')}}">Search User</a></li>
				 <li><a href="{{route('ajax.crude')}}">Ajax Work</a></li>
   	     </ul>
       </div>

   </div>



	<script src="/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		


            jQuery('.umessage').slideUp(8000);


		

			

	</script>
</body>
</html>