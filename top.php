<style type="text/css">
	.bgTop {
		background-image: url('images/bg_top2jpg.jpg');
		height: 186px;
	}

	#logo {
    	line-height: 180px;
	    display: inline-block;
	    width: 283px;
	    vertical-align: middle;
	    margin-left: 100px;
	}


	#topMenu {
		display: inline-block;
	    vertical-align: middle;
	    margin-top: 40px;
	    text-align: right;
	    width: 670px;
	}

	#topMenu ul li {
 		display: inline-block;
    	padding-right: 20px;
    	vertical-align: middle;
	}

	#topMenu ul li a { 
    	display: block;
    	text-decoration: none !important;
    	color : #3D3D3D;
	}
	.subTopMenu {
		background-color: #0E3651;
		height: 70px;
		line-height: 70px;
		text-align: center;
	}
	.subTopMenu ul li {
	    display: inline-block;
	    vertical-align: middle;
	    font-size: 18px;
	    font-weight: bolder;
	    color: #3D3D3D;
	    padding: 0 16px;
	}
	.subTopMenu ul li a { 
    	display: block;
    	text-decoration: none !important;
		color: whitesmoke;
	}
	.subTopMenu ul li a.active { 
		color: #00B6AD;
	}
	

</style>
<div class="bgTop container">
	<div id="logo">
		<img src="images/logo.png">
	</div>
	<div id="topMenu">
		
	</div>
</div>
<div class="subTopMenu container">
	<ul>
			<li><a <?php if(@$_GET['page'] == "home") echo 'class="active"';?> href="index.php?page=home">Home</a></li>
			<li><a <?php if(@$_GET['page'] == "project-detail") echo 'class="active"';?> href="index.php?page=project-detail">Project Detail</a></li>
			<li><a <?php if(@$_GET['page'] == "floor") echo 'class="active"';?> href="index.php?page=floor">Floor Plan</a></li>
			<li><a <?php if(@$_GET['page'] == "gallery") echo 'class="active"';?> href="index.php?page=gallery">Gallery</a></li>
			<li><a <?php if(@$_GET['page'] == "media") echo 'class="active"';?> href="index.php?page=media">Media</a></li>
			<li><a <?php if(@$_GET['page'] == "news") echo 'class="active"';?> href="index.php?page=news">News & Activities</a></li>
			<li><a <?php if(@$_GET['page'] == "contact") echo 'class="active"';?> href="index.php?page=contact">Contact</a></li>
		</ul>
</div>