<style type="text/css">
	.contact {
		text-align: center;
	}
	.text1 {
		color: #00B6AD;
	    font-size: 26px;
	    font-weight: bolder;
	   
	}
	.text2 p {
		font-size: 18px;
	    color: #ffffff;
	    font-weight: bolder;
	}
	.footMapContact {
		height: 470px;
		width: 100%;
	}
	.text3 {
		color: #ffffff;
	    font-size: 26px;
	    font-weight: bolder;
	    margin-top: 20px;
	}
	.contactBG {
		background-color: #3a3935;
	}
</style>
<div class="contact container contactBG" style="padding: 20px 0 0 0;">
	<div class="text3">
		
		Sole agent by

	</div>

	<div class="text-center">
		<a href="http://agent168th.com/"><img src="images/logo_agent.jpg" alt="Agent168" height="80"></a>
	</div>
	<div class="text1">
		Agent168 Co., Ltd.
	</div>
	<div class="text2">
		<p>
			Office located at Central world, Ratchadamri Road, Pahtumwan, Bangkok 10330<br>
			Descriptions and pictures that appear in this document is subject to change without prior notice
		</p>
	</div>
	<div style="margin-top: 40px;">
		<div id="googleMapContact" class="footMapContact"></div>
	</div>
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
        


        var map=new google.maps.Map(document.getElementById("googleMapContact"),mapProp);
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		});
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>