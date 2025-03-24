<?php

namespace App\Controllers;

use App\Libraries\FileUploader;
use App\Libraries\SpreadsheetLibrary;

class Home extends BaseController
{
    public $db, $db2;

    public function __construct()
    {
        $this->db = db_connect();
        $this->db2 = new \App\Libraries\DB();
    } 
    public function index(): string
    {
        return view('welcome_message');
    }
    public function test()
    {

        echo view('layout/limitless/header');
        echo view('layout/limitless/sidebar');
        echo view('home/test');
        echo view('layout/limitless/footer');
    }
    public function test2()
    {
        echo view('layout/limitless/header');
        echo view('layout/limitless/sidebar');
        echo view('home/test2');
        echo view('layout/limitless/footer');
    }
    public function test2ListAjax()
    {

        $post = $_POST;
        $response = $params = array();

        ## Read value

        $draw = $post['draw'];
        $start = $post['start'];
        $rowperpage = $post['length']; // Rows display per page
        $columnIndex = $post['order'][0]['column']; // Column index
        $columnName = $post['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $post['order'][0]['dir']; // asc or desc
        $searchValue = $post['search']['value']; // Search value
        $searchQuery = " ";

        $where = " where 1 ";

        $base_table = " emp e ";

        $select_cols = " e.* "; 

        if($searchValue != '')
        {
            $searchQuery .= $where."  AND 
            ( 
                full_name like ? OR 
                email like ? OR
                mobile like ? OR
                city like ? OR
                dept like ? 
            ) ";

            for($i = 1;$i <= 5;$i++)
            {
                $params[] = "%".$searchValue."%";
            }
        }
        else
        {
            //-----Advanced Search Block-----  
            $searchQuery = $where;
        } 

        ## Total number of records without filtering  

        $main_total_sql = 'SELECT count(id) as count FROM '. $base_table.' '.$searchQuery.' ';  

        $totalRecords = $this->db2->query2($main_total_sql,$params)[0]['count'];  

         ## Total number of record with filtering 

        $sql = 'SELECT count(id) as count FROM '.$base_table.' '.$searchQuery.' ';

        $totalRecordwithFilter = $this->db2->query2($sql,$params)[0]['count'];  

        ## Fetch records 

        $record_sql = 'select '.$select_cols.'  FROM '.$base_table.' '. $searchQuery.'  order by '.$columnName. ' '.$columnSortOrder.' LIMIT '.$rowperpage.' OFFSET '.$start;

        $records = $this->db2->query2($record_sql,$params);
   
        $data = array();  

        foreach($records as $r)
        {           

            //$time = strtotime($r['request_timestamp']);
            //$create_date = date('d-M-y h:i a',$time);
            $status = $action = "";         

            $action = '<button type="button" data-id="'.$r['id'].'" class="btn btn-success btn-sm btn_edit">Edit</button>';
            $action .= '<button type="button" data-id="'.$r['id'].'" class="btn btn-danger btn-sm btn_delete mx-2">Delete</button>';
              
            $data[] = array(

                "id"=>$r['id'],
                "full_name"=>$r['full_name'],
                "mobile"=>$r['mobile'],
                "dob"=>$r['dob'],
                "city"=>$r['city'],
                "dept"=>$r['dept'],
                "action"=>$action,  
            );
        } 

        ## Response

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
            "query" => $searchQuery,
        );
        echo json_encode($response); 
    }
    public function form_action()
    {
        $post = $_POST;

        //pre($post);die;

        $csrfValue = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';  
        if (!verifyCSRFToken($csrfValue) || empty($csrfValue)) 
        { 
           $response['status'] = 'fail';
           $response['msg'] = 'Invalid token !'; 
           die(json_encode($response));
        } 

        //pre($post);
        $technical_skill = "";
        $error = array();
        $response = array();
        if($_POST['full_name'] == "") {  $error['full_name'] = "Enter full name."; } 
        if($_POST['mobile'] == "") {  $error['mobile'] = "Enter mobile no."; } 
        if($_POST['dept'] == "") {  $error['dept'] = "Enter department."; } 
        if($_POST['email'] == "") {  $error['email'] = "Enter email."; } 
        if($_POST['city'] == "") {  $error['city'] = "Enter city."; } 
        if($_POST['dob'] == "") {  $error['dob'] = "Enter dob."; } 
        if($_POST['state'] == "") {  $error['state'] = "Enter state."; } 
        if($_POST['address'] == "") {  $error['address'] = "Enter address."; } 
        if($_POST['zip_code'] == "") {  $error['zip_code'] = "Enter zip code."; } 
        if($_POST['active_range'] == "") {  $error['active_range'] = "Select active range."; }
        if(!isset($_POST['technical_skills']) || $_POST['technical_skills'] == "") {  $error['technical_skills_error'] = "Select technical skills."; }
        if(!isset($_POST['gander'])){  $error['gander_error'] = "Plz select gander"; }
        if(isset($_POST['technical_skills']) && count($_POST['technical_skills']) > 0)
        {
            $technical_skill = implode(',', $_POST['technical_skills']);
        } 

        if($error)
        {
            $response['status'] = 'error';
            $response['errors'] = $error;
        }
        else
        {
            $post['technical_skills'] = $technical_skill;
            $post['dob'] = date("Y-m-d",strtotime($post['dob']));

            if($_POST['mode'] == 'add')
            {
                //pre($post);die;
                unset($post['mode']);
                unset($post['csrf_token']);                
                $id = $this->db2->insert('emp',$post); 
                $response['status'] = 'success';
                $response['msg'] = "Data Saved successfully !"; 
            } 
        }
        die(json_encode($response));
    }
    public function delete()
    {
        $csrfValue = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';  
        if (!verifyCSRFToken($csrfValue) || empty($csrfValue)) 
        { 
           $response['status'] = 'fail';
           $response['msg'] = 'Invalid token !'; 
           die(json_encode($response));
        } 

        $id = $_POST['id'];
        $response = array();
        if(!empty($id))
        {            
            $this->db2->delete('emp', [['id', $id]]);
            $response['status'] = 'success';
            $response['msg'] = "Record deleted successfully !";
            die(json_encode($response));
        } 
    }
    public function fetchData()
    {
        $csrfValue = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';  
        if (!verifyCSRFToken($csrfValue) || empty($csrfValue)) 
        { 
           $response['status'] = 'fail';
           $response['msg'] = 'Invalid token !'; 
           die(json_encode($response));
        } 
        
        $response = array();
        $id = $_POST['id'];
        if(!empty($id))
        {
            $data = $this->db2->table('emp')->where([['id',$id]])->get()->toRowArray();

            $data['dob'] = date("d-m-Y",strtotime($data['dob']));

            $array = explode(',', $data['technical_skills']);
            $data['skills_array'] = $array;

            $response['status'] = 'success';
            $response['row'] = $data;            
        } 
        die(json_encode($response));
    } 
    public function fetchCountries()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");

