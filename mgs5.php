<!doctype html>
<head>
	<title>Kept you waiting, huh?</title>
	<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<style>
		body,html{margin:0;padding:0;background-color:#000}.timer{margin:0 12px 0 0;font-size:3em;color:rgba(217,253,254,.5);text-shadow:0 0 9px rgba(217,253,254,.5),1px 1px 1px rgba(255,255,255,.5)}p{color:rgba(217,253,254,.5);text-shadow:0 0 9px rgba(217,253,254,.5),1px 1px 1px rgba(255,255,255,.5)}.mgs-bg{position:static;background-image:url(bg.jpg);background-size:cover;background-position:0 0;background-repeat:no-repeat;min-height:300px;height:100vh;overflow:hidden}#countdown-pc{position:relative;top:7.5%;left:31.5%;transform:rotate(-21.5deg);font-family:VT323}#countdown{position:relative;top:9%;left:30.7%;transform:rotate(-21.5deg);font-family:VT323}#mouse{position:relative;top:60px;left:33%;transform:rotate(-21.5deg);font-family:VT323}
	</style>
</head>
<body>

<div class="mgs-bg">
	<div id="countdown-container">
		<div id="countdown"></div>
		<div id="countdown-pc"></div>
		<div id="mouse">
			<p id="coords"></p>
			<p id="screencenter"></p>
			<p id="lax"></p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
function timeUntil(n,e,a){var t=new Date(n),o=new Date,s=t-o,r=1e3,l=60*r,i=60*l,c=24*i;days=Math.floor(s/c),hours=Math.floor(s%c/i),minutes=Math.floor(s%i/l),seconds=Math.floor(s%l/1e3),document.getElementById(e).innerHTML="<span class='timer days'>"+days+"d</span><span class='timer hours'>"+hours+"h</span><span class='timer minutes'>"+minutes+"m</span><span class='timer seconds'>"+seconds+"s until MGS5"+a+"</span>"}var consoleTimer=setInterval(function(){timeUntil("09/01/2015","countdown",""),timeUntil("09/15/2015","countdown-pc"," PC")},1e3);$(".mgs-bg").mousemove(function(){var n=event.pageX,e=event.pageY,a=window.innerWidth/2,t=window.innerHeight/2;parallaxX=(n-a)/1e3,parallaxY=(e-t)/1e3,newPosXPC=$("#countdown-container").offset().left+-1*parallaxX,newPosYPC=$("#countdown-container").offset().top+-1*parallaxY,$("#coords").text("mouse(x,y): "+n+", "+e),$("#screencenter").text("screen(x,y): "+a+", "+t),$("#lax").text("diff(x,y): "+parallaxX+", "+parallaxY),$("#countdown-container").offset({top:newPosYPC,left:newPosXPC}),$(".mgs-bg").css("background-position",-25*parallaxX+"px "+-55*parallaxY+"px")});
</script>
</body>
</html>