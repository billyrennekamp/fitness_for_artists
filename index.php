<?php
error_reporting(E_ALL);





$workouts = array(

	array(
		"thumb"=>"intro-thumb.jpg",
		"title"=>"",
		"frames"=>array(
			array(
				"image"=>"intro.jpg",
				"text"=>""
				)
			)
		),

);


?>
<html>
<head>
	<meta name="description" content="Fitness for Artists is a web-tv program for Arte">

	<title>Workout For Artists</title>
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>

	<!--<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>-->
	<!--<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>-->
	<!--<script type="text/javascript" src="js/jquery.cycle.all.js"></script>-->
	<script type="text/javascript" src="galleria/galleria-1.2.9.min.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />-->
 	<link rel="stylesheet" href="css/style.css" />
 	<link type="text/css" rel="stylesheet" href="galleria/themes/classic/galleria.classic.css">
	<script type="text/javascript" src="galleria/themes/classic/galleria.classic.min.js"></script>
 	<style>
 	#galleria{
 		height:400px;
 		width:480px;
 		margin:auto;
 	}
 	.galleria-info{
 		width:450px;
 		top:10px;
 		color:black;
 	}
 	.galleria-info-title{
 		color:black;
 	}
 	.galleria-info-text{
 		background-color:rgba(255,255,255,0.5);
 		width:auto;
 	}
 	.galleria-info-description{
 		width:89%;
 		color:black;
 		font:normal normal 12px "Helvetica Neue",Arial,Helvetica,Geneva,sans-serif;
 	}
 	.galleria-info-text, .galleria-info-title, .galleria-info-description{
 		display:block;
 	}
 	.galleria-info-link{
 		display:none;
 	}
 	h4{
 		color:white !important;
 	}
 	html { 
  background: url(bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
 	</style>
 	<script>
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    Galleria.run('#galleria', {
		transition: 'none',
		overlayOpacity: 0.5,
		showInfo : true,
	});
</script>
 	<script>
 	$(document).ready(function(){


 		/*
    $('#slideshow').cycle({
 		fx:       'none',
        timeout:   0,
        after:     function() {
            $('#caption').html(this.alt);
        },
        "prev":".left",
        "next":".right"
       });*/



 			<?foreach($workouts as $k=>$workout):
 			if((isset($workout[0]))) continue;
 			?>
 			/*
			$("a[rel=group<?echo$k;?>]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'inside',
				'frameHeight':'100%',
				"opacity" : "true",
				"changeFade":0,
				"changeSpeed":0,
				"cyclic":true,
				'padding':0,
				'titleFormat': function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});*/
			<?endforeach;?>
		});

 	</script>
<meta name="viewport" content="width=device-width">


</head>
<body>
<h1 style="text-align:center; font-size:100pt; line-height:100pt;" class="huge">Fitness For Artists</h1>
<h2 style="text-align:center; font-size:20pt; line-height:20pt;" >Fitness for Artists is a web-tv program for Arte</h2>
<!--<div style="text-align:center;"><a href="#">Facebook</a> | <a href="#">FFA Arte</a> | <a href="#">Contact</a></div>-->
<br>
<br>
<h1 style="text-align:center; font-size:50pt; line-height:50pt;"  >EP06 - Jeremy Shaw</h1>
<br>
<!--<div style="text-align:center; font-size:20pt; line-height:20pt;max-width:900px;margin:auto;margin-bottom:60px;">This is an energetic workout that fuses elements from martial arts, yoga, dance and functional training to create a fun full-body strength conditioning and flexibility routine for all levels!<br>
Download the workout as a timer for the smartphone app <a href="link to http://www.secondsapp.com/" target="_blank">Seconds</a><br>
<br><a href="timers.seconds" type="application/octet-stream">download timer</a>
</div>-->



<div id="galleria">
<!--<a href="http://www.youtube.com/watch?v=vdX_OBUeHb4"><img src="http://img.youtube.com/vi/vdX_OBUeHb4/1.jpg" data-title="title" data-description="description">-->
<?
foreach($workouts as $workout){
	if(isset($workout[0])){
		continue;
	}
	foreach($workout["frames"] as $frame){
?>
    <a href="img/<?echo$frame["image"];?>"><img src="img/thumbs/<?echo $workout["thumb"];?>" data-title="<?echo$workout["title"];?>" data-description="<?echo$frame["text"];?>"></a>
<?
	}

}
?>
</div>
    <div class="seconds-timer-container timer3513223" style="width:480px;color:#bbb;background-color:#333;text-align:center;font:14px sans-serif"><h3 style="font:16px sans-serif"><a href="http://www.intervaltimer.com/timers/3513223" style="color:#afb4e7">Jeremy Shaw Custom Timer</a></h3><p>Create your own <a href="http://www.intervaltimer.com" style="color:#afb4e7">interval timer</a> or download our <a href="http://www.intervaltimer.com/apps" style="color:#afb4e7">interval timer app</a></p></div>
    <script data-seconds-timer-id="3513223">
    var Runloop = window.Runloop || {};
    (function() {
        Runloop.defs = Runloop.defs || {};
        Runloop.defs['timer3513223'] = {"type":0,"name":"Jeremy Shaw","intervals":[{"count":"1","rest":false,"name":"Jog","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"2","rest":false,"name":"High Knees ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"3","rest":false,"name":"Alternating Side Lunge","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"4","rest":false,"name":"Knee To Elbow ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"5","rest":false,"name":"Walkout Swivel ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"6","rest":false,"name":"Side To Side Hops","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"7","rest":false,"name":"Squat Stretch","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"8","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"9","rest":false,"name":"Star Jumps","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"10","rest":false,"name":"Squats ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"11","rest":false,"name":"Warrior Three","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"12","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"13","rest":false,"name":"Star Jumps","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"14","rest":false,"name":"Squats ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"15","rest":false,"name":"Wheelbarrow","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"16","rest":false,"name":"Warrior Three","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"17","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"18","rest":false,"name":"Shuttle Run","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"19","rest":false,"name":"T-push-up","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"20","rest":false,"name":"Walking Lunges","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"21","rest":false,"name":"Leg Push","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"22","rest":false,"name":"Bunny Hops ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"23","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"24","rest":false,"name":"Shuttle Run","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"25","rest":false,"name":"T-push-up","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":30,"durationPredefinied":false},{"count":"26","rest":false,"name":"Walking Lunges","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"27","rest":false,"name":"Leg Push","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"28","rest":false,"name":"Bunny Hops ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"29","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"30","rest":false,"name":"Crab Walk","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"31","rest":false,"name":"Dancing Crab ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"32","rest":false,"name":"Wall Sits ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"33","rest":false,"name":"Recover ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"34","rest":false,"name":"Crab Walk","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"35","rest":false,"name":"Dancing Crab ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false},{"count":"36","rest":false,"name":"Wall Sits ","vibration":false,"music":{"PersistentId":"0","DisplayName":"No Music"},"color":0,"split":false,"duration":60,"durationPredefinied":false}],"numberOfSets":36,"soundScheme":1};

        var script = document.createElement('script');
        script.src = '//s3.amazonaws.com/widget.intervaltimer.com/1/widget.js';
        script.async = true;
        document.body.insertBefore(script, document.body.firstChild);
    })();
    </script>
                

                



    <?/*?>
<div id="slideshow">
<?
foreach($workouts as $workout){
	if(isset($workout[0])){
		continue;
	}
	foreach($workout["frames"] as $frame){
		echo "<img src='img/".$frame["image"]."' alt='".$frame["text"]."'>";
	}
}

?>
<div id="caption"></div>
<span class="left"><</span><span class="right">></span>
</div>
<?

*/







/*
foreach($workouts as $k=>$workout):
 	if((isset($workout[0]))){
 		//print_r($workout);
 		//die();
 			echo "<div class='twox'>2X</div>";
 		
 		continue;
 	}



	if(isset($workout["frames"][0])):?>
		<a class="popup" rel="group<?echo$k;?>" 
		href="img/<?echo$workout["frames"][0]["image"];?>"
		title="<?echo$workout["frames"][0]["text"];?>">
	<?
	else:
		continue;
	endif;
	?>
	<table class="workoutbox white">
		<tr>
			<td class="workoutimgspan"><img class="workoutimg" src="img/thumbs/<?echo$workout["thumb"];?>"></td>
			<td class="time"><?echo$workout["time"];?></td>
			<td class="title"><?echo$workout["title"];?></td>
		</tr>
	</table>
	</a>
	<div class="hidden" >
	<?foreach($workout["frames"] as $kk=>$frame):
	if($kk == 0) continue;
	?>
		<a href="img/<?echo$frame["image"];?>" rel="group<?echo$k;?>" title="<?echo$frame["text"];?>"></a>
	<?endforeach;?>
	</div>
<?endforeach;

*/?>

<br>
<a href="/ep01"  style="text-decoration:none; color:black;"> <h1 style="text-align:center; font-size:50pt; line-height:50pt;"> Previous Episode </h1> </a>
<br>
<br>
<a href=".."  style="text-decoration:none; color:black;"> <h1 style="text-align:center; font-size:50pt; line-height:50pt;"> Next Episode </h1> </a>
<br>

</body>
</html>
