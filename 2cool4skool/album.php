<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - Album</title>
		<?php require_once 'include/_assets.php' ?>
	</head>
	<body>
		<img src="img/bg.jpg" id="bg" class="unselectable" alt="">
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span8" id="sub_header">
					<h2 class="album">Album</h2>
					<div class="row track_grid">
						<div class="span4">
							<img src="img/cover.jpg">
						</div>
						<div class="span4">
							<h3 class="track_header">Tracks</h3>
							<p class="track_list display_font">
							1. Intro : 2 COOL 4 SKOOL feat. DJ Friz<br/>
							2. We are bulletproof PT.2<br/>
							3. Skit : Circle room talk<br/>
							4. No More Dream<br/>
							5. Interlude<br/>
							6. 좋아요<br/>
							7. Outro : Circle room cipher<br/>
							</p>
						</div>
					</div>
					
					<p class="text display_font">
						<strong>힙합 아이돌 '방탄소년단', 데뷔 싱글 [2 COOL 4 SKOOL] 발매! '방탄소년단' 데뷔곡 "No More Dream"! 90년대 갱스터 힙합의 재해석! 힙합 아이돌 '방탄소년단'이 던지는 메시지! '니 꿈은 뭐니?'</strong><br/>
						<br/>
						힙합 아이돌 '방탄소년단'의 데뷔 싱글 [2 COOL 4 SKOOL]이 발매됐다. 싱글임에도 27분이 넘는 러닝타임을 자랑한다. 이는 힙합 뮤지션은 음반으로 얘기해야 한다는 방탄소년단의 신념과 열정이 만들어낸 결과물이다. 멤버들은 전곡의 작사, 작곡에 참여하는 등 범상치 않은 실력을 뽐냈다. '힙합은 자신의 이야기를 풀어내는 진솔한 음악이다'라는 방탄소년단의 말처럼, 이들은 직접 경험하고 느낀 바를 랩으로 써내려 갔다. 덕분에 방탄소년단의 감성과 가사 사이에는 그 어떠한 이물감도 없다. 질과 양 모두 만족스러운 음반의 탄생이라 할 수 있다.
					</p>
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