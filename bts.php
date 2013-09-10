<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - BTS</title>
		<?php require_once 'include/_assets.php' ?>
	</head>
	<body>
		<img src="img/bg.jpg" id="bg" class="unselectable" alt="">
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span8" id="sub_header">
					<h2>BTS</h2>
					<img src="img/pic_bts.jpg">
					<p class="text display_font">
						최강 비주얼 힙합 군단! 방탄소년단!<br/>
						랩-노래-퍼포먼스-비주얼 모두 완벽한 일곱 소년들!<br/>
						<br/>
						2013년 6월 12일 싱글 <2 COOL 4 SKOOL>을 발매하고, 정식으로 데뷔한 방탄소년단!<br/>
						순도 100% 힙합곡 'No More Dream'을 발표함과 동시에, 가요계에서 가장 핫한 그룹으로 떠올랐다.<br/>
						방탄소년단은 "힙합은 자신의 이야기를 풀어내는 진솔한 음악이다"라고 말한다. <br/>
						이를 증명이라도 하듯 작사, 작곡, 프로듀싱을 직접 해내며, 진정성 있는 음악을 선보인다.<br/>
					</p>
				</div>
				<div class="module span12 section_header">
					Members
				</div>
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_jin.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jin</h3>
						<p class="display_font">
							본명 : 김석진<br/>
							생년월일 : 1992/12/04<br/>
							키 :179cm<br/>
							몸무게 :  60kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_rapmonster.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Rap Monster</h3>
						<p class="display_font">
							본명 : 김남준<br>
							생년월일 : 1994/09/12<br>
							키 : 181cm<br>
							몸무게 : 64kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_jimin.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jimin</h3>
						<p class="display_font">
							본명 : 김지민<br/>
							생년월일 : 1995/10/13<br/>
							키 : 175cm<br/>
							몸무게 : 60kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_suga.jpg">
					</div>
					<div class="desc_wrap">
						<h3>SUGA</h3>
						<p class="display_font">
							본명 : 민윤기<br/>
							생년월일 : 1993/03/09<br/>
							키 :176cm<br/>
							몸무게 :  57kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_v.jpg">
					</div>
					<div class="desc_wrap">
						<h3>V</h3>
						<p class="display_font">
							본명 : 김태형<br/>
							생년월일 : 1995/12/30<br/>
							키 : 176cm<br/>
							몸무게 : 58kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_jhope.jpg">
					</div>
					<div class="desc_wrap">
						<h3>j-hope</h3>
						<p class="display_font">
							본명 : 정호석<br>
							생년월일 : 1994/02/18<br>
							키 : 177cm<br>
							몸무게 : 59kg
						</p>
					</div>
				</div><!-- member_module_end -->
				<div class="module span4"></div>
				<div class="module span4 member_module">
					<div class="img_wrap">
						<img src="img/members_jungkook.jpg">
					</div>
					<div class="desc_wrap">
						<h3>Jung Kook</h3>
						<p class="display_font">
							본명 : 전정국<br/>
							생년월일 : 1997/09/01<br/>
							키 : 176cm<br/>
							몸무게 : 61kg<br/>
						</p>
					</div>
				</div><!-- member_module_end -->
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