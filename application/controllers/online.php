<?php
class Online extends CI_Controller
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
        $gender=$this->session->userdata('gender');

        if($sid==null)
        {
            $sid=0;
        }
        $data['fetch']=$this->site_common->online($sid,$gender);
        $this->load->view("header");
        $this->load->view("online",$data);
        $this->load->view("footer");

    }
}
?>