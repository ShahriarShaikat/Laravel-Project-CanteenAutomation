<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update | Post</title>

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
	#button{border:1px solid black;margin-top:4px;padding: 5px 5px;background-color: blue;color:#FFFFFF;}
	#button a{
		padding: 5px 5px;
		background-color: blue;
		color:#FFFFFF;
		text-decoration:none;
	}
	#nameef{display:none;}
	#slt{padding:5px;margin-top:10px;border:1px solid blue;border-radius:3px;}
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
			<h2>Update Post for {{$post[0]->title}}</h2><br>
          		<form action="{{route('singlepost.edit',[$post[0]->id])}}" method="post" enctype="multipart/form-data">
   	     		{{@csrf_field()}}

   	     		<p>Title</p>
   	     		<input  type="text" value="{{$post[0]->title}}" name="title">


   	     		<p>content</p>
				<textarea id="text" placeholder="Write something" rows="10" cols="60" type="text"  name="content">{{$post[0]->content}}</textarea>  
   	     		
                <img src="/uploads/post/{{$post[0]->image}}" width="100px" height="100px"/> 
   	     		<p>Choose Another</p>
				<select id="slt" name="importance">
                        <option value="same">As IT Is</option>
                        <option value="Remove">Remove</option>
                        <option value="New">New Choose</option>

                </select><br><br>
   	     		<input id="nameef" type="file" value="{{$post[0]->image}}" name="image"/><br><br>
                
 	
   	     		 <br> <br>     		
   	     		<button type="submit" name="submit" id="button">Update</button>
   	     		</form>

   	     	</div>
   	     </center>
       </div>
   </div>



	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		
		


            jQuery('.umessage').show();
            jQuery('.umessage').slideUp(5000);
			
            jQuery('select#slt').click(function(){
                var chaging = jQuery('select option:selected').text();
                //jQuery('#check').html(chaging);
                if(chaging =='As IT Is')
                {
                 jQuery('#nameef').hide();
                }
				else if(chaging =='Remove')
                {
				 
                 jQuery('#nameef').hide();
                }

                else if( chaging=='New Choose')
                {
                 jQuery('#nameef').show();
                }


            });


      

		

			

	</script>
</body>
</html>