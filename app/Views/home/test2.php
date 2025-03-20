		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
                                Codeigniter 4.6  with PHP 8.1+ (including 8.4).<span class="fw-normal" style="font-size: 14px;;"><br>The initial release was February 24, 2020. The current version is v4.6.0.</span>
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
                            <h5 class="mb-0">Basic Datatable</h5>
                            <button class="btn btn-primary btn_new">New</button>
                        </div>
						<div class="card-body">
                        <table class="table datatable-basic">
							<thead>
								<tr>
									<th>ID</th>
									<th>Full Name</th>
									<th>Mobile</th>
									<th>DOB</th>
									<th>City</th>
									<th >Actions</th>
								</tr>
							</thead>
							<tbody>	
							</tbody>
						</table>
						</div>

						
					</div>
					<!-- /basic datatable -->

				</div>
				<!-- /content area -->


 <!-- Vertical form modal -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">Employee form</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<form id="form" >
                    <input type="hidden" name="mode" value="add">
                    <?= csrf_field() ?>
					<div class="modal-body">
						<div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Full name</label>
									<input type="text" placeholder="" class="form-control error_flag" name="full_name" id="full_name">
								</div>

								<div class="col-sm-6">
									<label class="form-label">Gander</label>
									<div class=" p-1 ">
                                        <div class="d-inline-flex align-items-center me-3">
                                            <input type="radio" class="" name="gander" id="male" value="Male">
                                            <label class="ms-2" for="dr_li_c">Male</label>
                                        </div>

                                        <div class="d-inline-flex align-items-center">
                                            <input type="radio" class="" name="gander" id="female" value="Female">
                                            <label class="ms-2" for="dr_li_u">Female</label>
                                        </div>
									</div>
                                    <input type="hidden" name="" id="gander_error" class="error_flag">
                                   
								</div>
							</div>
						</div>

                        <div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Department </label>
                                    <select class="form-select error_flag" name="dept" id="dept">
                                        <option value="">Please choose an option</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Operations">Operations</option>
                                    </select>									
								</div>
                                <div class="col-sm-6">
									<label class="form-label">DOB </label> 
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="ph-calendar"></i>
                                        </span>
                                        <input class="form-control  datepicker-autohide  error_flag"  name="dob" id="dob" autocomplete="off">	
                                    </div>
								</div>								
							</div>
						</div>

                        <div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Email</label>
									<input type="text"  class="form-control error_flag" name="email" id="email">
									<div class="form-text text-muted">name@domain.com</div>
								</div>

								<div class="col-sm-6">
									<label class="form-label">Mobile</label>
									<input type="text" placeholder=""  class="form-control error_flag" name="mobile" id="mobile">
									<div class="form-text text-muted">8787878787</div>
								</div>
							</div>
						</div>

                        <div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Active Range</label>
									<input type="text"  class="form-control daterange-basic error_flag" name="active_range" id="active_range" autocomplete="off">
								</div>

								<div class="col-sm-6">
									<label class="form-label">Technical Skills</label>
									<select name="technical_skills[]" id="technical_skills" class="form-control   select"  multiple="" tabindex="-1" >
                                        <option value="C++">C++</option>
                                        <option value="C">C</option>
                                        <option value="Java">Java</option>
                                        <option value="ASP">ASP</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Python">Python</option>
                                        <option value="Mysql">Mysql</option>
                                        <option value="SQL Server">SQL Server</option>
                                        <option value="HTML">HTML</option>
                                        <option value="MS Office">MS Office</option>
                                        <option value="Codeigniter">Codeigniter</option>
                                        <option value="Phalcon">Phalcon</option>
                                        <option value="Yii">Yii</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="React">React</option>
                                        <option value="Bootstrap">Bootstrap</option>
                                    </select>
                                    <input type="hidden" name="" id="technical_skills_error" class="error_flag">									
								</div>
							</div>
						</div>

                        <div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">Country</label>
									<input type="search" class="form-control" id="autocomplete_basic" autocomplete="new-search" placeholder="Search country">
								</div>
                                <div class="col-sm-6">
									<label class="form-label">State/Province</label>
									<select class="form-select error_flag" id="state" name="state">
                                        <option value="">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                    </select>
								</div>

							</div>
						</div>

                        <div class="mb-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="form-label">City</label>
									<input type="text" placeholder="" class="form-control error_flag" name="city" id="city">
								</div>							

								<div class="col-sm-6">
									<label class="form-label">ZIP code</label>
									<input type="text" placeholder="" class="form-control error_flag" name="zip_code" id="zip_code">
								</div>
							</div>
						</div>                       	
                       

						<div class="mb-3">
							<div class="row">
								<div class="col-sm-12">
									<label class="form-label">Address</label>
                                    <textarea  class="form-control error_flag" name="address" id="address"></textarea>									
								</div>								
							</div>
						</div>					

						
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit form</button>
					</div>
				</form>
			</div>
		</div>
    </div>
	<!-- /vertical form modal -->               


<?php echo view('layout/limitless/common_js.php') ?>	

