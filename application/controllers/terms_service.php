<?php
class Terms_service extends CI_Controller
{

	public function index()
    {
		
		$this->load->view("header2");
        $this->load->view("terms_service");
       $this->load->view("footer");

    }


}
?>