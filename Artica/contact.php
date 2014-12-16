<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Artica</title>
	<link href="css/all.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/jquery.mCustomScrollbar.css" type="text/css" rel="stylesheet" media="all">
	<style type="text/css">
h1.heading{padding:0px;margin: 0px 0px 10px 0px;text-align:center;font: 18px Georgia, "Times New Roman", Times, serif;}

/* width and height of google map */
#google_map2,
#google_map {width: 770px; height: 500px;margin-top:0px;margin-left:auto;margin-right:auto; position:static !important;}
#google_map2 p,
#google_map p{ color:#000;}
/* Marker Edit form */
.marker-edit label{display:block;margin-bottom: 5px;}
.marker-edit label span {width: 100px;float: left;}
.marker-edit label input, .marker-edit label select{height: 24px;}
.marker-edit label textarea{height: 60px;}
.marker-edit label input, .marker-edit label select, .marker-edit label textarea {width: 60%;margin:0px;padding-left: 5px;border: 1px solid #DDD;border-radius: 3px;}

/* Marker Info Window */
h1.marker-heading{color: #585858;margin: 0px;padding: 0px;font: 18px "Trebuchet MS", Arial;border-bottom: 1px dotted #D8D8D8;}
div.marker-info-win {max-width: 300px;margin-right: -20px;}
div.marker-info-win p{padding: 0px;margin: 10px 0px 10px 0;}
div.marker-inner-win{padding: 5px;}
button.save-marker, button.remove-marker, button.route-to-here{border: none;background: rgba(0, 0, 0, 0);color: #00F;padding: 0px;text-decoration: underline;margin-right: 10px;cursor: pointer;
}
/*html { height: 50% }
body { height: 100%; margin: 0; padding: 100px }
#google_map { height:	 100% }*/
.button {
border:1px solid #CE9A01;-webkit-box-shadow: #FFF563 0px 1px 0px inset;-moz-box-shadow: #FFF563 0px 1px 0px inset; box-shadow: #FFF563 0px 1px 0px inset; -webkit-border-radius: 5px; -moz-border-radius: 5px;border-radius: 5px;font-family:arial, helvetica, sans-serif; padding: 7px 14px 7px 14px; text-decoration:none; display:inline-block;text-shadow: 0px 1px 0 rgba(255,255,255,0.44);font-weight:bold; color: #63460C;
 background-color: #ffc579; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc579), to(#fb9d23));
 background-image: -webkit-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -moz-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -ms-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -o-linear-gradient(top, #ffc579, #fb9d23);
 background-image: linear-gradient(to bottom, #ffc579, #fb9d23);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc579, endColorstr=#fb9d23);
}

</style>
</head>
<body>
	<div class="overlay">
		<span class="loading">Loading ...</span>
	</div>
	<div id="wrapper">
		<img src="images/bg.jpg" alt="" class="bg">
		<header id="header">
			<strong class="logo inner"><a href="index.php">Artica</a></strong>
			<ul class="social-networks">
				<li><a href="https://www.facebook.com/pages/Artica-Interiors/738323836215593?fref=ts" target="_blank"><span>facebook</span></a></li>
				<li class="twitter"><a href="https://www.twitter.com" target="_blank"><span>twitter</span></a></li>
				<li class="linkedin"><a href="https://www.linkedin.com/company/artica-interiors" target="_blank"><span>linkedin</span></a></li>
			</ul>
		</header>
		<div id="main">
			<div class="holder">
				<div class="textarea">
					<div class="address-area">
						<address>
							<strong class="title">Dubai</strong>
							<div class="details">
								<span class="tel">+971 4 396 3555</span>
								<span class="fax">+971 4 397 6333</span>
								<span class="add">PO BOX 89189</span>
								<a class="loc lightbox" href="#popup1">Location Map</a>
							</div>
						</address>
						<address>
							<strong class="title">ABU DHABI</strong>
							<div class="details">
								<span class="tel">+971 2 622 1771</span>
								<span class="fax">+971 2 622 1773</span>
								<span class="add">PO BOX 111341</span>
								<a class="loc lightbox" href="#popup2">Location Map</a>
							</div>
						</address>
						<!--<address>
							<strong class="title">Ajman</strong>
							<div class="details">
								<span class="tel">+971 6 741 2252</span>
								<span class="fax">+971 6 741 2242</span>
								<span class="add">PO BOX 40440</span>
								<a class="loc" href="#">Location Map</a>
							<div class="details">
						</address>-->
					</div>
					<div class="form-area">
						<p>Got a question? Get in Touch with our team.</p>
						<?php
							if(isset($_POST['contact-btn'])){
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];
								$message = $_POST['message'];
				
								if(isset($email) && !empty($email) && isset($name) && !empty($name) && !empty($message)){
									$to = 'info@articagroup.ae';
										$from = $email;
										$subject = $subject;
										$message = "<strong>Name</strong> $name <br /> <strong>Email</strong> $email <br /> <strong>Subject</strong> $subject <br/><strong>Message</strong> $message";
										$headers = "Content-type: text/html\r\n";
										$headers  .= "From: $from\r\n";
										mail($to, $subject, $message, $headers);
					
									echo '<div class="message-area">Mail has been Sent Successfully !</div>';
								}else{
										echo '<div class="message-area error">Please Enter All the Fields with * sign!</div>'; 
								}
							}
						?>	
						<form method="post" action="contact.php">
							<fieldset>
								<input type="text" placeholder="Full Name*" name="name">
								<input type="email" class="email-field" placeholder="Email ID*" name="email">
								<input type="text" placeholder="Subject" name="subject">
								<textarea cols="5" rows="10" placeholder="Message*" name="message"></textarea>
								<div class="row">
									<input type="submit" value="Submit Now" name="contact-btn">
									<span class="email"><a href="mailto:info@articagroup.ae">info@articagroup.ae</a></span>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<h2>contact</h2>
			</div>
		</div>
		<nav id="nav">
			<ul>
				<li class="icon"><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="listing.php">project list</a></li>
				<li><a href="projects-cat.php">projects</a></li>
				<li class="active"><a href="contact.php">contact</a></li>
			</ul>
		</nav>
		<!--<header id="header">
			<div class="content-area">
				<strong class="logo"><a href="index.php">Artica Interiors</a></strong>
				<div class="image-area"><img src="images/map.jpg" alt=""></div>
				<div class="detail-area contact">
					<h1 class="contact">C<span>o</span>ntact Us</h1>
					<div class="holder">
						<div class="contain">
							<div class="address-area">
								<address>
									<strong class="title">Dubai</strong>
									<span class="tel">+971 4 396 3555</span>
									<span class="fax">+971 4 397 6333</span>
									<span class="add">PO BOX 89189</span>
									<a class="loc" href="#">LOCATION MAP</a>
								</address>
								<address>
									<strong class="title">Ajman</strong>
									<span class="tel">+971 6 741 2252</span>
									<span class="fax">+971 6 741 2242</span>
									<span class="add">PO BOX 40440</span>
									<a class="loc" href="#">LOCATION MAP</a>
								</address>
								<address>
									<strong class="title">ABU DHABI</strong>
									<span class="tel">+971 2 622 1771</span>
									<span class="fax">+971 2 622 1773</span>
									<span class="add">PO BOX 111341</span>
									<a class="loc" href="#">LOCATION MAP</a>
								</address>
							</div>
							<div class="form-area">
								<p>Got a question? Get in Touch with our team.</p>
								<form>
									<fieldset>
										<input type="text" placeholder="Full Name*">
										<input type="email" class="email-field" placeholder="Email ID*">
										<input type="text" placeholder="Subject">
										<textarea cols="5" rows="10" placeholder="Message*"></textarea>
										<input type="submit" value="Submit">
									</fieldset>
								</form>
								<span class="email"><a href="mailto:info@articagroup.ae">info@articagroup.ae</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav id="nav">
				<ul>
					<li class="icon"><a href="index.php">&lsaquo;</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="services.php">services</a></li>
					<li><a href="listing.php">project list</a></li>
					<li><a href="projects-cat.php">projects</a></li>
					<li class="active"><a href="contact.php">contact</a></li>
				</ul>
			</nav>
		</header>-->
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript">
		$(document).ready(function() {

	var mapCenter = new google.maps.LatLng(25.258413, 55.298626); //Google map Coordinates
        var mapCenter2 = new google.maps.LatLng(24.481553, 54.35195); //Google map Coordinates
		var map;
        var map2;
        var listenerHandle = "";
        var baseUrl = $( '#base_url' ).val();
        var directionsDisplay, directionsDisplay2;
        var directionsService = new google.maps.DirectionsService();
        var userLat = "";
        var userLng = "";
        
        map_initialize(); // initialize google map
	
	//############### Google Map Initialize ##############
	function map_initialize()
	{
            directionsDisplay = new google.maps.DirectionsRenderer();
            directionsDisplay2 = new google.maps.DirectionsRenderer();
			var googleMapOptions = 
			{ 
				center: mapCenter, // map center
				zoom: 17, //zoom level, 0 = earth view to higher value
				maxZoom: 30,
				minZoom: 16,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL //zoom control size
			},
				scaleControl: true, // enable scale control
				mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
			};
                        var googleMapOptions2 = 
			{ 
				center: mapCenter2, // map center
				zoom: 17, //zoom level, 0 = earth view to higher value
				maxZoom: 30,
				minZoom: 16,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL //zoom control size
			},
				scaleControl: true, // enable scale control
				mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
			};
		
		   				map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);
                        map2 = new google.maps.Map(document.getElementById("google_map2"), googleMapOptions2);
                        directionsDisplay.setMap(map);
                        directionsDisplay2.setMap(map2);

                        // Show current user's location with a marker on it
                        if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
				initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//				map.setCenter(initialLocation);
                                
                                userLat = position.coords.latitude;
                                userLng = position.coords.longitude;
				
				var marker = new google.maps.Marker({
					  position: initialLocation,
					  map: map,
					  title: 'Your Current Position!'
				  });
                                var marker2 = new google.maps.Marker({
                                          position: initialLocation,
                                          map: map2,
                                          title: 'Your Current Position!'
				});
                                });
				
			}	
                        
                        var name 		= 'Name';
                        var address 	= '<p>'+ 'Address' +'</p>';
                        var type 		= 'Type';
                        var point 	= new google.maps.LatLng(parseFloat(25.258413),parseFloat(55.298626));
