

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Datatables</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Alerts</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xl-6"><h4 class="card-title">Default Datatable</h4></div>
                        <div class="col-xl-6">
                        <div class="button-items text-right">
                            <button type="button" class="btn btn-primary btn-sm btn_new"> New Record</button>
                            <button type="button" class="btn btn-secondary btn-sm"> Button</button>
                            <button type="button" class="btn btn-info btn-sm"> Button</button>
                            <button type="button" class="btn btn-dark btn-sm"> Button</button>
                            <button type="button" class="btn btn-warning btn-sm"> Button</button>                        
                        </div>
                        </div>
                    </div>                                      
                    

                    <table id="datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Mobile</th>
                            <th>DOB</th>
                            <th>Department</th>
                            <th>City</th>
                            <th >Actions</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        </tbody>
                    </table>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
                                
    
</div> <!-- container-fluid -->


<!--  Extra Large modal example -->
<div id="myModal" class="modal fade" tabindex="-1"  role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form">
                <input type="hidden" id="mode" name="mode" value="add">
                <input type="hidden" id="id" name="id" >
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Employee Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">Full Name</label>
                                <input type="text" class="form-control error_flag" id="full_name" name="full_name">                            
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block mb-3">Gender :</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  name="gander" class="custom-control-input" id="male" value="Male">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="gander" class="custom-control-input" id="female" value="Female">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                            
                            <input type="hidden" name="" id="gander_error" class="error_flag">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">Department</label>
                                <select class="form-control error_flag" name="dept" id="dept">
                                    <option value="">Please choose an option</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Operations">Operations</option>
                                </select>	                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                                
                                <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label">DOB</label>
                                <input type="text" id="dob" name="dob" class="form-control error_flag" data-date-format="dd M, yyyy" placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-today-highlight="true" data-date-container="#datepicker1" autocomplete="off">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">Active Range</label>
                                <input type="text" name="active_range" class="form-control date error_flag" id="active_range" autocomplete="off">                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom02">Technical Skills</label>
                                <select  name="technical_skills[]"  id="technical_skills" class="select2 form-control select2-multiple " data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control error_flag" id="email" name="email">                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">Mobile</label>
                                <input type="text" class="form-control error_flag" id="mobile" name="mobile">                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control error_flag" id="city" name="city">                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control error_flag" id="state" name="state">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control error_flag" id="zip_code" name="zip_code" >                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="validationCustom03">Address</label>
                                <textarea   name="address" id="address" class="form-control error_flag" rows="3"></textarea>                          
                            </div> 
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="validationCustom03">Publish</label>
                                <div class="d-flex">
                                    <div class="">
                                        <input type="checkbox" id="published" switch="none" name="published" checked >
                                        <label for="published" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    
                                </div>                         
                            </div> 
                        </div>                                               
                    </div>
                                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo view('layout/drezon/common_js.php'); ?>

<script>
$(document).ready(function()
{
    //$("#technical_skills").select2();   

    $(".select2").select2({
        //dropdownParent: $("#myModal"),
         width: '100%'
    });
    $("#active_range").daterangepicker({
            parentEl: "#myModal .modal-body",            
            autoApply: true,      // Automatically apply the selected date
            locale: {
                format: 'DD-MM-YYYY' // Set your desired date format
            }            
        }); 

        $('#active_range').val('');
    
    var table = $("#datatable").DataTable({           
            
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
            { data: 'dept' }, 
            { data: 'city' },                
            { data: 'action',orderable: false },
        ],                                      
    });

    $(document).on('click','.btn_new',function()
    {   
            $("#technical_skills").val('').trigger('change');
            $("#published").prop("checked", false);
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
            url: "<?=BASE_URL?>Home3/form_action",
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
                    Swal.fire({ title: 'Saved!', text: objJSON.msg, icon: 'success'});  
                    $('#form').trigger("reset");
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
        idArray.forEach(function(item) 
        {
            if ($("#" + item).hasClass("is-invalid")) { $("#" + item).removeClass("is-invalid"); $("div." + item).remove(); }
            if ($("#" + item).hasClass("is-valid")) { $("#" + item).removeClass("is-valid"); }
        });
    }

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
                url: '<?=BASE_URL?>Home2/fetchData',
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

                        if(objJSON.row.published == '1')
                        {                           
                            $("#published").prop("checked", true);                           
                        }
                        else if(objJSON.row.published == '0')
                        {
                            $("#published").prop("checked", false);
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

            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#51d28c",
                    cancelButtonColor: "#f34e4e",
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',                   
                   
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
                                    Swal.fire({ title: 'Deleted!', text: objJSON.msg, icon: 'error'}).then(function()
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

       
   
});
</script>
                

                
                

        

       