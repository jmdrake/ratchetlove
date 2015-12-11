<?php
class Upgrade extends CI_Controller
{

    public function index()
    {
		$userid=$this->session->userdata('userid');
		$table="ratchet_register";
		
	    $data['fetch1']=$this->site_common->getdetails($table,$userid);
		$data['fetch2']=$this->site_common->get('ratchet_profile',$userid);
		$this->load->view('header');
		
		$this->load->view('upgrade',$data);
        $this->load->view('footer');
	}
    public function process()
    {
		
		$id=$this->session->userdata('userid');
        $ses['fname']=$this->input->post('fname');
        $ses['lname']=$this->input->post('lname');
        $ses['city']=$this->input->post('city');
        $ses['state']=$this->input->post('state');
        $ses['zip']=$this->input->post('zip');
        $ses['email']=$this->input->post('email');
        $ses['uid']=$this->session->userdata('userid');
        $amount=$this->input->post('amount');

        $ses['amount']=$amount;
        if($amount==52.50)
        {
            $plan="6";
        }
        elseif($amount==38.25)
        {
            $plan="3";
        }
        elseif($amount==18.75)
        {
            $plan="1";
            
        }
        $ses['plan']=$plan;
		session_start();
		$_SESSION['plan']=$ses['plan'];
		$tz_object = new DateTimeZone('America/Los_Angeles');
		  $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    $date= $datetime->format('m\-d\-y');
	$data=array('plan'=>$plan,'upgrade_date'=>$date);
		$this->site_common->update("ratchet_register",$id,$data);
		
 		
        $this->site_common->insert("ratchet_payments",$ses);
        $result=$this->site_common->select_last();
        $id=$result["id"];
        $this->load->library('paypal');
        $this->paypal->initialize();

        $this->paypal->add_field( 'return', site_url( 'upgrade/success/'.$id) );
        $this->paypal->add_field( 'cancel_return', site_url( 'upgrade/cancel' ) );
        $this->paypal->add_field( 'notify_url', site_url( 'upgrade/ipn' ) );

        $this->paypal->add_field( 'item_name', "Ratchet Love");
        $this->paypal->add_field( 'amount', $amount );
        //$this->paypal->add_field( 'quantity', '1');

        $this->paypal->paypal_auto_form();

    }
    public function ipn() {
        $this->load->library( 'Paypal' );
        if ( $this->paypal->validate_ipn() ) {
            $pdata = $this->paypal->ipn_data;
            if ($pdata['txn_type'] == "web_accept") {
                if($pdata['payment_status'] == "Completed"){
                    if($pdata['business'] == $this->config->item( 'paypal_email' )) {
                        //handle payment...
                    }
                }
            }
        }
    }




    public function success($id){



        $this->load->model('site_common');
        $da=array('id'=>$id);
        $dat=array('status'=>1);
//        fdgf
        $d=array('upgrade'=>1);
        $user_id=$this->session->userdata('userid');
        $this->site_common->update('ratchet_payments',$id,$dat);
        $this->site_common->update('ratchet_register',$user_id,$d);

        $res=$this->site_common->select_where('ratchet_payments',$da);

        $to=$res['email'];
        $headers  = "From:Ratchet Love\r\n";
        $headers.= "Content-type: text/html\r\n";
        $message="<p ><span style='font-weight:bold;font-size:15px;color: dodgerblue'> <u>Thank You For Upgrading Your Ratchet Love Account</u></span></p>
								<table width='317' height='176'  border='1'>

                                  <tr>
									<td width='212'><strong>Your Ratchet Love Account Plan</strong></td>
									<td width='215'><strong>".$res["plan"]."</strong></td>
								  </tr>
								  <tr>
									<td width='212'><strong>Payable Amount</strong></td>
									<td width='215'><strong>".$res["amount"]."</strong></td>
								  </tr>


								</table>";


        $subject ="Ratchet Love";
        if(mail($to,$subject,$message,$headers))
        {
            $this->load->view('header');
            $this->load->view('success');
            $this->load->view('footer');
        }


    }
    public function cancel(){

        $this->load->view('header');
        $this->load->view('failed');
        $this->load->view('footer');

    }

}
?>