<?php $title = 'VIDEO'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - VIDEO</title>
		<?php require_once 'include/_assets.php' ?>
	</head>
	<body>
		<div class="upper_red"></div>
		<div class="container">
			<div class="row" id="modules">
				<?php require_once 'include/_header.php' ?>
				<div class="module span12" id="sub_header">
					<div class="movie_wrap">
						<iframe width="928" height="522" src="//www.youtube.com/embed/r5GaAEHvHj0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/r5GaAEHvHj0">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/r5GaAEHvHj0/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>N.O<br/>MUSIC VIDEO</h3>
					</div>
				</div><!-- member_module_end -->
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/fglrRHHSO7A">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/fglrRHHSO7A/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>COMEBACK<br/>TRAILER</h3>
					</div>
				</div><!-- member_module_end -->
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/DHAk3T_gqBQ">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/DHAk3T_gqBQ/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>CONCEPT<br/>TRAILER</h3>
					</div>
				</div><!-- member_module_end -->
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/R3017eEgykw">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/R3017eEgykw/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>MV<br/>TEASER #1</h3>
					</div>
				</div><!-- member_module_end -->
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/GYDncRcwdlE">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/GYDncRcwdlE/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>MV<br/>TEASER #2</h3>
					</div>
				</div><!-- member_module_end -->
				<div class="span3 member_module vid" data-src="http://www.youtube.com/embed/BfVt5jRGWCo">
					<div class="img_wrap">
						<img src="http://img.youtube.com/vi/BfVt5jRGWCo/0.jpg">
					</div>
					<div class="desc_wrap">
						<h3>ALBUM<br/>PREVIEW</h3>
					</div>
				</div><!-- member_module_end -->
				<?php require_once 'include/_footer.php' ?>
			</div>
		</div>
		<script type="text/javascript">
		$('.vid').click(function(ev) {

			var src = $(this).data('src');

			$('iframe').attr('src', src);
			return ev.preventDefault();
		});
		</script>
	</body>
</html>