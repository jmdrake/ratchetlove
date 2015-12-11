<?php
class Home extends CI_Controller
{
    public function index()
    {
        if($this->input->post('submit'))
        {
        $email=$this->input->post('email');
        $zip=$this->input->post('zip');
        $looking=$this->input->post('looking');
        $age=$this->input->post('age');
//        $agree=$this->input->post('agree');

            $ses_data=array(
                'email'=>$email,
                'zip'=>$zip,
                'looking'=>$looking,
                'age'=>$age,

                            );
            $this->session->set_userdata($ses_data);
//            if($this->session->userdata('login_status')!=0)
//            {
//           redirect('home/search_result');
//            }
//            else
//            {
//                redirect('login');
//            }
            redirect('register');
        }
        $this->load->view('index');
    }
    public function search_result()
    {
        $looking=$this->session->userdata('looking');
        $age=$this->session->userdata('age');
        $data['fetch']=$this->site_common->search($looking,$age);
        $this->load->view("header");
        $this->load->view("search_result",$data);
        $this->load->view("footer");
    }
}