<script>
$(document).ready(function()
{
    var table = $('.datatable-basic').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
            },
            
            "lengthMenu": [ [10, 50, 100, 500, -1], [10, 50, 100, 500, "All"] ],
            "pageLength": 10,    
            'processing': true,
            'serverSide': true,
            'order': [[0, 'desc']],
            //"lengthChange": false,
            'serverMethod': 'POST',
            'ajax': {
                'url':'<?=BASE_URL?>Home/test2ListAjax'
            },
            'columns': [
                { data: 'id', orderable: true },
                { data: 'full_name' },
                { data: 'mobile' },
                { data: 'dob' }, 
                { data: 'city' },                
                { data: 'action',orderable: false },
            ]                        
        });

        $(document).on('click','.btn_delete',function()
        {
            var id = $(this).data('id');  
            var csrfName = '<?= csrf_token() ?>';
            var csrfHash = '<?= csrf_hash() ?>'; 

            swalInit.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    }
                }).then(function(result) {
                    if(result.value) 
                    {                       
                        $.ajax({
                            type: "POST",
                            url: '<?=BASE_URL?>Home/delete',
                            data: { id:id,[csrfName]:csrfHash},
                            success: function(data) {
                                var objJSON = JSON.parse(data);
                                if(objJSON.status == "success") 
                                {
                                    swalInit.fire({ title: 'Deleted!', text: objJSON.msg, icon: 'error'}).then(function()
                                    {
                                        table.draw();   
                                    });          
                                }
                            },
                            error: function(data) {
                                alert("some Error");
                            }
                        }); 
                    }
                    else if(result.dismiss === swal.DismissReason.cancel) {}
                });             
        }); 

        $('.select').select2();

         // Basic initialization
        $('.daterange-basic').daterangepicker({
            applyClass: 'btn-success',
            cancelClass: 'btn-danger',
            autoApply: true,      // Automatically apply the selected date
            locale: {
                format: 'DD-MM-YYYY' // Set your desired date format
            }            
        });

        const dpBasicElement = document.getElementById('dob');
        if (dpBasicElement) {
            const dpBasic = new Datepicker(dpBasicElement, {
                container: '#myModal .modal-body',
                buttonClass: 'btn',
                prevArrow: document.dir == 'rtl' ? '&rarr;' : '&larr;',
                nextArrow: document.dir == 'rtl' ? '&larr;' : '&rarr;',
                autohide: true,
                format: 'dd-mm-yyyy',
            
            });
        } else {
            console.error('dpBasicElement not found');
        }      

           // Demo data
           const autocompleteData = [
            "Andorra",
            "United Arab Emirates",
            "Afghanistan",
            "Antigua and Barbuda",
            "Anguilla",
            "Albania",
            "Armenia",
            "Angola",
            "Antarctica",
            "Argentina",
            "American Samoa",
            "Austria",
            "Australia",
            "Aruba",
            "Ã…land",
            "Azerbaijan",
            "Bosnia and Herzegovina",
            "Barbados",
            "Bangladesh"
        ];
         // Basic
         const autocompleteBasic = new autoComplete({
            selector: "#autocomplete_basic",
            data: {
                src: autocompleteData
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: function(event){
                        const selection = event.detail.selection.value;
                        autocompleteBasic.input.value = selection;
                    }
                }
            }
        });

        

      

        $(document).on('click','.btn_edit',function()
        {             
            var id = $(this).data('id');
            clear_validation();
            fetchData(id)
            $('#myModal').modal('show');
        });

        function fetchData(id)
        {              
            var csrfName = '<?= csrf_token() ?>';
            var csrfHash = '<?= csrf_hash() ?>'; 

            $.ajax({
                type: "POST",
                url: '<?=BASE_URL?>Home/fetchData',
                data: {
                    [csrfName]: csrfHash,
                    id: id, 
                },
                success: function(data) {
                    var objJSON = JSON.parse(data);
                    if (objJSON.status == "success") 
                    {
                        $('#full_name').val(objJSON.row.full_name);
                        $('#email').val(objJSON.row.email);
                        $('#mobile').val(objJSON.row.mobile);
                        $('#city').val(objJSON.row.city);
                        $('#zip_code').val(objJSON.row.zip_code);
                        $('#state').val(objJSON.row.state);
                        $('#address').val(objJSON.row.address);
                        $('#dept').val(objJSON.row.dept);  
                        $('#dob').val(objJSON.row.dob);
                        if(objJSON.row.gander == 'Male')
                        {
                            $("#male").prop("checked", true);
                        }
                        else if(objJSON.row.gander == 'Female')
                        {
                            $("#female").prop("checked", true);
                        }                        
                        $('#active_range').val(objJSON.row.active_range); 
                        
                        $('#technical_skills').val(objJSON.row.skills_array).trigger('change');
                        //$('#technical_skills').val(['Java','PHP']).trigger('change');
                    }                    
                },
                error: function(data) {
                    alert("some Error");
                }
            });
        }

        $(document).on('click','.btn_new',function()
        {   
         
            $("#technical_skills").val('').trigger('change');     
            clear_validation();
            $('#form').trigger("reset");          
            $('#myModal').modal('show');
        });

        var idArray = [];

        $('.error_flag').each(function() {
            idArray.push(this.id);
        });

        $("#form").on('submit', function(e) {
            e.preventDefault();  
            
            // Submit the form data to the server using jQuery AJAX
            $.ajax({
                url: "<?=BASE_URL?>Home/form_action",
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
                        $('#myModal').modal('hide'); 
                        swalInit.fire({ title: 'Saved!', text: objJSON.msg, icon: 'success'});  
                        $('#form1').trigger("reset");
                        table.draw();
                    } 
                    else if (objJSON.status == "fail")
                    { 
                        Swal.fire({title: "Error!", text: objJSON.msg, icon: "error"}).then(function() 
                        {  
                             //location.reload(); 
                        }); 
                    }  
                },

                error: function(e) {   }  
            });
        }); 
        
        function clear_validation()
        {
            idArray.forEach(function(item) {
                if ($("#" + item).hasClass("is-invalid")) {
                    $("#" + item).removeClass("is-invalid");
                    $("div." + item).remove();
                }
                if ($("#" + item).hasClass("is-valid")) {
                    $("#" + item).removeClass("is-valid");                   
                }
            });
        }
   
});
</script>