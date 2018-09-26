<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Site</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      autoPlay: 4000,
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]

      });

    });

    $(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

$('#nav nav a').on('click', function(event) {
    $(this).parent().find('a').removeClass('active');
    $(this).addClass('active');
});

$(window).on('scroll', function() {
    $('.target').each(function() {
        if($(window).scrollTop() >= $(this).offset().top-300) {
            var id = $(this).attr('id');
            $('#nav nav a').removeClass('active');
            $('#nav nav a[href=#'+ id +']').addClass('active');
        }
    });
});
    </script>
</head>

<body>

<div class="container" style="background-color: #FFF; ">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand" style="font-size: 60px;margin-bottom: 30px;margin-top: 20px;margin-left: 80%;color: white;" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav" >
         <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Our Founder</a></li>
	      <li><a href="#">Bhavan's Faith</a></li>
	      <li><a href="#">Location</a></li>
	      <li><a href="#">Administration</a></li>
	      <li><a href="#">Facilities</a></li>
	      <li><a href="#">Milestones</a></li>
	      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>


	<p class="pull-left " style="color: black;font-size: 20px;margin-top: -15px;">Site Map</p><br><br>
	<div class="slider col-md-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left: -20px;margin-top: -20px;">
		  

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" style="height: 250px;width: 104%;border: 1px solid darkgrey;border-radius: 5px;">
		    <div class="item active">
		      <img src="images/1.jpg" alt="Los Angeles">
		    </div>

		    <div class="item">
		      <img src="images/2.jpg" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="images/1.jpg" alt="New York">
		    </div>
		  </div>
		</div>
		<br><br>
		<div class="container col-md-8 text-center" style="background-color:#EEEEEE;font-weight: bold;color: darkblue;height: 100px;width: 104%;border: 2px solid grey;margin-top: -20px;margin-left: -15px;">
			<p style="font-size: 22px;line-height: 35px;margin-top: 5px;"><span style="font-size: 40px;">&ldquo;</span>Education is not a problem, it is a solution<br>Educaton is not an expense, it is an investment<span style="font-size: 40px;">&rdquo;</span></p>
		</div>
		<marquee style="width: 104%;height: 50px;padding-top: 7px;margin-left: -15px;background-color:#006599;color: white;font-size: 20px;margin-top: 10px;">penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </marquee>
		<div style="height: 200px;width: 104%;margin-left: -15px;">
			<h3><b>The Best Part of Our School</b></h3>
			<p style="font-size: 12px;">mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,<br>
				<span style="color: orange;font-size: 15px;padding-right: 30px;" class="pull-right">Read More...</span> </p>
		</div>
		<div class="container-fluid founders" style="border: 1px solid grey;margin-top: -40px;border-radius: 20px;font-family: times new roman;">
			<div class="row">
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>Our Founder</b></i></p>
					<div class="col-md-4">
					<img src="images/1.jpg" style="width: 100%;height: 100px;float: left;margin-left: -15px;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>
				</div>
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>MileStones</b></i></p>
					<div class="col-md-4">
					<img src="images/2.jpg" style="width: 100%;height: 100px;float: left;margin-left: -15px;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>				
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>Results</b></i></p>
					<div class="col-md-4">
					<img src="images/2.jpg" style="width: 100%;height: 100px;float: left;margin-left: -15px;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>
				</div>
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>Messages</b></i></p>
					<div class="col-md-4">
					<img src="images/1.jpg" style="width: 100%;height: 100px;margin-left: -15px;float: left;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>Events</b></i></p>
					<div class="col-md-4">
					<img src="images/1.jpg" style="margin-left: -15px;;width: 100%;height: 100px;float: left;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>
				</div>
				<div class="col-md-5" style="height: 160px;margin: 20px;">
					<p style="font-size: 22px;"><i><b>Schedules</b></i></p>
					<div class="col-md-4">
					<img src="images/2.jpg" style="width: 100%;height: 100px;float: left;margin-left: -15px;">
					</div>
					<div class="col-md-8">
					<p style="font-size: 12px;">um. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><a href="#"><span style="color: orange;font-size: 15px;" class="pull-right">Read More...</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container" style="width: 100%;height: 250px;background-color:#ff9900;overflow: hidden;margin-top: -20px;">
			<div class="container-fluid" style="width: 109%;height: 50px; background-color: #ffB441;margin: 0px;margin-left: -15px;">
				<p style="font-size: 25px;margin-top: 5px;font-weight: bolder;font-family: Georgia;margin-left: 10px;" class="pull-left">VidyaShram</p>
			</div><br>
			<div style="line-height: 10px;font-size: 13px;color: white;">
			<p>&#8658; <a href="#">A Special Kind Of School</a></p>
			<p>&#8658; <a href="#">Messages</a></p>
			<p>&#8658; <a href="#">Exchange Programme</a></p>
			<p>&#8658; <a href="#">Board Results</a></p>
			<p>&#8658; <a href="#">Photo Gallery</a></p>
			<p>&#8658; <a href="#">Student Achievements</a></p>
			<p>&#8658; <a href="#">Global Gateway Partnership </a></p>
			<p>&#8658; <a href="#">3 Decades Of Journey</a></p>
			<p>&#8658; <a href="#">News Feeds</a></p>

			</div>
		</div>
		<div class="col-md-12 container-fluid" style="background-color: #006599;width: 100%;height: 38px;">
			<p style="font-size: 22px;color: #fff;margin-top: 3px;">Admission</p>
		</div>
		<div class="col-md-12 container-fluid" style="background-color: #fff;width: 100%;height:300px;border: 1px solid gray;">
			<p style="color:#006599;font-weight: bolder; "><br>FACILITY OF DOWNLOADING<br>APPLICATION FORM FOR CLASS I<br>2018-2019<br><br>
			</p><br>
			<p id="demo" style="font-size: 35px;border: 1px solid grey;"></p><br>
			<p>&rarr;<a href="#" style="color: blue;font-size: 15px;"> Click here to download application</a></p>
			<p>&rarr;<a href="#" style="color: blue;font-size: 15px;"> Click here to download the Prospectus</a></p>
		</div>
		<div class="col-md-12 container-fluid" style="background-color: #006599;width: 100%;height: 38px;margin-top: 9px;">
			<p style="font-size: 22px;color: #fff;margin-top: 3px;">Our Achievements</p>
		</div>
		<div class="col-md-12 container-fluid" style="background-color: #fff;overflow: hidden;width: 100%;line-height: 30px;height:300px;border: 1px solid gray;padding-top: 10px;font-size: 16px;">
			
				<p>&#8658; Nam quam nunc, blandit vel..</p>
				<p>&#8658; ula eget dolor. Aenean massa... </p>
				<p>&#8658; m. Aliquam lorem ante, dapibuss</p>
				<p>&#8658; Nam quam nunc, blandit vel..</p>
				<p>&#8658; ula eget dolor. Aenean massa... </p>
				<p>&#8658; m. Aliquam lorem ante, dapibuss</p>
				<p>&#8658; ula eget dolor. Aenean massa... </p>
		</div>
	</div>
	<div class="col-md-12 container-fluid" style="width: 102.7%;height: 350px;margin-left: -15px;margin-top: 10px;background-color: #FFB441;">
		<h3 style="" ><b>Photo Gallery-School Pictures</b></h3>
		 <div id="demo" style="margin-left: -20px;">
		        <div class="container-fluid" style="width: 100%;">
		          <div class="row">
		            <br><br><br><br><br>
		          <div class="col-md-12">
		        <div id="owl-demo" class="owl-carousel owl-theme" style="margin-top: -80px;">
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/1.jpg" alt="Image"></a></div>
		                <div class="item"><a  href=""><img class="zoom" src="images/2.jpg" alt="Image"></a></div>
		              </div>
		            </div>
		          </div>
		        </div>
       	</div> 
	</div>	
	
    
</div>
<footer class="page-footer container  unique-color-dark pt-0" style="background-color: #1c2331;color: white;">
        <br><br>
        <div class="container mt-12 mb-12  pull-right" >
            <div class="row mt-12 pull-right">
               <ul style="list-style: none;margin-top: -20px;">
               	  <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Our Founder</a></li>
			      <li><a href="#">Bhavan's Faith</a></li>
			      <li><a href="#">Location</a></li>
			      <li><a href="#">Administration</a></li>
			      <li><a href="#">Facilities</a></li>
			      <li><a href="#">Milestones</a></li>
			      <li><a href="#">Contact Us</a></li>
               </ul>
            </div><br>
            <h1 style="float: left;margin-top: -35px;font-size: 45px;margin-left: 5%;">Logo</h1>
            <p style="margin-left: 80%;">Copyright &copy; All Rights Received</p>
        </div>
    </footer>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

    <script src="assets/js/jquery-1.9.1.min.js"></script> 
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
</body>
</html>0