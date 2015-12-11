<?php
class Login extends CI_Controller
{
	
	
	
	 public function index($msg=NULL)
	{

		    $data['msg'] = $msg;
			$this->load->view('header_min');
		 	$this->load->view('login',$data);
			$this->load->view('footer');
	
	
	}
	function process()
	{
      
		   
		
			if($this->input->post('btn_submit'))
			{
				//echo "haiii";exit;
				 $uname = $this->input->post('username');
				 $pswrd = $this->input->post('password');
                $md5pwd=md5($pswrd);
                $check=md5('test');

				 $this->load->model('site_common');
				 $result = $this->site_common->checkUser($uname,$pswrd);
				 
				
				if($result == true)
				 {
                     $id=$this->session->userdata('userid');

                     $dt=array(
                         'status'=>1
                     );
                     $this->site_common->update('ratchet_register',$id,$dt);
                     $looking=$this->session->userdata('looking');
                     $age=$this->session->userdata('age');
//                     $data['fetch']=$this->site_common->search($looking,$age);
//                     $this->load->view("header");
//                     $this->load->view("search_result",$data);
//                     $this->load->view("footer");
                    redirect('online');
                 }

            else{
				
               $msg="Invalid user name or password";
			    $this->index($msg);
			    //redirect('login');
            }

				
			}
		
		
    }
    function forgot()
    {
        $this->load->view('header_min');
        $this->load->view('forgot');
        $this->load->view('footer');

    }
    function forgot_action()
    {

        $this->load->library('email');

        $this->load->model('site_common');
        $data=array('email'=>$this->input->post('email'));

        $result 	= $this->site_common->select_where('ratchet_register',$data);


        if(count($result)!=0)
        {

            $to=$result['email'];
            $headers  = "From: Ratchet Love\r\n";
            $headers.= "Content-type: text/html\r\n";
            $message="<html>
     <body><p><span style='font-weight:bold;font-size:15px;color: dodgerblue'> <u>Ratchet Love Account Password Recovery</u></span></p>
								<table width='317' height='176'  border='0'>

                                  <tr>
									<td width='212'><strong>Your Ratchet Love Account Password: </strong></td>
									<td width='215'><strong>".$result['password']."</strong></td>
								  </tr>

								</table>
								</body>
     </html>";


            $subject ="Ratchet Love";
            mail($to,$subject,$message,$headers);

            $dt=array('suc'=>"Please check your email for password.");
            $this->session->set_flashdata($dt);

        redirect('login');
        }
        else
        {
            $data=array('msg'=>"No accounts related with this email.. Try again with another email.");
            $this->load->view('header_min');
            $this->load->view('forgot',$data);
            $this->load->view('footer');
        }

    }


}
?>