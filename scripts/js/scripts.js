
$(document).ready(
	function()
	{
		$("#Update").load("scripts/php/update_status.php");
		var updateID = setInterval(function(){
			$("#Update").load('scripts/php/update_status.php?' + 1*new Date());
		}, 10000);
	}
);
