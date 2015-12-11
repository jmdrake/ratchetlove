<?php
class Date_night extends CI_Controller
{
    function __construct() {
        parent::__construct();
        if($this->session->userdata('userid')==null)
        {
            redirect('login');
        }


    }
	
	public function index()
    {
      
        $this->load->model('site_common');
       $id=$this->session->userdata('userid');
	   //echo $id; die;
			$result=$this->db->query("select * from  ratchet_register where id='".$id."' and upgrade='1' ");
			 $count =  $result->num_rows();
       // $this->load->view('header');
	  // echo $count;die;



        $data['fetch']=$this->site_common->invited($id);
        $data['fetch2']=$this->site_common->accepted($id);

	  if($count==0)
	  {
      $this->load->view('upgrade_test');
	  }
	  else
	  {
          $this->load->view('header_min');
          $this->load->view('date_night',$data);
          $this->load->view('footer');    
                    		   
	  }
       // $this->load->view('footer');

    }
	public function pagination(){
        $id=$this->session->userdata('userid');
        $gender=$this->session->userdata('gender');

        $page_number = $this->input->post('page_number');
        $item_par_page = 3;
        $position = ($page_number*$item_par_page);
        $result_set = $this->db->query("SELECT * FROM ratchet_profile INNER JOIN ratchet_register ON ratchet_profile.uid=ratchet_register.id where date_night=1 and ratchet_register.gender!='$gender' and ratchet_register.id!=".$id." LIMIT ".$position.",".$item_par_page);

        $total_set =  $result_set->num_rows();
        $page =  $this->db->get('ratchet_profile');
        $total =  $page->num_rows();
        //break total recoed into pages
        $total = ceil($total/$item_par_page);
        if($total_set>0){
            $entries = null;
            // get data and store in a json array
            foreach($result_set->result() as $row){
                $entries[] = $row;
            }
            $data = array(
                'TotalRows' => $total,
                'Rows' => $entries
            );

            $this->output->set_content_type('application/json');
            echo json_encode(array($data));
        }
        exit;

    }
    public function tab_view()
    {
        $id=$this->input->post("u_id");

        $this->load->model('site_common');
        $data['uid']=$id;

        $datas=$this->site_common->select_where('ratchet_profile',$data);

        $this->output->set_content_type('application/json');
        echo json_encode($datas);

    }
    public function invite()
    {
        $this->load->model('site_common');
        $insert['uid']=$this->input->post('uid');
        $insert['place']=$this->input->post('place');
        $insert['d_time']=$this->input->post('time');
        $insert['date']=$this->input->post('date');
        $insert['message']=$this->input->post('message');
        $insert['pid']=$this->input->post('pid');
        $insert['type']=$this->input->post('type');
        $this->site_common->insert('date_night',$insert);


    }
    public function accept()
    {
        $this->load->model('site_common');
        $id=$this->input->post('uid');
        $update['accept']=1;
        $update['status']=1;
        $this->site_common->update('date_night',$id,$update);
    }
    public function reject()
    {
        $this->load->model('site_common');
        $id=$this->input->post('uid');
        $update['accept']=0;
        $update['status']=1;
        $this->site_common->update('date_night',$id,$update);
    }

    public function inv_action()
    {
        $this->load->model('site_common');
        $id=$this->input->post('uid');

        if(isset($_POST['accept']))
        {
            $update['accept']=1;
            $update['status']=1;
            $this->site_common->update('date_night',$id,$update);
            redirect('date_night');
        }
        if(isset($_POST['reject']))
        {
            $update['accept']=0;
            $update['status']=1;
            $this->site_common->update('date_night',$id,$update);
            redirect('date_night');
        }
    }
	
}
?>