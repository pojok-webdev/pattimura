$.fn.stairUp = function(options){
	var settings = $.extend({
		level:1
	},options);
	out=$(this);
	for(i=0;i<settings.level;i++){
		out=out.parent();
	}
	return out;
}

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        $("#btnAddMarketPlace").click(function(){
			$("#mdlAddMarketPlace").modal();
		});
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern imagetools"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		$('#btnSaveMarketplace').click(function(){
			var actions = '';
			actions+='<button type="button" class="btn btn-default btnEditTitle">';
			actions+='	<i class="fa fa-edit fa-fw"></i> Edit Title';
			actions+='</button>';
			actions+='<button type="button" class="btn btn-default btnEditPreview">';
			actions+='	<i class="fa fa-edit fa-fw"></i> Edit Preview';
			actions+='</button>';
			actions+='<button type="button" class="btn btn-default btnEditDetail">';
			actions+='	<i class="fa fa-edit fa-fw"></i> Edit Detail';
			actions+='</button>';
			actions+='<button type="button" class="btn btn-default btnEditImage">';
			actions+='	<i class="fa fa-edit fa-fw"></i> Edit Image';
			actions+='			</button>';
			actions+='<button type="button" class="btn btn-default btnRemove">';
			actions+='<i class="fa fa-remove fa-fw"></i> Remove';
			actions+='</button>';
			$.ajax({
				url:thisdomain+'marketplaces/save',
				data:{
					title:$('#txttitle').val(),
					preview:$('#txtpreview').val(),
					detail:$('#txtdetail').val(),
					img:$('#imgLogo').attr('src')
					},
				type:'post',
				success:function(data){
				newRow = tmarketplaces.fnAddData([$('#txttitle').val(), $('#txtpreview').val(), $('#txtdetail').val(), '<img src='+$('#imgLogo').attr('src')+' />', actions]);
				var row = tmarketplaces.fnGetNodes(newRow);
				//$(row).attr('thisid', maxid + 1);
                    var nTr = tmarketplaces.fnSettings().aoData[newRow[0]].nTr;
                    var nTds = $('td', nTr);
                    nTds.eq(1).addClass('mptitle');
                    nTds.eq(1).addClass('mppreview');
                    nTds.eq(3).addClass('mpdetail');
                    nTds.eq(4).addClass('mpimg');
					console.log('data',data);
				},
				error:function(err){
					console.log('err',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnEditTitle',function(){
			var tr = $(this).stairUp({level:2});
			$('#tMarketPlace tbody tr').removeClass('selected');
			tr.addClass('selected');
			$.ajax({
				url:thisdomain+'marketplaces/get/title/'+tr.attr('trid'),
				type:'get',
				success:function(data){
					$('#mdlInputTextTitle').html('Edit Title');
					$('#txtInpText').val(data);
					$("#mdlInputText").modal();
				},
				error:function(err){
					console.log('error',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnEditPreview',function(){
			var tr = $(this).stairUp({level:2});
			$('#tMarketPlace tbody tr').removeClass('selected');
			tr.addClass('selected');
			tinymce.activeEditor.getContent();
			$.ajax({
				url:thisdomain+'marketplaces/get/preview/'+tr.attr('trid'),
				type:'get',
				success:function(data){
					$('#mdlInpTitle').html('Edit Preview');
					tinyMCE.get('txtInp').setContent(data);
					$("#mdlInp").modal();
				},
				error:function(err){
					console.log('error',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnEditDetail',function(){
			var tr = $(this).stairUp({level:2});
			$('#tMarketPlace tbody tr').removeClass('selected');
			tr.addClass('selected');
			tinymce.activeEditor.getContent();
			$.ajax({
				url:thisdomain+'marketplaces/get/detail/'+tr.attr('trid'),
				type:'get',
				success:function(data){
					$('#mdlInpTitle').html('Edit Detail');
					tinyMCE.get('txtInp').setContent(data);
					$("#mdlInp").modal();
				},
				error:function(err){
					console.log('error',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnEditImage',function(){
			var tr = $(this).stairUp({level:2});
			$('#tMarketPlace tbody tr').removeClass('selected');
			tr.addClass('selected');
			tinymce.activeEditor.getContent();
			$.ajax({
				url:thisdomain+'marketplaces/get/img/'+tr.attr('trid'),
				type:'get',
				success:function(data){
					console.log('data',data);
					$('#imgMarketPlace').attr('src',data);
					$("#mdlImage").modal();
				},
				error:function(err){
					console.log('error',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnRemove',function(){
			var tr = $(this).stairUp({level:2});
			$('#tMarketPlace tbody tr').removeClass('selected');
			tr.addClass('selected');
			$('#mdlConfirm').modal();
		});
		$('#btnRemove').click(function(){
			var tr = $('#tMarketPlace tbody tr.selected');
			$.ajax({
				url:thisdomain+'marketplaces/remove/'+tr.attr('trid'),
				type:'get',
				success:function(data){
					tr.remove();
				},
				error:function(err){
					console.log('error',err);
				}
			});

		});
		$('#btnSaveArea').click(function(){
			switch($('#mdlInpTitle').html()){
				case 'Edit Detail':
				console.log('detail invoked');
					$.ajax({
						url:thisdomain+'marketplaces/update',
						data:{id:$('#tMarketPlace tbody tr.selected').attr('trid'),detail:tinyMCE.get('txtInp').getContent()},
						type:'post',
						success:function(data){
							$('#tMarketPlace tbody tr.selected td.mpdetail').html(tinyMCE.get('txtInp').getContent());
							console.log('data',data);
						},
						error:function(err){
							console.log('error',err);
						}
					});
				break;
				case 'Edit Preview':
				console.log('preview invoked');
					$.ajax({
						url:thisdomain+'marketplaces/update',
						data:{id:$('#tMarketPlace tbody tr.selected').attr('trid'),preview:tinyMCE.get('txtInp').getContent()},
						type:'post',
						success:function(data){
							$('#tMarketPlace tbody tr.selected td.mppreview').html(tinyMCE.get('txtInp').getContent());
							console.log('data',data);
						},
						error:function(err){
							console.log('error',err);
						}
					});				
				break;
			}
		});
		$('#btnSaveImg').click(function(){
			$.ajax({
				url:thisdomain+'marketplaces/update',
				data:{id:$('#tMarketPlace tbody tr.selected').attr('trid'),img:$('#imgMarketPlace').attr('src')},
				type:'post',
				success:function(){
					$('#tMarketPlace tbody tr.selected td.mpimg img').attr('src',$('#imgMarketPlace').attr('src'));
				}
			});
		});
		$('.closeModal').click(function(){
			$(this).stairUp({level:4}).modal('hide');
		});
		var tmarketplaces = $('#tMarketPlace').dataTable();
    });
