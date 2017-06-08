// JavaScript Document

$(document).ready(function(){
	
	/* Data Insert Starts Here */
	$(document).on('submit', '#emp-SaveForm', function() {
	  
	   $.post("../control/Claboral.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>').show(200).delay(2500).hide(200);
			     $("#emp-SaveForm")[0].reset();
		     });	
		 });   
	     return false;
    });
	/* Data Insert Ends Here */
	
	
	/* Data Delete Starts Here */
	$(".delete-link").click(function()
	{
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		if(confirm('Desea Eliminar Este Fila: ID = ' +del_id))
		{
			$.post('delete.php', {'del_id':del_id}, function(data)
			{
				parent.fadeOut('slow');
			});	
		}
		return false;
	});
	/* Data Delete Ends Here */
	
	/* Get Edit ID  */
	$(".edit-link").click(function()
	{
		var id = $(this).attr("id");
		var edit_id = id;
		if(confirm('Desea Modificar Este ID = ' +edit_id))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('edit_form.php?edit_id='+edit_id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */
	
		$(".primp-link").click(function()
	{
		var id = $(this).attr("ID");
		var edit_idConvocatoria = id; 
		if(confirm('Desea Modificar Este ID = ' +edit_idConvocatoria))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('reportecurriculum.php?edit_idConvocatoria='+edit_idConvocatoria);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	
	/* Update Record  */
	$(document).on('submit', '#emp-UpdateForm', function() {
	 
	   $.post("update.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>').show(200).delay(2500).hide(200);
			     $("#emp-UpdateForm")[0].reset();
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					window.location.href="cargo.php";
				 });				 
		     });	
		});   
	    return false;
    });
	/* Update Record  */
});
