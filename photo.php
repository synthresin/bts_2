<?php $title = 'PHOTO'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - PHOTO</title>
		<?php require_once 'include/_assets.php' ?>
		<script type="text/javascript" src="js/swipe.js"></script>
		<script type="text/javascript" src="js/Slider.js"></script>
	</head>
	<body>
		<div class="upper_red"></div>
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span12 wallpaper" id="sub_header">
					<h2>WALLPAPER DOWNLOAD</h2>
					<a href="wallpaper/bts.zip">BTS</a>&nbsp;&nbsp;
					<a href="wallpaper/rapmonster.zip">RAP MONSTER</a>&nbsp;&nbsp;
					<a href="wallpaper/suga.zip">SUGA</a>&nbsp;&nbsp;
					<a href="wallpaper/jin.zip">JIN</a>&nbsp;&nbsp;
					<a href="wallpaper/jhope.zip">J-HOPE</a>&nbsp;&nbsp;
					<a href="wallpaper/jimin.zip">JIMIN</a>&nbsp;&nbsp;
					<a href="wallpaper/v.zip">V</a>&nbsp;&nbsp;
					<a href="wallpaper/jungkook.zip">JUNGKOOK</a>
				</div>
				<div class="module span12">
				<div class="row">
					<div class="span3 members">
					<div class="padding_fix">
						<h3 class="gallery">MEMBER<br/>GALLERY</h3>
					</div>
				</div>
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_jimin.jpg">
						</div>
						<div class="desc_wrap">
							<h3>JIMIN</h3>
						</div>
					</div><!-- member_module_end -->
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_jhope.jpg">
						</div>
						<div class="desc_wrap">
							<h3>J-HOPE</h3>
						</div>
					</div><!-- member_module_end -->
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_suga.jpg">
						</div>
						<div class="desc_wrap">
							<h3>SUGA</h3>
						</div>
					</div><!-- member_module_end -->
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_rapmonster.jpg">
						</div>
						<div class="desc_wrap">
							<h3>RAP MONSTER</h3>
						</div>
					</div><!-- member_module_end -->
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_v.jpg">
						</div>
						<div class="desc_wrap">
							<h3>V</h3>
						</div>
					</div><!-- member_module_end -->
					
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_jungkook.jpg">
						</div>
						<div class="desc_wrap">
							<h3>JUNG KOOK</h3>
						</div>
					</div><!-- member_module_end -->
					<div class="module span3 member_module">
						<div class="img_wrap">
							<img src="img/members_jin.jpg">
						</div>
						<div class="desc_wrap">
							<h3>JIN</h3>
						</div>
					</div><!-- member_module_end -->
				</div>
				</div>
				
				
				<?php require_once 'include/_footer.php' ?>
			</div>
		</div>
		<div class="popup_bg"></div>
		<div class="popup jungkook_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/jungkook1.jpg" height="520"></div>
			    <div><img src="gallery/jungkook2.jpg" height="520"></div>
			    <div><img src="gallery/jungkook3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup rapmonster_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/rapmonster1.jpg" height="520"></div>
			    <div><img src="gallery/rapmonster2.jpg" height="520"></div>
			    <div><img src="gallery/rapmonster3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup v_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/v1.jpg" height="520"></div>
			    <div><img src="gallery/v2.jpg" height="520"></div>
			    <div><img src="gallery/v3.jpg" height="520"></div>
			    <div><img src="gallery/v4.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup suga_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/suga1.jpg" height="520"></div>
			    <div><img src="gallery/suga2.jpg" height="520"></div>
			    <div><img src="gallery/suga3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup jin_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/jin1.jpg" height="520"></div>
			    <div><img src="gallery/jin2.jpg" height="520"></div>
			    <div><img src="gallery/jin3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup jimin_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/jimin1.jpg" height="520"></div>
			    <div><img src="gallery/jimin2.jpg" height="520"></div>
			    <div><img src="gallery/jimin3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
		<div class="popup jhope_slider">
			<div class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="gallery/jhope1.jpg" height="520"></div>
			    <div><img src="gallery/jhope2.jpg" height="520"></div>
			    <div><img src="gallery/jhope3.jpg" height="520"></div>
			  </div>
			</div>
			<div class="control">
				<a href="#" class="left"></a>
				<a href="#" class="right"></a>
				<a href="#" class="close"></a>
			</div>
		</div><!-- popup end -->
	</body>
</html>