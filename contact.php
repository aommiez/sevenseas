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
		width: 1170px;
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
<div class="contact container contactBG">
<div class="text3">
		
			Sole agent by
	
	</div>
	<div class="text1">
		Agent168 Co., Ltd.
	</div>
	<div class="text2">
		<p>
			office located at 141/308 Moo 11, Nong Prue, Banglamung. Chonburi on April 4, 2014<br>
			Descriptions and pictures that appear in this document is subject to change without prior notice
		</p>
	</div>
	<div>
		<div id="googleMapContact" class="footMapContact"></div>
	</div>
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
        


        var map=new google.maps.Map(document.getElementById("googleMapContact"),mapProp);
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		});
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>