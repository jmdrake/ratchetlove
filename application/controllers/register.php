<?php
class Register extends CI_Controller
{

    public function index()
    {

        if($this->input->post("submit"))
        {
            $fname=$this->input->post("first_name");
            $lname=$this->input->post("last_name");
			$city=$this->input->post("city"); 
			$state=$this->input->post("state"); 
            $country=$this->input->post("country");
			//md5($this->input->post("password"))
            //$user=$this->input->post("user");
			$zip=$this->input->post("zip");
//            $register=$this->input->post("register");
            $gender=$this->input->post("gender");
            $looking=$this->input->post("looking");
			$age=$this->input->post("age");
            $ethnicity=$this->input->post("ethnicity");
			$username=$this->input->post("username");
			$pass=$this->input->post("password");
            $email=$this->session->userdata('email');
            $pass_md5=md5($pass);
            $data=array('first_name'=>$fname,'last_name'=>$lname,'city'=>$city,'state'=>$state,'country'=>$country,'zip'=>$zip,'looking_for'=>$looking,'gender'=>$gender,'ethnicity'=>$ethnicity,'username'=>$username,'password'=>$pass,'age'=>$age,'email'=>$email);
            $this->load->model("site_common");
            $insert=$this->site_common->insert('register',$data);
//			 $e = $this->input->post('username');
//				 $p = $this->input->post('password');
//
//				 $this->load->model('site_common');
//				 $result = $this->site_common->checkUser($e,$p);
				//echo $result;die;
//			 if (!empty($result))
//				 {
					// echo "message";
//               $this->session->set_userdata(array('mail'=>$result['email'],'id'=>$result['accountId']));
//redirect('login');
//die;
              
//            }

//            else{
				
//			}
            if($insert)
            {
				$registerid=array('userid'=>$insert);
			    $this->session->set_userdata($registerid);
                redirect('profile');

            }
//		   redirect('login');

        //}

    }

        $this->load->view("header2");
        $this->load->view("register");
       $this->load->view("footer");

    }


}
?>