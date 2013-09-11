<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - Video</title>
		<?php require_once 'include/_assets.php' ?>
	</head>
	<body>
		<img src="img/bg.jpg" id="bg" class="unselectable" alt="">
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span8" id="sub_header">
					<h2 class="album">Video</h2>
					<div class="vid_item">
						<iframe width="620" height="348" src="//www.youtube.com/embed/rBG5L7UsUxA" frameborder="0" allowfullscreen></iframe>
						<p class="desc">No More Dream MV</p>
					</div>
					<div class="vid_item">
						<iframe width="620" height="348" src="//www.youtube.com/embed/f7rUjOadhwo" frameborder="0" allowfullscreen></iframe>
						<p class="desc">Movie Trailer 2</p>
					</div>
					<div class="vid_item">
						<iframe width="620" height="348" src="//www.youtube.com/embed/ZjEnJif3mGM" frameborder="0" allowfullscreen></iframe>
						<p class="desc">Movie Trailer 1</p>
					</div>
					<div class="vid_item">
						<iframe width="620" height="348" src="//www.youtube.com/embed/Ya65AfxLesU" frameborder="0" allowfullscreen></iframe>
						<p class="desc">Debut Trailer</p>
					</div>
				</div>
				<?php require_once 'include/_footer.php' ?>
			</div>
		</div>
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
	</script>
</html>