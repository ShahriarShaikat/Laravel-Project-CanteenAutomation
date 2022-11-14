<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Single Post Page</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="{{asset('zboom/css/zerogrid.css')}}">
	<link rel="stylesheet" href="{{asset('zboom/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('zboom/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('zboom/css/responsiveslides.css')}}" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='/zboom/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="/zboom/js/jquery.min.js"></script>
	<script src="/zboom/js/responsiveslides.js"></script>

</head>
<body>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="#"><img src="{{asset('zboom//images/logo.png')}}"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="current"><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				    @foreach($posttt as $datas)
					<article>
            @if($datas->image != 0)
						<img style="width:560px;height:340px;" src="/uploads/post/{{$datas->image}}"/>
            @endif
						<h2><a href="#">{{$datas->title}}</a></h2>
						<div class="info">[By Admin on {{$datas->date}}]</div>
						<p>{{$datas->content}}</p>
					</article>
					@endforeach
					<div class="total_comment">
					<div class="commentt">
					  <h1>Comment Section</h1><br>
				@if(!$comment)
				
						  <p style="color:red;">No Comment available for the post</p>
				
				@else
				
				
					@foreach($comment as $com)
					  <div class="commentts">
					  @if($com->image)
					  <img src="/uploads/post/{{$com->image}}" width="50px" height="50px">
            @else
            <img src="/uploads/post/invalid-user.jpg" width="50px" height="50px">
            @endif
            @if($com->man_name)
					  <h2><a href="">{{$com->man_name}}</a></h2>
            @else
            <h2><a >User Unbelieveable!</a></h2>
						@endif

						@if($com->totime < 60)
					  <p>{{$com->totime}} seconds ago</p>
            @elseif($com->totime >= 60 && $com->totime < 3600)
						<p>{{floor(($com->totime)/60)}} minutes ago</p>
						@elseif($com->totime >= 3600 && $com->totime < 86400)
						<p>{{floor(($com->totime)/3600)}} hours ago</p>
						@elseif($com->totime >= 86400 && $com->totime < 604800)
						<p>{{floor(($com->totime)/86400)}} days ago</p>
						@elseif($com->totime >= 604800 && $com->totime < 2592000)
						<p>{{floor(($com->totime)/604800)}} weeks ago</p>
						@else
						<p>{{floor(($com->totime)/2592000)}} months ago</p>
						@endif
						

						
					  
					  <p>{{$com->comment}}</p>
					  

					
						  
						  <a href="{{route('admin.delete.comment',['id'=>$com->cid,'post_id'=>$com->pid])}}">Delete</a><br>
						  	
					  
					  
					
					 
					  </div>
					@endforeach
				
				@endif
					</div>
					<div class="commenttf">
					  <h1>Write Your compliment:</h1>
					  <div class="full_massage">
					     <?php if(strlen(session('messagec'))>0 || strlen(session('messagecr'))>0): ?>
						  <div class="umessage">
								<div class="message">
								   <p style="color:green;">{{session('messagec')}}</p>
								   <p style="color:red;">{{session('messagecr')}}</p>
								</div>
						  </div>
			             <?php endif; ?>
						 </div>
					  
					  
					 <!-- <form action="{{route('comment.insert',[$posttt[0]->id])}}" method="post">
					     {{@csrf_field()}}
						 
				          <textarea id="text" placeholder="Write something...." rows="10" cols="60" type="text"  name="content"></textarea> <br>     		
   	     		          <button type="submit" name="submit" id="button">Post Comment</button>
					  </form> --->
					  
					  
					  
					</div>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="/zboom/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
								  <li>Shaikat</li>
								  <li>Midul</li>
								  <li>Shawon</li>
								  <li>Akash</li>
								  <li>Nazrul</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>About Us</h2></div>
						<div class="content">
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Post</h2></div>
						<div class="content">
							<ul>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
								<li><a href="#">Every Hot Summer</a></li>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Hot Albums</h2></div>
						<div class="content">
							<div class="tag">
								<a href="#">Galaxy</a><a href="#">Beatport</a><a href="#">Amazon</a><a href="#">Itunes</a><a href="#">Sonic</a><a href="#">Kpopps</a><a href="#">Summer</a><a href="#">Magical</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Contact Us</h2></div>
						<div class="content">
							<ul>
								<li>Address : 0123 Some Street. Country</li>
								<li>Phone : 000.000.000.000</li>
								<li>Email : admin@zerotheme.com</li>
								<li>Website : www.zerotheme.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row copyright">
			<p>Copyright © 2013 - <a href="https://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="https://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
		</div>
	</div>
</footer>
<script>
  jQuery(document).ready(function()
  	{
  		jQuery('.umessage').fadeOut(8000);
  	});
	
</script>
</body></html>