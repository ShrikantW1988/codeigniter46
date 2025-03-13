

  
   
        
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Codeigniter 4.6  with PHP 8.1+ (including 8.4).</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Sample Page</li>
                  </ol>
                </div>
               
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid ">
          <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Zero Configuration</h5>
                    <button class="btn btn-primary btn-sm btn_new">New</button>  
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic">
                        <thead class="bg-primary">
                          <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Mobile</th>
                            <th>DOB</th>
                            <th>City</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>    
        
        <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Employee Form</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="form" >  
                    <input type="hidden" id="mode" name="mode" value="add">
                    <input type="hidden" id="id" name="id" >
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
                                    <input class="datepicker-here form-control digits error_flag" type="text" data-language="en" data-bs-original-title="" title="" id="dob" name="dob" autocomplete="off">								
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
									<input type="text" name="active_range" class="form-control date error_flag" id="active_range" data-toggle="date-picker" data-cancel-class="btn-warning" autocomplete="off">
								</div>

								<div class="col-sm-6">
									<label class="form-label">Technical Skills</label>
									<select name="technical_skills[]"  id="technical_skills" class="js-example-basic-single col-sm-12 error_flag" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
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
								<div class="col-sm-4">
									<label class="form-label">City</label>
									<input type="text" placeholder="" class="form-control error_flag" name="city" id="city">
								</div>

								<div class="col-sm-4">
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

								<div class="col-sm-4">
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
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-secondary" type="submit">Save</button>
                    </div> 
				</form>
                    
                </div>
            </div>
        </div>

        <?php echo view('layout/viho/common_js.php') ?>	

<script>
$(document).ready(function()
{     
   var table =  $('#basic').DataTable({
        "pageLength": 10,    
        'processing': true,
        'serverSide': true,
        'order': [[0, 'desc']],
        //"lengthChange": false,
        'serverMethod': 'POST',
        'ajax': {
            'url':'<?=BASE_URL?>Home5/test2ListAjax'
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

    $("#active_range").daterangepicker({
            parentEl: "#myModal .modal-body",
            
            autoApply: true,      // Automatically apply the selected date
            locale: {
                format: 'DD-MM-YYYY' // Set your desired date format
            }            
        });

    $('#active_range').val(''); 
    
    $(".js-example-basic-multiple").select2();

    $(document).on('click','.btn_new',function()
    {   
        clear_validation();
        $("#technical_skills").val('').trigger('change');
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
        url: "<?=BASE_URL?>Home5/form_action",
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
                swal({ title: 'Saved!', text: objJSON.msg, icon: 'success'});  
                $('#form1').trigger("reset");
                table.draw();
            } 
            else if (objJSON.status == "fail")
            { 
                swal({title: "Error!", text: objJSON.msg, icon: "error"}).then(function() 
                {  
                     //location.reload(); 
                }); 
            }  
        },

        error: function(e) {   }  
    });
}); 

$(document).on('click','.btn_edit',function()
{   
    $('#mode').val('edit');
    $('#form').trigger("reset");
    //$("#technical_skills").empty().trigger('change')
    $("#technical_skills").val('').trigger('change');
    var id = $(this).data('id');
    $('#id').val(id);
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
        url: '<?=BASE_URL?>Home5/fetchData',
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
                //$('#technical_skills').val(['Java','C']).trigger('change');     
                $('#technical_skills').val(objJSON.row.skills_array).trigger('change');
                $('#active_range').val(objJSON.row.active_range);                      
            }                    
        },
        error: function(data) {
            alert("some Error");
        }
    });
}


$(document).on('click','.btn_delete',function()
{
    var id = $(this).data('id');  
    var csrfName = '<?= csrf_token() ?>';
    var csrfHash = '<?= csrf_hash() ?>';

    swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) 
            {
                $.ajax({
                            type: "POST",
                            url: '<?=BASE_URL?>Home/delete',
                            data: { id:id,[csrfName]:csrfHash},
                            success: function(data) {
                                var objJSON = JSON.parse(data);
                                if(objJSON.status == "success") 
                                {
                                    swal({ title: 'Deleted!', text: objJSON.msg, icon: 'success'}).then(function()
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
            else 
            {
                //swal("Your imaginary file is safe!");
            }
        });
}); 

       

function clear_validation()
{
    idArray.forEach(function(item) {
        if ($("#" + item).hasClass("is-invalid")) {
            $("#" + item).removeClass("is-invalid");
            $("div." + item).remove();
        }
    });
}
   
});
</script>