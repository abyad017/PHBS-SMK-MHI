<?php include 'c-session_start.php'; ?>

<link rel="icon" type="image/x-icon" href="../img/icon/icon.png" />

<link rel="stylesheet" type="text/css" href="./../style/nav-index.css" />
<link rel="stylesheet" type="text/css" href="./../style/input.css" />
<link rel="stylesheet" type="text/css" href="./../style/style.css" />

<link rel="stylesheet" type="text/css" href="./../style/slider/skitter.css" />

<script src="./../js/jquery-1.6.3.min.js"></script>
<script src="./../js/jquery.easing.1.3.js"></script>
<script src="./../js/jquery.skitter.min.js"></script>				
<script>
	$(document).ready(function() {
		
		var options = {};

		if (document.location.search) {
			var array = document.location.search.split('=');
			var param = array[0].replace('?', '');
			var value = array[1];
			
			if (param == 'animation') {options.animation = value;}

			else if (param == 'type_navigation') {
				options[value] = true;
				if (value == 'dots') $('.border_box').css({'marginBottom': '40px'});}
		}
		
		$('.box_skitter_large').skitter(options);
		
		// Highlight
		//$('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
	});
</script>