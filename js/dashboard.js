$(document).ready(function(){
	$('#service').hover(function(){
		$('#service1').show(1000);
		$('#default1').hide(1000);
		$('#doctors1').hide(1000);
		$('#appointments1').hide(1000);
	});
	$('#doctors').hover(function(){
		$('#doctors1').show(1000);
		$('#service1').hide(1000);
		$('#appointments1').hide(1000);
		$('#default1').hide(1000);
	});


	$('#appointments').hover(function(){
		$('#appointments1').show(1000);
		$('#doctors1').hide(1000);
		$('#service1').hide(1000);
		$('#default1').hide(1000);
	});


	$('#default').hover(function(){
		$('#default1').show(1000);
		$('#appointments1').hide(1000);
		$('#doctors1').hide(1000);
		$('#service1').hide(1000);
	});
});