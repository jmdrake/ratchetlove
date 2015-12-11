<?php
class Messages extends CI_Controller
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
      $data['fetch']=$this->site_common->inbox($sid);
      $data['fetch2']=$this->site_common->send_message($sid);

      $this->load->view("header");
      $this->load->view("messages",$data);
      $this->load->view("footer");
  }

    public function send()
    {
        $this->load->model('site_common');
        $msg=$this->input->post('msg');
        $from_id=$this->session->userdata('userid');
        //$to_id=$this->input->get('id');
		$to_id=$this->input->post('uid');
		
		 $tz_object = new DateTimeZone('America/Los_Angeles');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    $date= $datetime->format('m\-d\-y\ h:i:s');
        $data=array(
            'message'=>$msg,
            'to_id'=>$to_id,
            'from_id'=>$from_id,
			'date_time'=>$date

        );
        $this->site_common->insert('ratchet_messages',$data);
        redirect('messages');

    }
    public function view()
    {
		$loginid=$this->session->userdata('userid');
        $id=$this->input->get('id');

		$msgid=$this->input->get('msgid');
		
		if($loginid==$id)
		{
			$time=date('h:i:s');
			$dt=array('read'=>1,'read_time'=>$time );
			
		    $this->site_common->update('ratchet_messages',$msgid,$dt);
			
		}

        $this->load->model('site_common');
//        if($msgid!=null)
//        {
        $data['fetch']=$this->site_common->message_view($id,$msgid);
//        }
//        else
//        {
//        $data['fetch']=$this->site_common->send_message_view($id);
//        }

        $this->load->view('header');

        $this->load->view('view_message',$data);
        $this->load->view('footer');

    }
    public function view2()
    {
        $loginid=$this->session->userdata('userid');
        $id=$this->input->get('id');
        $msg_id=$this->input->get('msgid');
//        echo $msg_id;
//        $msgid=$this->input->get('msgid');
//
//        if($loginid==$id)
//        {
//            $time=date('h:i:s');
//            $dt=array('read'=>1,'read_time'=>$time );
//
//            $this->site_common->update('ratchet_messages',$msgid,$dt);
//
//        }

        $this->load->model('site_common');

//            $data['fetch']=$this->site_common->message_view($id);

            $data['fetch2']=$this->site_common->send_message_view($id,$msg_id);


        $this->load->view('header');

        $this->load->view('view_message2',$data);
        $this->load->view('footer');

    }
	public function lastonline()
	{
		
		$id=$this->input->get('id');
        $msg_id=$this->input->get('msgid');

        	$this->load->model('site_common');
//        $data['fetch']=$this->site_common->message_view($id);
        $data['fetch2']=$this->site_common->send_message_view($id,$msg_id);
        //$data['fetch3']=$this->site_common->logouttime($id);    
       
		 $id=$this->session->userdata('userid');
	   //echo $id; die;
			$result=$this->db->query("select * from  ratchet_register where id='".$id."' and upgrade='1' ");
			 $count =  $result->num_rows();
			 if($count==0)
			 {
				  $this->load->view('upgrade_test');
       
			 }
			 else
			 {
				  $this->load->view('header');
				  $this->load->view('view_lastonline',$data);
				  $this->load->view('footer');
			 }
        
	}
	public function read()
	{
		$id=$this->input->get('id');
        $msgid=$this->input->get('msgid');
		$this->load->model('site_common');
//        $data['fetch']=$this->site_common->message_view($id);
        $data['fetch2']=$this->site_common->send_message_view($id,$msgid);
        //$data['fetch3']=$this->site_common->logouttime($id);  
		 $id=$this->session->userdata('userid');
	   //echo $id; die;
			$result=$this->db->query("select * from  ratchet_register where id='".$id."' and upgrade='1' ");
			 $count =  $result->num_rows();
			 if( $count==0)
			 {
				  $this->load->view('upgrade_test');
				 
			 }
			 else
			 {
				   $this->load->view('header');

        $this->load->view('view_readtime',$data);
        $this->load->view('footer');
			 }
      
		
	}
    public function delete()
    {
        $this->load->model('site_common');
        $id=$this->input->post('id');
        foreach($id as $value)
        {
            $data['id'] = $value;

            $this->site_common->delete('ratchet_messages', $data);
        }

        redirect('messages');

    }
	 public function viewed()
    {
		$owner=$this->session->userdata('userid');
		$data['fetch1']=$this->site_common->select_i_view('ratchet_view',$owner);
		$data['fetch2']=$this->site_common->select_me_view('ratchet_view',$owner);
        $this->load->view('viewed',$data);

    }
}