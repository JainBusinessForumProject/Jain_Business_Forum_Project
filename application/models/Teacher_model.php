<?php
  class Teacher_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      
    public function insertdata($model)
        {
          return $this->db->insert('teacher',$model);
            return $sql->result();
        } 

        
     public function getallteacher()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("teacher.*");
             $this->db->from('teacher');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallQualification()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("teacher_drp.*");
             $this->db->from('teacher_drp');
              $query = $this->db->get();
              return $query->result();
             
     }
     public function getallExperience()
     {      
      // SELECT studId, studentname, phone FROM `student_master`
      
             $this->db->select("teacher_drp2.*");
             $this->db->from('teacher_drp2');
              $query = $this->db->get();
              return $query->result();
             
     }
     
      



      //  public function getdetailview()
      //  {      
        
      //          $this->db->select('teacher.*');
      //          $this->db->from('teacher');
      //           $query = $this->db->get();
      //           return $query->result();
               
      //  }
       
      //  public function getbyid($id)
      //  {
      //    $this->db->select("teacherdetails.*");
      //    $this->db->where('Id',$id);
      //    $query = $this->db->get('teacherdetails');
      //    return $query->result();
      //  }
      //  public function update($model)
      //  {
      //     return $sql = $this->db->where('Id',$model['Id'])->update('teacherdetails',$model); 
      //  } 
}
?>