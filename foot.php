
<style type="text/css">
	.foot {

	}
	.footSocial {
		background-image: url('images/foot_bg_social.png');
		height: 296px;
	}
	.footMap {
		height: 274px;
		width: 1170px;
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

</style>
<div class="footSocial container">
	<div class="socialLogo">
		<img src="images/fb.png" style="    padding-right: 30px;">
		<img src="images/yt.png" style="    padding-left: 30px;">
	</div>
	<div class="followUsText">
		FOLLOW US ON SOCIAL NETWORKS
	</div>
	<div class="addressText">
		Office located at 141/308 Moo 11, Nong Prue, Banglamung, Chonbu
	</div>
	<div class="telText">
		<img src="images/telLogo.png"> &nbsp;&nbsp;
		<img src="images/th.png">
		<img src="images/en.png">
		Call Center : 083 740 7774-5&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/rus.png">
		Call Center : 083 740 7776
	</div>
</div>
<div id="googleMap" class="footMap container">
</div>
<div class="container" style="    height: 30px;
    background-color: #0E3651;">
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

    function initialize() {
    	var myLatLng = {lat: 13.710, lng: 100.625};
        var mapProp = {
            center:new google.maps.LatLng(13.71061,100.62587),
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