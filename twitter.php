<?php 
date_default_timezone_set('Asia/Seoul');
require_once('twitteroauth/twitteroauth.php'); 

$title = 'TWITTER';

function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth('9i6FUMEeDycYMUAsVXRy1g', 'oADsZVmh0poL4SpTFDiE8ofrQKXOJs6XmdaLhsB94', $oauth_token, $oauth_token_secret);
  return $connection;
}

function getURLString($tweet) {
	$url_string = 'http://twitter.com/' . $tweet->user->screen_name . '/status/' . $tweet->id_str;
	if ($tweet->entities->urls && count($tweet->entities->urls) > 0 && strpos($tweet->entities->urls[0]->display_url, 'youtu.be') !== false) {
		$url_string = 'http://' + $tweet->entities->urls[0]->display_url;
	}
	echo $url_string;
}

function getImgSrc($tweet) {
	$src_string;
	
	if($tweet->entities->media && count($tweet->entities->media) > 0 &&$tweet->entities->media[0]->type =="photo") {
		$src_string = $tweet->entities->media[0]->media_url;
	} else if($tweet->entities->urls && count($tweet->entities->urls) > 0) {
		if(strpos($tweet->entities->urls[0]->display_url, 'yfrog') !== false) {
		
			$src_string = $tweet->entities->urls[0]->display_url . ':iphone';
			
		} else if(strpos($tweet->entities->urls[0]->display_url, 'twitpic') !== false) {
		
			$twitpicURL = substr($tweet->entities->urls[0]->display_url, 12);
			$src_string = 'http://twitpic.com/show/thumb/' . $twitpicURL;
			
		} else if(strpos($tweet->entities->urls[0]->display_url, 'youtu.be') !== false) {
	
			$youtubeID = substr($tweet->entities->urls[0]->display_url, 9);	
			$src_string = 'http://img.youtube.com/vi/' . $youtubeID . '/0.jpg';
			
		}
	}		
	
	echo $src_string;
}

function from_apachedate($date){
    list($D,$M,$d,$h,$m,$s,$y) = sscanf($date, "%s %s %2d %2d:%2d:%2d +0000 %4d");
    return strtotime("$d $M $y $h:$m:$s GMT+00:00");
}

function elapsedtime($time){
    $gap = time()- $time;
                            
   if ($gap < 60)
        return $gap.' 초 전';
    $gap = round($gap / 60);
    if ($gap < 60)
        return $gap.' 분 전';
    $gap = round($gap / 60);
    if ($gap < 24)
        return '약 '.$gap.' 시간 전';
    $gap = round($gap / 24);
    if ($gap > 24)
        return round($gap).' 일 전';
        return date('h:i A F d, Y', $time);
}

$connection = getConnectionWithAccessToken("335141638-VLNRYpDtrgyhjDTZ8ytLtosNeTHVxNtfJY4WXXMy", "W60NtfqknxjGLFK7ydh9VAEp0n8vOs213qvrsqoMo");
$content = $connection->get("statuses/user_timeline", array(
	'screen_name' => 'BTS_twt',
	'include_rts' => true,
	'count' => 20
));
//$content;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BTS - TWITTER</title>
		<?php require_once 'include/_assets.php' ?>
	</head>
	<body>
		<div class="upper_red"></div>
		<div class="container">
			<div class="row">
				<?php require_once 'include/_header.php' ?>
				<div class="span12">
					<div class="row" id="modules">
						<?php 
							if($content) {
								foreach ($content as $tweet) :
						?>
						
						<div class="module span4 twt_item">
							
							<div class="img_wrap">
								<img src="<?php getImgSrc($tweet); ?>"/>
							</div>
							
							
							<div class="text_wrap display_font">
								<a href="<?php getURLString($tweet); ?>" target="_blank"><?php echo $tweet->text; ?></a>
								<br/><br/>
								<span class="date"><?php echo elapsedtime(from_apachedate($tweet->created_at)); ?></span>
							</div>
						</div>
						<?php
							endforeach;
							}
						?>
					</div>
				</div>
				<?php require_once 'include/_footer.php' ?>
			</div>
		</div>
	</body>
	<script type="text/javascript">


		var $container = $('#modules');

		$(window).load( function() {

			$('.twt_item').each(function(idx, elem) {

				var img = $(elem).find('img');

				if (!img.attr('src')) {
					$(elem).find('.img_wrap').remove();
				}

			});
			$container.masonry({
			  itemSelector: '.module'
			});
		});
	</script>
</html>