$(document).ready(function() {
	$('#dataTables-example').DataTable({
			responsive: true
	});
	$("#btnAddBook").click(function(){
		$("#mdlAddBook").modal();
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
	$('#btnSaveBook').click(function(){
		var actions = '';
		actions+='<button type="button" class="btn btn-default btnEditTitle">';
		actions+='	<i class="fa fa-edit fa-fw"></i> Edit Title';
		actions+='</button>';
		actions+='<button type="button" class="btn btn-default btnEditPreview">';
		actions+='	<i class="fa fa-edit fa-fw"></i> Edit Preview';
		actions+='</button>';
		actions+='<button type="button" class="btn btn-default btnEditDescription">';
		actions+='	<i class="fa fa-edit fa-fw"></i> Edit Description';
		actions+='</button>';
		actions+='<button type="button" class="btn btn-default btnEditImage">';
		actions+='	<i class="fa fa-edit fa-fw"></i> Edit Image';
		actions+='			</button>';
		actions+='<button type="button" class="btn btn-default btnRemove">';
		actions+='<i class="fa fa-remove fa-fw"></i> Remove';
		actions+='</button>';
		$.ajax({
			url:thisdomain+'books/save',
			data:{
				title:$('#txttitle').val(),
				authors:$('#txtauthor').val(),
				category:$('#txtcategory').val(),
				suggester:$('#txtsuggester').val(),
				description:tinyMCE.get('txtdescription').getContent(),
				img:$('#imgLogo').attr('src')
				},
			type:'post',
			success:function(data){
			newRow = tbooks.fnAddData([$('#txttitle').val(), $('#txtauthor').val(), tinyMCE.get('txtdescription').getContent(), '<img src='+$('#imgLogo').attr('src')+' />', actions]);
			var row = tbooks.fnGetNodes(newRow);
			$(row).attr('trid', data);
				var nTr = tbooks.fnSettings().aoData[newRow[0]].nTr;
				var nTds = $('td', nTr);
				nTds.eq(1).addClass('mptitle');
				nTds.eq(1).addClass('mpauthor');
				nTds.eq(3).addClass('mpdescription');
				nTds.eq(4).addClass('mpimg');
				console.log('data',data);
			},
			error:function(err){
				console.log('err',err);
			}
		});
	});
	$('#tBook').on('click','.btnEditTitle',function(){
		var tr = $(this).stairUp({level:2});
		$('#tBook tbody tr').removeClass('selected');
		tr.addClass('selected');
		$.ajax({
			url:thisdomain+'books/get/title/'+tr.attr('trid'),
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
	$('#tBook').on('click','.btnEditPreview',function(){
		var tr = $(this).stairUp({level:2});
		$('#tBook tbody tr').removeClass('selected');
		tr.addClass('selected');
		tinymce.activeEditor.getContent();
		$.ajax({
			url:thisdomain+'books/get/preview/'+tr.attr('trid'),
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
	$('#tBook').on('click','.btnEditDetail',function(){
		var tr = $(this).stairUp({level:2});
		$('#tBook tbody tr').removeClass('selected');
		tr.addClass('selected');
		tinymce.activeEditor.getContent();
		$.ajax({
			url:thisdomain+'books/get/detail/'+tr.attr('trid'),
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
	$('#tBook').on('click','.btnEditImage',function(){
		var tr = $(this).stairUp({level:2});
		$('#tBook tbody tr').removeClass('selected');
		tr.addClass('selected');
		tinymce.activeEditor.getContent();
		$.ajax({
			url:thisdomain+'books/get/img/'+tr.attr('trid'),
			type:'get',
			success:function(data){
				console.log('data',data);
				$('#imgBook').attr('src',data);
				$("#mdlImage").modal();
			},
			error:function(err){
				console.log('error',err);
			}
		});
	});
	$('#tBook').on('click','.btnRemove',function(){
		var tr = $(this).stairUp({level:2});
		$('#tBook tbody tr').removeClass('selected');
		tr.addClass('selected');
		$('#mdlConfirm').modal();
	});
	$('#btnRemove').click(function(){
		var tr = $('#tBook tbody tr.selected');
		$.ajax({
			url:thisdomain+'books/remove/'+tr.attr('trid'),
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
					url:thisdomain+'books/update',
					data:{id:$('#tBook tbody tr.selected').attr('trid'),detail:tinyMCE.get('txtInp').getContent()},
					type:'post',
					success:function(data){
						$('#tBook tbody tr.selected td.mpdetail').html(tinyMCE.get('txtInp').getContent());
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
					url:thisdomain+'books/update',
					data:{id:$('#tBook tbody tr.selected').attr('trid'),preview:tinyMCE.get('txtInp').getContent()},
					type:'post',
					success:function(data){
						$('#tBook tbody tr.selected td.mppreview').html(tinyMCE.get('txtInp').getContent());
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
			url:thisdomain+'books/update',
			data:{id:$('#tBook tbody tr.selected').attr('trid'),img:$('#imgBook').attr('src')},
			type:'post',
			success:function(){
				$('#tBook tbody tr.selected td.mpimg img').attr('src',$('#imgBook').attr('src'));
			}
		});
	});
	$('.closeModal').click(function(){
		$(this).stairUp({level:4}).modal('hide');
	});
	var tbooks = $('#tBook').dataTable();
});
