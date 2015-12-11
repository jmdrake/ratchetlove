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

//      $this->load->view("header");
      $this->load->view("messages",$data);
//      $this->load->view("footer");
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
    $date= $datetime->format('Y\-m\-d\ h:i:s');
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
        $id=$this->input->get('id');

        $this->load->model('site_common');
        $data['fetch']=$this->site_common->message_view($id);
        $data['fetch2']=$this->site_common->send_message_view($id);

        $this->load->view('header');

        $this->load->view('view_message',$data);
        $this->load->view('footer');

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
}