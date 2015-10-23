$('#btnSaveWelcome').click(function(){
	$.ajax({
		url:thisdomain+'settings/update',
		data:{welcometext:tinyMCE.get('welcomes').getContent()},
		type:'post',
		success:function(data){
			
		}
	});
});
