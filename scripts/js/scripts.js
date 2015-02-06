
$(document).ready(
	function()
	{
		/* Hier der jQuery-Code */
		/*
		alert(jQuery('a').attr('title'));
		
		var inhaltUeberschrift = $('h1').html();
		var inhaltAbsatz = $('p').html();
		alert($('#absatz1').html());
		alert($('#absatz1').text());

		$("#DT").load("scripts/time.php");
		$("#S5").load("scripts/ping.php?host=Samsung-Galaxy-S5&count=1");
		$("#S3").load("scripts/ping.php?host=Samsung-Galaxy-S3-Neo&count=1");
		$("#CC").load("scripts/ping.php?host=ChromeNewCastle&count=1");
		
		var timeID = setInterval(function(){
			$("#DT").load('scripts/time.php?' + 1*new Date());
		}, 1000);
		
		var pingID = setInterval(function(){
			$("#S5").load('scripts/ping.php?host=Samsung-Galaxy-S5&count=5&' + 1*new Date());
			$("#S3").load('scripts/ping.php?host=Samsung-Galaxy-S3-Neo&count=5&' + 1*new Date());
			$("#CC").load('scripts/ping.php?host=ChromeNewCastle&count=5&' + 1*new Date());
		}, 5000);
		*/
		$("#Update").load("scripts/php/update.php");
		var UpdateID = setInterval(function(){
			$("#DT").load('scripts/php/update.php?' + 1*new Date());
		}, 30000);
	}
);
