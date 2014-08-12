    $(document).ready(function(){

	    var i=0;
	    //$('#slide img').hide();
	    //$('#slide img').fadeIn(3000);
	    $('#navelement.first').addClass('active');
	    function loop(){
		var pre = ['/jpg/rush.png', '/jpg/Badge.png', '/jpg/alumni.png'];
		$('#slide img').fadeOut(2000,function(){
			
			$('img.main').attr("src",pre[i]);
			if(i==0)
			    {
				$('#navelement.first').removeClass('active');
				$('#navelement.second').removeClass('active');
				$('#navelement.third').removeClass('active');
				$('#navelement.first').addClass('active');
			    }
			else if(i==1)
			    {
				$('#navelement.first').removeClass('active');
				$('#navelement.second').removeClass('active');
				$('#navelement.third').removeClass('active');
				$('#navelement.second').addClass('active');
			    }
			else
			    {
				$('#navelement.first').removeClass('active');
				$('#navelement.second').removeClass('active');
				$('#navelement.third').removeClass('active');
				$('#navelement.third').addClass('active');
			    }
                });
		
		$('#slide img').fadeIn(2000);

		if(i==2){i=0}
		else{i=i+1}

	    }

	    setInterval(loop, 6000);
	});
