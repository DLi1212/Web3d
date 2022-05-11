$(document).ready(function() {
	
	selectModel();
	function selectModel() {

		$('#CokeZero').click(function(){
			$('#model1').show();
			$('#model2').hide();
			$('#model3').hide();
		});

		$('#Sprite').click(function(){
			$('#model1').hide();
			$('#model2').show();
			$('#model3').hide();	  	  
		});

		$('#Appletiser').click(function(){
			$('#model1').hide();
			$('#model2').hide();
			$('#model3').show();	   
		});
	}

});
