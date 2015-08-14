
<style type="text/css">
	.foot {

	}
	.footSocial {
		background-image: url('images/foot_bg_social001.jpg');
		height: 296px;
	}
	.footMap {
		height: 274px;
		width: 100%;
	}
	.socialLogo {
		text-align: center;
		line-height: 152px;
    	width: 1093px;
	}
	.socialLogo img {

	}
	.followUsText {
		text-align: center;
	    font-size: 28px;
	    line-height: 8px;
	    color: white;
	    font-weight: bolder;
	    text-shadow: 0px 2px 2px rgba(0, 0, 0, 1);
	}
	.addressText {
		text-align: center;
		color: white;
	    line-height: 52px;
	    font-weight: bolder;
	    font-size: 18px;
	    text-shadow: 0px 2px 2px rgba(0, 0, 0, 1);
	}

	.telText {
		text-align: center;
		color: black;
		font-size: 20px;
	}
	#googleMap {
		
	}
	#sendForm {
		position: absolute;
	    top: 5px;
	    right: 140px;
	    height: 264px;
	    width: 250px;
	    background-color: rgba(255, 255, 255, 0.8);
	    color: #0E3651;
	    font-weight: bolder;
	    padding: 16px;
	}
	.divMap {
		position: relative;
		height: 274px;
		top: 0px;
		left: 0px;
	}
	#sendForm input {
		margin-bottom: 10px;
	}
</style>
<div class="footSocial container">
	<div class="socialLogo">
		<a href="https://www.facebook.com/agent168th">
			<img src="images/fb.png" style="    padding-right: 30px;">
		</a>

		<a href="https://www.youtube.com/watch?v=AKdZUzrh0qU">
			<img src="images/yt.png" style="    padding-left: 30px;">
		</a>
	</div>
	<div class="followUsText">
		FOLLOW US ON SOCIAL NETWORKS
	</div>
	<div class="addressText">
		Office located at Central world, Ratchadamri Road, Pahtumwan, Bangkok 10330
	</div>
	<div class="telText">
		<img src="images/telLogo.png"> &nbsp;&nbsp;
		<img src="images/th.png">
		<img src="images/en.png">
		<strong>
		Call Center : 087 760 5555,
		Email : info@agent168th.com,
		Line : agent168
		</strong>
	</div>
</div>
<div class="divMap container">
	<div id="googleMap" class="footMap"></div>
	<div id="sendForm">
		<p>Send us a message</p>
		<form method="post">
			<input type="text" name="name" placeholder="Name" class="form-control">
			<input type="email" name="email" placeholder="Email" class="form-control">
			<input type="text" name="message" placeholder="Message" class="form-control">
			<input type="number" name="tel" placeholder="Tel." class="form-control">
			<button class="btn btn-success">Summit</button>
		</form>
	</div>
</div>

<div class="container" style="    height: 40px;
    background-color: #0E3651;">
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

    function initialize() {
    	var myLatLng = {lat: 13.747423, lng: 100.540233};
        var mapProp = {
            center:new google.maps.LatLng(13.747423,100.540233),
            zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        


        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		});
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>