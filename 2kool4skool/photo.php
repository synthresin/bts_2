<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - Photo</title>
		<?php require_once 'include/_assets.php' ?>
		<script type="text/javascript" src="js/swipe.js"></script>
		<script type="text/javascript" src="js/Slider.js"></script>
	</head>
	<body>
		<img src="img/bg.jpg" id="bg" class="unselectable" alt="">
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span8" id="sub_header">
					
					<div class="row">
						<div class="span4">
							<h2>Photo</h2>
						</div>
						<div class="span4 download">
							<h3>Wallpaper Donwload</h3>
							<p>
								<a href="wallpaper/BTS_1st_ALL.zip">BTS</a><br/>
								<a href="wallpaper/BTS_1st_rapmonster.zip">Rap Monster</a><br/>
								<a href="wallpaper/BTS_1st_suga.zip">SUGA</a><br/>
								<a href="wallpaper/BTS_1st_jin.zip">Jin</a><br/>
								<a href="wallpaper/BTS_1st_jhope.zip">j-hope</a><br/>
								<a href="wallpaper/BTS_1st_jimin.zip">Jimin</a><br/>
								<a href="wallpaper/BTS_1st_v.zip">V</a><br/>
								<a href="wallpaper/BTS_1st_jungkook.zip">Jungkook</a>
							</p>
						</div>
					</div>
				</div>
				<div class="module span12"></div>
				<div class="module span4 photo_module jungkook">
					<div class="img_wrap">
						<img src="img/members_jungkook.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jung Kook</h3>
					</div>
				</div><!-- photo_module_end -->
				
				<div class="module span4 photo_module rapmonster">
					<div class="img_wrap">
						<img src="img/members_rapmonster.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Rap Monster</h3>
					</div>
				</div><!-- photo_module_end -->
				<div class="module span4 photo_module v">
					<div class="img_wrap">
						<img src="img/members_v.jpg">
					</div>
					<div class="desc_wrap">
						<h3>V</h3>
					</div>
				</div><!-- photo_module_end -->
				<div class="module span4 photo_module suga">
					<div class="img_wrap">
						<img src="img/members_suga.jpg">
					</div>
					<div class="desc_wrap">
						<h3>SUGA</h3>
					</div>
				</div><!-- photo_module_end -->
				<div class="module span4 photo_module jin">
					<div class="img_wrap">
						<img src="img/members_jin.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jin</h3>
					</div>
				</div><!-- photo_module_end -->
				<div class="module span4 photo_module jimin">
					<div class="img_wrap">
						<img src="img/members_jimin.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jimin</h3>
					</div>
				</div><!-- photo_module_end -->
				<div class="module span4"></div>
				<div class="module span4 photo_module jhope">
					<div class="img_wrap">
						<img src="img/members_jhope.jpg">
					</div>
					<div class="desc_wrap">
						<h3>j-hope</h3>
					</div>
				</div><!-- photo_module_end -->
				
				
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
	<script type="text/javascript">

		//background resize

		var $window = $(window);
		var $bg = $('#bg');

		resize();

		$window.resize(function() {
			resize();
		});

		function resize() {
			// 섹션 높이 계산
			
			var _width = $window.width();
			var _height = $window.height();

			// 각 섹션의 백그라운드 그림의 사이즈도 바꿔줘야돼.

			var horizonality = 1.293103448;

			var section_horizonality = _width / _height;

			if(section_horizonality >= horizonality) {	
				$bg.width(_width);
				$bg.height(_width / horizonality);
			} else {
				$bg.height(_height);
				$bg.width(_height * horizonality);

				var offset = (( _height * horizonality ) - _width )/ 2;
				$bg.css({
					left: -offset
				});
			}
		}

		// masonry

		var $container = $('#modules');

		$window.load( function() {
			$container.masonry({
			  itemSelector: '.module'
			});
		});
		var slider_jungkook,
				slider_rapmonster,
				slider_v,
				slider_suga,
				slider_jin,
				slider_jimin,
				slider_jhope;

		slider_jungkook = new Slider( {view: $('.jungkook_slider'), btn: $('.jungkook')} );
		slider_rapmonster = new Slider( {view: $('.rapmonster_slider'), btn: $('.rapmonster')} );
		slider_v = new Slider( {view: $('.v_slider'), btn: $('.v')} );
		slider_suga = new Slider( {view: $('.suga_slider'), btn: $('.suga')} );
		slider_jin = new Slider( {view: $('.jin_slider'), btn: $('.jin')} );
		slider_jimin = new Slider( {view: $('.jimin_slider'), btn: $('.jimin')} );
		slider_jhope = new Slider( {view: $('.jhope_slider'), btn: $('.jhope')} );

		slider_jungkook.init();
		slider_rapmonster.init();
		slider_v.init();
		slider_suga.init();
		slider_jin.init();
		slider_jimin.init();
		slider_jhope.init();


	</script>
</html>