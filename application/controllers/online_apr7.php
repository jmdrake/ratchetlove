<?php
class Online extends CI_Controller
{
    function __construct() {
        parent::__construct();

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
        $data['fetch']=$this->site_common->online($sid);
        $this->load->view("header");
        $this->load->view("online",$data);
        $this->load->view("footer");

    }
}
?>