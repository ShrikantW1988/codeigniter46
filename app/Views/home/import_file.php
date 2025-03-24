		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
                                Excel Import With Custom Import Class.
							</h4>							
						</div>						
					</div>					
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<!-- Basic datatable -->
					<div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Import Excel File</h5>                            
                        </div>
						<div class="card-body">   
                            <form action="#" id="form">
								<fieldset>
									<div class="row mb-3">
										<label class="col-lg-3 col-form-label">Upload File:</label>
										<div class="col-lg-9">
											<input type="file" class="form-control error_flag" name="file" id="file">
											<div class="form-text text-muted">Accepted formats: excel, Max file size 2Mb</div>
										</div>
									</div>
								</fieldset>	
									
								</fieldset>
								<div class="text-end">
									<button type="submit" class="btn btn-primary">Import</button>
								</div>
							</form>                     
						</div>						
					</div>
					<!-- /basic datatable -->

				</div>
				<!-- /content area -->              


<?php echo view('layout/limitless/common_js.php') ?>	

<script>
$(document).ready(function()
{
    var idArray = [];

        $('.error_flag').each(function() {
            idArray.push(this.id);
        });

    $("#form").on('submit', function(e) {
            e.preventDefault();  
            
            // Submit the form data to the server using jQuery AJAX
            $.ajax({
                url: "<?=BASE_URL?>Home/file_import_action",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {  },
                success: function(data) 
                {
                    var objJSON = JSON.parse(data);
                    if (objJSON.status == "error") 
                    { 
                        //$("#login_btn").attr("disabled", false);

                            var obj =objJSON.errors;

                            idArray.forEach(function(item) 
                            { 
                                if(item in obj ) 
                                {
                                    if (!$("#"+item).hasClass("is-invalid") && obj[item]!="")
                                    {
                                        $("#"+item).addClass("is-invalid");
                                        $("#"+item).after('<div class="invalid-feedback '+item+'">'+obj[item]+'</div>');
                                    } 

                                    else if($("#"+item).hasClass("is-invalid") && obj[item]!="")
                                    {                                 

                                        $("."+item).html(obj[item]);
                                    }

                                    else if(!$("#"+item).hasClass("is-invalid") && obj[item]=="")
                                    {

                                        $("#"+item).removeClass("is-invalid");
                                        $("div."+item).remove();
                                    } 
                                }
                                else
                                { 

                                    $("#"+item).removeClass("is-invalid");
                                    $("div."+item).remove();

                                    $("#"+item).addClass("is-valid");
                                }
                            });
                    } 
                    else if (objJSON.status == "success")
                    {
                        swalInit.fire({ title: 'Saved!', text: objJSON.msg, icon: 'success'});  
                        $('#form').trigger("reset");
                        
                    } 
                    else if (objJSON.status == "fail")
                    { 
                        swalInit.fire({title: "Error!", text: objJSON.msg, icon: "error"}).then(function() 
                        {  
                             //location.reload(); 
                        }); 
                    }  
                },

                error: function(e) {   }  
            });
        });     

   
});
</script>