<?php
class Viewed_controller extends CI_Controller
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
        $sid=$this->session->userdata('userid');
//        $sid=$this->input->get('id');
        if($sid==null)
        {
            $sid=0;
        }
		
		$owner=$this->session->userdata('userid');
		$data['fetch1']=$this->site_common->select_i_view('ratchet_view',$owner);
		$data['fetch2']=$this->site_common->select_me_view('ratchet_view',$owner);

        $gender=$this->session->userdata('gender');
		
        $data['fetch']=$this->site_common->online($sid,$gender);
        $this->load->view("header");
       $this->load->view('viewed',$data);
        $this->load->view("footer");

    }
	public function upgrade()
	{
		 $id=$this->input->get('id');
		 $data=$this->site_common->gettime('ratchet_view',$id);
		// echo $data['time'];
		 $this->load->view("header");
		 $this->load->view('viewed1',$data);
		$this->load->view("footer");
	}
	public function notupgrade()
	{
		 $this->load->view("header");
		 $this->load->view('viewed2');
		 $this->load->view("footer");
	}
}
?>