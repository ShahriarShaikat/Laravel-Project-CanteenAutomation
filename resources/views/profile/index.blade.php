<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Profile | Page</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="/zboom/css/zerogrid.css">
	<link rel="stylesheet" href="/zboom/css/style.css">
    <link rel="stylesheet" href="/zboom/css/responsive.css">
	<link rel="stylesheet" href="/zboom/css/responsiveslides.css" />
	
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
</head>
<body>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="#"><img src="zboom/./images/logo.png"/></a></div>
		
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
			  <li class="current"><a href="{{route('profile.page')}}">Profile</a></li>
				<li><a href="{{route('home.userhomepage')}}">Blog</a></li>
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

		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					
					<div class="headpart">
						<div class="profileimage" style="background-image: url('/uploads/post/{{$auth_user[0]->image}}');">
						</div>
					  <div class="editprof">
						   <a id="click_edit">Edit Profile</a>
					  </div>
					</div>
					<h1 class="nametag">Name: <span>{{$auth_user[0]->name}}</span></h1>
					<h1 class="nametag">Username: <span>{{$auth_user[0]->uname}}</span></h1>
					<h1 class="nametag">Date Of Birth: <span>{{$auth_user[0]->birthday}}</span></h1>
					<div class="contracprof">
						<h1>Conract Info</h1>
						<p class="nametag">{{$auth_user[0]->email}}</p>
					  <p class="nametag">{{$auth_user[0]->mobile}}</p>
					</div>
					<h1 class="nametag">Gender: <span>{{$auth_user[0]->gender}}</span></h1>

					<div class="update">
						<h1 style="text-align: center;">Edit Info</h1>
						<form action="" method="post">
   	     		{{@csrf_field()}}

   	     		<p>Name</p>
   	     		<input  type="text" value="{{$auth_user[0]->name}}" name="ulname">


   	     		<p>Email</p>
   	     		<input id="namee" type="email" value="{{$auth_user[0]->email}}" name="edit_email">

   	     		<p>Password</p>
   	     		<input id="namep" type="text" value="{{$auth_user[0]->password}}" name="edit_password">


   	     		<p>Mobile</p>
   	     		<input id="namem" type="number" value="{{$auth_user[0]->mobile}}" name="edit_mobile">
   	     		 
   	     		<p>Birthday</p>
   	     		<input id="nameb" type="text" value="{{$auth_user[0]->birthday}}" name="edit_birthday">


   	     		<p>Gender</p>

                <?php if($auth_user[0]->gender=="Male"): ?>
   	     		<select name="gendere" >
   	     			<option value="Male">Male</option>
   	     			<option value="Female">Female</option>
   	     		</select>
                  <?php endif; ?>

                  <?php if($auth_user[0]->gender=="Female"): ?>
   	     		<select name="gendere" >
   	     			<option value="Female">Female</option>
   	     			<option value="Male">Male</option>
   	     		</select>
   	     		 <?php endif; ?>  	
   	     		 <br> <br>     		
   	     		<button type="submit" name="submit" id="button">Update</button>
   	     		</form>
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
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
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
			<p>Copyright © 2013 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a></p>
		</div>
	</div>
</footer>
<script src="/zboom/js/jquery.min.js"></script>
	<script src="/zboom/js/responsiveslides.js"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery('#click_edit').click(function(){
       jQuery('.update').toggle();
		});
		});
		
		/*jQuery(function () {
		  jQuery("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});*/
	</script>
</body></html>