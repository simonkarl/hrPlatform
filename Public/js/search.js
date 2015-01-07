

/**
search for header
*/


function searchBefore(formName){

	fieldValue = $('#'+formName+'>span>#keyword').val()

	if (fieldValue == undefined || fieldValue == '') {

		alert('查询内容不能为空！')

		return false

	} else{

		$('#'+formName).submit()
	}

}




// $(".searchBtn").click(function(){

// 	var typeName = $(this).attr("name");
//     $.ajax({    
// 			url:domain+'/home/acurateSearch',   
// 			data:{   
// 			    	positionName :"php",
// 			    	typeName : typeName 
// 			    },    
// 			type:'get',    
// 			cache:false,        
// 		    success:function(res) {    
// 				  alert(res);
// 		     },    
// 		    error: function() {      
// 		          alert("网络异常！");    
// 		     }    
// 		});

// })
