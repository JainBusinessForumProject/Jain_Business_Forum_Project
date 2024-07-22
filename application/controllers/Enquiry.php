<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Enquiry_model');
        
    }
	
	
	public function index()
	{
 
        // echo "<pre>";
        // print_r($data);
        $data['alldata']=$this->Enquiry_model->getallenquiry();


		$this->load->view('common/header_view');
		$this->load->view('Enquiry/Enquiry_detailedview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $data['enquirydata']=$this->Enquiry_model->getalldrp();

		$this->load->view('common/header_view');
		$this->load->view('Enquiry/Enquiry_view',$data);
		$this->load->view('common/footer_view');
	

	}

	function insertEnquiry(){
        $Enquiry_Name= $this->input->post('Enquiry_Name'); 
        $Enquiry_Time= $this->input->post('Enquiry_Time'); 
        $Date= $this->input->post('Date'); 
        $Reference_Type= $this->input->post('Reference_Type');
        $Reference_Name= $this->input->post('Reference_Name');
        $Reference_No= $this->input->post('Reference_No'); 
        $Enquiry_Reason= $this->input->post('Enquiry_Reason'); 
       
       
      
     
       $fields=array('Enquiry_Name'=>$Enquiry_Name,
                      'Enquiry_Time'=>$Enquiry_Time,
                      'Date'=>$Date,
                      'Reference_Type'=>$Reference_Type,
                      'Reference_Name'=>$Reference_Name,
                      'Reference_No'=>$Reference_No,
                      'Enquiry_Reason'=>$Enquiry_Reason
                      


                     
                      
        //  'created_date'=>date('Y-m-d H:i:s'),
        //      'created_by'=>1
            );
            $this->Enquiry_model->insertdata($fields);
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