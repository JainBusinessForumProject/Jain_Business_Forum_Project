<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('Teacher_model');
        
    }
	
	
	public function index()
	{
 
         
        $data['alldata'] = $this->Teacher_model->getallteacher();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('teacher/TeacherDetailsview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['Qualification'] = $this->Teacher_model->getallQualification();
        $data['Experience'] = $this->Teacher_model->getallExperience();

		$this->load->view('common/header_view');
		$this->load->view('teacher/Teacher_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertTeacher(){
        $FullName= $this->input->post('FullName'); 
        $Address= $this->input->post('Address'); 
        $JoinDate= $this->input->post('JoinDate'); 
        $EndDate= $this->input->post('EndDate');
        $Qualification= $this->input->post('Qualification');
        $Experience= $this->input->post('Experience'); 
        $DateOB= $this->input->post('DateOB'); 
        $Mobile= $this->input->post('Mobile');
        $Gender= $this->input->post('Gender');
       
      
     
       $fields=array('FullName'=>$FullName,
                      'Address'=>$Address,
                      'JoinDate'=>$JoinDate,
                      'EndDate'=>$EndDate,
                      'Qualification'=>$Qualification,
                      'Experience'=>$Experience,
                      'DateOB'=>$DateOB,
                      'Mobile'=> $Mobile,
                      'Gender'=> $Gender,


                     
                      
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Teacher_model->insertdata($fields);
         echo json_encode($fields);
    //  $this->Teacher_model->insertRecord("teacherdetails",$fields);
   } 
   public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Teacher_model->getbyid($id);

        //   echo "<pre>";
        //   print_r($data);
        
      
          $this->load->view('common/header_view');
		$this->load->view('teacher/Teacher_view',$data);
		$this->load->view('common/footer_view');
   }
   public function updateTEACHER()
	{
        $Id  = $this->input->post('Id');
        $FullName= $this->input->post('FullName'); 
        $Address= $this->input->post('Address'); 
        $JoinDate= $this->input->post('JoinDate'); 
        $EndDate= $this->input->post('EndDate');
        $Qualification= $this->input->post('Qualification');
        $Experience= $this->input->post('Experience'); 
        $DateOB= $this->input->post('DateOB'); 
        $Mobile= $this->input->post('Mobile');
        $Gender= $this->input->post('Gender');  
       

       
        $fields=array(
                      'Id'=>$Id ,
                      'FullName'=>$FullName,
                      'Address'=>$Address,
                      'JoinDate'=>$JoinDate,
                      'EndDate'=>$EndDate,
                      'Qualification'=>$Qualification,
                      'Experience'=>$Experience,
                      'DateOB'=>$DateOB,
                      'Mobile'=> $Mobile,
                      'Gender'=>$Gender
                   
                    );
	    $this->Teacher_model->update($fields);
	}

   
  
	
	
}

// <?php  
// class Patient extends CI_Controller
// {
// 	public function __construct()
// 	 {		
// 		parent::__construct();
// 		if($this->session->userdata('userId')==0)
// 		{
// 		redirect('Login');
// 		}
// 		$this->load->model('Model_Patient');	
// 	} 

// 	public function index()
// 	{
// 		$data['data']=$this->Model_Patient->getallpatient();
// 		// echo "<pre>";
// 		// print_r($data);
// 		$this->load->view("common/header");
// 		$this->load->view("admin/patient/Patient_Detailsview",$data);
// 		$this->load->view("common/footer");
// 	}

// 	public function create()
// 	{
// 		$this->load->view("common/header");
// 		$this->load->view("admin/patient/Patient_view");
// 		$this->load->view("common/footer");
// 	}
// 	function insertPATIENT(){
// 		$memberId = $this->input->post('memberId');
// 		$MEMBER_NAME= $this->input->post('MEMBER_NAME');
// 		$REGI_DATE= $this->input->post('REGI_DATE'); 
// 		$MEMBER_ADD= $this->input->post('MEMBER_ADD'); 
// 		$MEMBER_EMAIL= $this->input->post('MEMBER_EMAIL'); 
// 		$SEX= $this->input->post('gender');
// 		$MOBILE_NO= $this->input->post('MOBILE_NO'); 
// 		$BLOOD= $this->input->post('BLOOD'); 
// 		$AGE= $this->input->post('AGE'); 
// 		// $DESCRIPTION= $this->input->post('DESCRIPTION');
	
// 		 $fields=array(
// 						'memberId '=>$memberId,
// 						'MEMBER_NAME'=>$MEMBER_NAME,
// 						'REGI_DATE'=>$REGI_DATE,
// 						'MEMBER_ADD'=>$MEMBER_ADD,
// 						'MEMBER_EMAIL'=>$MEMBER_EMAIL,
// 						'SEX'=>$SEX,
// 						'MOBILE_NO'=>$MOBILE_NO,
// 						'BLOOD'=>$BLOOD,
// 						'AGE'=>$AGE
// 						// 'DESCRIPTION'=>$DESCRIPTION
						
						
// 			//    'created_date'=>date('Y-m-d H:i:s'),
// 			// 	   'created_by'=>1
// 		   );
// 		   $this->Model_Patient->insertdata($fields);
// 	} 
// }