//                        var point 	= new google.maps.LatLng(parseFloat(31.476448),parseFloat(74.339628));
                        var point2 	= new google.maps.LatLng(parseFloat(24.481553),parseFloat(54.35195));
//                        var point2 	= new google.maps.LatLng(parseFloat(31.473895),parseFloat(74.289557));
                        create_marker(map, point, 'Artica Dubai', 'Al Musalla Tower<br>Office Suite # 502', true, false, false, "images/pin.png", 1);
                        create_marker(map2, point2, 'Artica AbuDhabi', 'Omer Bin Yousuf Building<br>Mezzanine Floor, Office # 11', true, false, false, "images/pin.png", 2);
	}
        
        //############### Route to current Marker ##############
        function route(endLat, endLng, mapNumber) {
            var start = new google.maps.LatLng(userLat,userLng);
            var end = new google.maps.LatLng(endLat,endLng);
            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.WALKING
             };
             
            directionsService.route(request, function(result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                if (mapNumber == '1'){
                        directionsDisplay.setDirections(result);
                } else if (mapNumber == '2'){
                    directionsDisplay2.setDirections(result);
                }
            } else { alert("couldn't get directions:"+status); }
            });
        }
        
	//############### Create Marker Function ##############
	function create_marker(currentMap, MapPos, MapTitle, MapDesc,  InfoOpenDefault, DragAble, Removable, iconPath, mapNumber)
	{	  	  		  
		
		//new marker
		var marker = new google.maps.Marker({
			position: MapPos,
			map: currentMap,
			draggable:DragAble,
			animation: google.maps.Animation.DROP,
			title:"Hello World!",
			icon: iconPath
		});
		
		//Content structure of info Window for the Markers
		var contentString = $('<div class="marker-info-win">'+
		'<div class="marker-inner-win"><span class="info-content">'+
		'<h1 class="marker-heading">'+MapTitle+'</h1><p>'+MapDesc+ 
                '</p></span><button data-id="' +MapPos+ '" data-mapnum="' +mapNumber+ '" name="route-to-here" class="route-to-here" title="Get Route">Get Route to here</button>'+
		'</div></div>');
		
		//Create an infoWindow
		var infowindow = new google.maps.InfoWindow();
		//set the content of infoWindow
		infowindow.setContent(contentString[0]);

		//Find remove button in infoWindow
                var routeBtn 	= contentString.find('button.route-to-here')[0];
                
                //add click listner to route to here button
		google.maps.event.addDomListener(routeBtn, "click", function(event) {
                        var mapPos = $( this ).attr('data-id');
                        var mapNo = $( this ).attr('data-mapnum');
                        mapPos = mapPos.substr(1, mapPos.length - 2);
                        mapPos = mapPos.split(', ');
                        route(mapPos[0], mapPos[1], mapNo);
		});
		
		//add click listner to save marker button		 
		google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker); // click on marker opens info window 
	    });
		  
		if(InfoOpenDefault) //whether info window should be open by default
		{
		  infowindow.open(map,marker);
		}
	}
});
	</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<div class="popup-holder">
		<div id="popup1" class="box">
			<div id="google_map"></div>
		</div>
	</div>
	<div class="popup-holder">
		<div id="popup2" class="box">
			<div id="google_map2"></div>
		</div>
	</div>
	<footer id="footer">
		<span class="copy">All rights Reserved Copyright &copy; Artica <?=date('Y')?></span>
		<span class="by">Developed &amp; Designed by <a href="http://www.incubasys.com" target="_blank">Incubasys</a></span>
	</footer>
</body>
</html>
<!--<div class="popup-holder">
	<div id="popup3" class="box">
		<img src="images/artica_ajman.jpg" alt="" style="width:100%; height:auto; display:block;">
	</div>
</div>-->