        $data = $this->db2->table('countries')->get()->toArray();
        $countries = array_column($data,'name');
        //pre($countries);
        echo json_encode($countries);
    }
    public function test1()
    {
        echo view('layout/limitless/header');
        echo view('layout/limitless/sidebar');
        echo view('home/upload_file');
        echo view('layout/limitless/footer');
    }
    public function file_upload_action()
    {
        $res = array();
        //pre($_FILES);
        // Initialize the FileUploader with custom settings
        $uploader = new FileUploader(UPLOAD_PATH, ['image/jpeg', 'image/png'], 2 * 1024 * 1024);

        // Check if a file was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) 
        {
            $file = $_FILES['file'];

            // Attempt to upload the file
            $uploadedFilePath = $uploader->upload($file);

            if ($uploadedFilePath) 
            {
                $res['status'] = 'success';
                $res['msg'] = 'File uploaded successfully. ';
                $res['upload_path'] =  $uploadedFilePath;
                
            } else 
            {
                //echo "File upload failed. Errors: " . implode(', ', $uploader->getErrors());
                $res['status'] = 'error';
                $res['errors'] = array('file' => implode(', ', $uploader->getErrors()));                
            }
        }

        die(json_encode($res));
    }
    public function test3()
    {
        echo view('layout/limitless/header');
        echo view('layout/limitless/sidebar');
        echo view('home/import_file');
        echo view('layout/limitless/footer');
    }
    public function file_import_action()
    {       
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $file = $_FILES['file'];
        //pre($file);die;

        $allowedTypes = array('xlsx','xls', 'xlsx'); // Allowed file extensions

        $filename = $_FILES['file']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (empty($file['name'])) 
        {           
            $res['status'] = 'error';
            $res['errors'] = array('file' => 'File upload error: Plz upload file.');           
        }
        elseif (!in_array($ext, $allowedTypes)) 
        {
            $res['errors'] = array('file' => "Invalid file type. Allowed types are: " . implode(', ', $allowedTypes));            
        }
        else
        {

            //pre(UPLOAD_PATH);die;
            //----upload file-----
            $uploader = new FileUploader(UPLOAD_PATH.'excel/',  ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'], 2 * 1024 * 1024);
            $uploadedFilePath = $uploader->upload($file);

            if ($uploadedFilePath) 
            {
                $lib = new SpreadsheetLibrary();

                if($lib->isEmpty(($uploadedFilePath)) == 0)
                {
                    $data = $lib->loadSpreadsheetData($uploadedFilePath);
                    //pre($data);die;

                    foreach($data[1] as $c)
                    {
                        if(!empty($c))
                        {
                            $excel_cols[] = trim($c);
                        }                        
                    }                   

                    if($excel_cols[0] == 'Name' && $excel_cols[1] == 'Surname' && $excel_cols[2] == 'Email' && 
                        $excel_cols[3] == 'Mobile' && $excel_cols[4] == 'City' && $excel_cols[5] == 'State' &&
                        $excel_cols[6] == 'Country' && $excel_cols[7] == 'Roll No' && $excel_cols[8] == 'Branch' &&
                        $excel_cols[9] == 'DOB' && $excel_cols[10] == 'Gander' && $excel_cols[11] == 'Pincode')
                    {
                        //--column headers are ok---
                       
                        $i = 0;
                        $table_data = array();

                        foreach($data as $d)
                        {
                            $i++;
                            if($i == 1){ continue; }
                            $row = array();
                            $row['name'] = $d['A'];
                            $row['surname'] = $d['B'];
                            $row['email'] = $d['C'];
                            $row['mobile'] = $d['D'];
                            $row['city'] = $d['E'];
                            $row['state'] = $d['F'];
                            $row['country'] = $d['G'];
                            $row['roll_no'] = $d['H'];
                            $row['branch'] = $d['I'];
                            $row['dob'] = $d['J'];
                            $row['gander'] = $d['K'];
                            $row['pincode'] = $d['L']; 

                            //----row level validation----

                            $table_data[] = $row;
                        }                         

                        pre($table_data);die;

                    }
                    else
                    {
                        $res['status'] = 'fail';
                        $res['msg'] = 'Invalid excel headers!';
                    } 

                }
                else
                {
                    $res['status'] = 'fail';
                    $res['msg'] = 'No data found in excel!';
                }               
                                   
            }          
            
            //$spreadsheet = $lib->loadSpreadsheet($file['tmp_name']);
            //$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);                       
        }

        die(json_encode($res));
    }
}
