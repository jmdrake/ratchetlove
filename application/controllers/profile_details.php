<?php
class Profile_details extends CI_Controller
{

    public function index()
    {
		$owner=$this->session->userdata('userid');
        $userid=$this->input->get('id');
		$time=date("h:i:sa");
		$this->load->model('site_common');

        $table1="ratchet_register";
        $table2="ratchet_profile";
		
        $data4=$this->site_common->selectimage($table2,$owner);
		$data5=$this->site_common->selectimage($table2,$userid);
		//print_r('data4');
		//exit;
        $this->load->model('site_common');
		 $data2=array(
            'owner'=>$owner,
            'whoview'=>$userid,
            'time'=>$time,
			'ownerimg'=>$data4['image'],
			'viewimg'=>$data5['image']
        );
		$data3=$this->site_common->selectview('ratchet_view',$owner,$userid);
		$count=count($data3);
		if($count==0)
		{
		$this->site_common->insert2('ratchet_view',$data2);
		}else
		{
			$id=$data3['viewid'];
			$this->site_common->update2('ratchet_view',$id,$data2);
		}
        $data['profileinfo']=$this->site_common->getjoins($table1,$table2,$userid);
		 $table = "ratchet_register";
		 $data['fetch2']= $this->site_common->get2($table, $userid);

        $this->load->view('header');
        $this->load->view('profile_details1',$data);
        $this->load->view('footer');

    }
    function send_message()
    {
        $msg= $this->input->post('msg');
        $data=array(
            'from_id'=>$this->session->userdata('userid'),
            'to_id'=>$this->uri->segment(3),
            'message'=>$msg
        );
        $result=$this->site_common->insert('ratchet_messages',$data);
        if($result)
        {
            redirect('messages');
        }
    }
}
?>