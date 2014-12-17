

/**
search for header
*/


$(".searchBtn").click(function(){

	var typeName = $(this).attr("name");
    $.ajax({    
			url:domain+'/home/acurateSearch',   
			data:{   
			    	positionName :"php",
			    	typeName : typeName 
			    },    
			type:'get',    
			cache:false,        
		    success:function(res) {    
				  alert(res);
		     },    
		    error: function() {      
		          alert("网络异常！");    
		     }    
		});

})
