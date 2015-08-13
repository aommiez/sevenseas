<?php
$acOpen = isset($_GET['ac'])? $_GET['ac']: 'master';
?>
<link rel="stylesheet" href="css/floor.css">
<div class="container bg-body">
	<div class="fl sw20p  fc-white  mt10 pull-left menu">
		<span class="fs24 fc-white tp-font">FLOOR PLAN </span>
		<div class="space20"></div>	
		<div id="cssmenu">
			<ul>
				<li class="<?php if($acOpen == 'master') echo 'hilight';?>"><a href="?page=floor.php&show=master">Master Plan</a></li>
				<li class="has-sub <?php if($acOpen=='ab') echo 'open';?>"><a href="?page=floor.php&show=ab">Building AB</a>
					<ul style="<?php if($acOpen=='ab') echo 'display: block;';?>">
						<li class=""><a href="?page=floor.php&show=1&amp;ac=ab">1st Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=2&amp;ac=ab">2nd Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=3&amp;ac=ab">3rd Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=4&amp;ac=ab">4th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=5&amp;ac=ab">5th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=6&amp;ac=ab">6th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=7&amp;ac=ab">7th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=8&amp;ac=ab">8th Floor Plan</a></li>
					</ul>
				</li>

				<li class="has-sub <?php if($acOpen=='cd') echo 'open';?>"><a class="fc-green" href="?page=floor.php&show=cd">Building CD</a>
					<ul style="<?php if($acOpen=='cd') echo 'display: block;';?>">
						<li class=""><a href="?page=floor.php&show=1&amp;ac=cd">1st Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=2&amp;ac=cd">2nd Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=3&amp;ac=cd">3rd Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=4&amp;ac=cd">4th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=5&amp;ac=cd">5th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=6&amp;ac=cd">6th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=7&amp;ac=cd">7th Floor Plan</a></li>
						<li class=""><a href="?page=floor.php&show=8&amp;ac=cd">8th Floor Plan</a></li>
					</ul>
				</li>

				<li class="has-sub <?php if($acOpen=='un') echo 'open';?>"><a href="?page=floor.php&show=typea">Type of  Units</a>
					<ul style="<?php if($acOpen=='un') echo 'display: block;';?>">
						<li class=""><a href="?page=floor.php&show=typea1&amp;ac=un">Type A</a></li>
						<li class=""><a href="?page=floor.php&show=typeb&amp;ac=un">Type B</a></li>
						<li class=""><a href="?page=floor.php&show=typec&amp;ac=un">Type C</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="pull-left floor-body">
		<div>
			<?php
				$show = [
					"master"=> [
						"master-plan.jpg"
					],
					"ab"=> [
						1=> "1Floor_AB_page1.jpg",
						2=> "2Floor_AB_page2.jpg",
						3=> "3Floor_AB_page2.jpg",
						4=> "4Floor_AB_page2.jpg",
						5=> "5Floor_AB_page2.jpg",
						6=> "6Floor_AB_page2.jpg",
						7=> "7Floor_AB_page2.jpg",
						8=> "8Floor_AB_page2.jpg"
					],
					"cd"=> [
						1=> "1Floor_CD_page1.jpg",
						2=> "2Floor_CD_page1.jpg",
						3=> "3Floor_CD_page1.jpg",
						4=> "4Floor_CD_page1.jpg",
						5=> "5Floor_CD_page1.jpg",
						6=> "6Floor_CD_page1.jpg",
						7=> "7Floor_CD_page1.jpg",
					],
					"un"=> [
						"typea1"=> "typea1.jpg",
						"typeb"=> "typeb.jpg",
						"typec"=> "typec.jpg"
					]
				];
				if(!isset($_GET['show'])){
					$img = $show['master'][0];
				}
				else {
					$img = isset($_GET['ac'])? $show[$_GET['ac']][$_GET['show']] :$show[$_GET['show']][0];
				}
			?>
			<img src="images/floor/<?php echo $img;?>" width="100%">
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$('.has-sub > a').click(function(e){
		var $hasSub = $(this).closest('.has-sub');
		e.preventDefault();
		$('.has-sub').removeClass('open');
		$hasSub.addClass('open');
		$('.has-sub').filter('.open').find('ul').slideDown();
		$('.has-sub').filter(':not(.open)').find('ul').slideUp();
	});
});
</script>