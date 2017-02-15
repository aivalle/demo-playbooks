<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="flowplayer-3.2.11.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Minimal Flowplayer setup</title>
</head><body>
<h1>Server: <?php echo $_SERVER['SERVER_ADDR']; ?></h1></br></br>
    <!-- widescreen container, 560x240 (clip dimensions) * 1.15, center splash -->
<div id="wowza" style="width:640px;height:480px;margin:0 auto;text-align:center">
</div>
<script>

$f("wowza", "http://releases.flowplayer.org/swf/flowplayer-3.2.15.swf", {
    clip: {
        url: 'Ronaldo.mp4',
        scaling: 'fit',
	live: true,
	autoPlay: true,
        provider: 'hddn'
    },
    plugins: {
        hddn: {
            url: "flowplayer.rtmp-3.2.11.swf",
		netConnectionUrl: 'rtmp://<?php echo $_SERVER['SERVER_ADDR']; ?>:1935/vod2'
        }
    },
    canvas: {
        backgroundGradient: 'none'
    }
});
$f("wowza").play();
</script>




</body></html>
