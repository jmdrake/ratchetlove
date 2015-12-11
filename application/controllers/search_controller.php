<?php
class Search_controller extends CI_Controller
{

    public function index(){
        $data['fetch1']=array();
        $this->load->view('header');
        $this->load->view('search',$data);
        $this->load->view('footer');
    }
    public function search()
    {
        $userid=$this->session->userdata('userid');
        $gender=$this->input->post('gender');
        $agefrom=$this->input->post('agefrom');
        $ageto=$this->input->post('ageto');
        $seeking=$this->input->post('seeking');
        $body_type=$this->input->post('body_type');
        $education=$this->input->post('education');
        $ethnicity=$this->input->post('ethnicity');
        $country=$this->input->post('country');
        $religion=$this->input->post('religion');
        $city=$this->input->post('marital');
		//echo $gender . $agefrom . $ageto . $seeking . $body_type . $education . $ethnicity . $country . $religion . $city . "hai";
		
		if(($gender=="")&&($agefrom=="")&&($ageto=="")&&($seeking=="")&&($body_type=="")&&($education=="")&&($ethnicity=="")&&($country=="")&&($religion=="")&&($city==""))
		{  $data['fetch']=array();
        $this->load->view('header');
        $this->load->view('search_result',$data);
        $this->load->view('footer');?>
        <script>
		alert('Select any field');
		</script>
        <?php
		}
		else
		{
		$data=array($gender,$agefrom,$ageto,$seeking,$body_type,$education,$ethnicity,$country,$religion,$city);



        $data['fetch']=$this->site_common->extrasearch($data,$userid);

        $this->load->view('header');
        $this->load->view('search_result',$data);
        $this->load->view('footer');
		}
    }
    public function view()
    {

        $userid=$this->input->get('id');


        $table1="ratchet_register";
        $table2="ratchet_profile";


        $data['fetch3']=$this->site_common->getjoin($table1,$table2,$userid);
        $this->load->view('header');

        $this->load->view('profile_details1',$data);
        $this->load->view('footer');


    }
}
?>