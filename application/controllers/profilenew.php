<?php
class Profile extends CI_Controller
{

    public function index(){
        $this->load->view('header');
        $this->load->view('profile');
        $this->load->view('footer');
    }
	public function insert()
	{
		$userid=$this->session->userdata('userid');
		
		
		$height=$this->input->post('height');
		$body_type=$this->input->post('body_type');
		$hair_color=$this->input->post('hair_color');
		$eye_color=$this->input->post('eye_color');
		$seeking=$this->input->post('seeking');
		$looking=$this->input->post('looking');
		$education=$this->input->post('education');
		$income=$this->input->post('income');
		$own_car=$this->input->post('own_car');
		$second_language=$this->input->post('second_language');
		$marital_status=$this->input->post('marital_status');
		$want_children=$this->input->post('want_children');
		$have_children=$this->input->post('have_children');
		$smoke=$this->input->post('smoke');
		$drug=$this->input->post('drug');
		$drink=$this->input->post('drink');
		
		$religion=$this->input->post('religion');
		$profession=$this->input->post('profession');
		$have_pets=$this->input->post('have_pets');
		$ambitious=$this->input->post('ambitious');
		$head_line=$this->input->post('head_line');
		$interests=$this->input->post('interests');
		$description=$this->input->post('description');
        $date_night=$this->input->post('date_night');
		$image=$this->uplo();
		
		 $data=array('height'=>$height,'date_night'=>$date_night,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'image'=>$image,'uid'=>$userid);
		 
		 $table="ratchet_profile";
			$result=$this->site_common->insert($table,$data);
        if($result)
        {
            redirect('online');
        }
	}
	 public function uplo()
 {
  $config['upload_path'] = 'assets/images';
  $config['allowed_types'] = 'gif|jpg|png';
  //$config['max_size'] = '100';
  //$config['max_width']  = '1024';
  //$config['max_height']  = '768';

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload())
  {
   return 0;

   //$this->load->view('upload_form', $error);
  }
  else
  {
   $data = array('upload_data' => $this->upload->data());
   $pic=$data["upload_data"]["file_name"];
   return $pic;

   //$this->load->view('upload_success', $data);
  }
 
 }
 public function edit()
 {
     if($this->session->userdata('userid')==null)
     {
         redirect('login');
     }
     else {
         $userid = $this->session->userdata('userid');
         $this->load->model('site_common');
         $table = "ratchet_profile";
         $data['fetch1'] = $this->site_common->get($table, $userid);
		  $num=count($data['fetch1']);
		 if($num==0)
		 {
			 redirect('home');
			 
		 }
		 else
		 {
		 

         $this->load->view('header');
         $this->load->view('edit_profile', $data);
         $this->load->view('footer');
		 }
     }
 }
 public function update()
 {
	$userid=$this->session->userdata('userid');
		
		$id=$this->input->post('id');
		$height=$this->input->post('height');
		$body_type=$this->input->post('body_type');
		$hair_color=$this->input->post('hair_color');
		$eye_color=$this->input->post('eye_color');
		$seeking=$this->input->post('seeking');
		$looking=$this->input->post('looking');
		$education=$this->input->post('education');
		$income=$this->input->post('income');
		$own_car=$this->input->post('own_car');
		$second_language=$this->input->post('second_language');
		$marital_status=$this->input->post('marital_status');
		$want_children=$this->input->post('want_children');
		$have_children=$this->input->post('have_children');
		$smoke=$this->input->post('smoke');
		$drug=$this->input->post('drug');
		$drink=$this->input->post('drink');
		
		$religion=$this->input->post('religion');
		$profession=$this->input->post('profession');
		$have_pets=$this->input->post('have_pets');
		$ambitious=$this->input->post('ambitious');
		$head_line=$this->input->post('head_line');
		$interests=$this->input->post('interests');
		$description=$this->input->post('description');
		$viewpermission=$this->input->post('viewpermission');

		$image=$this->uplo(); 
		
		if(($image!=0)||($image!="0"))
		{
		
		$data=array('height'=>$height,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'viewpermission'=>$viewpermission,'image'=>$image,'uid'=>$userid);
		}
		else
		{
			$data=array('height'=>$height,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'viewpermission'=>$viewpermission,'uid'=>$userid);
			
		}
		 
		 $table="ratchet_profile";
			$id=$this->site_common->update($table,$id,$data);
			redirect('profile/edit');
 }
 public function viewprofile()
 {
	 
     if($this->session->userdata('userid')==null)
     {
         redirect('login');
     }
     else {
         $userid = $this->session->userdata('userid');
         $table1 = "ratchet_register";
         $table12="ratchet_profile";

         //$data['fetch1'] = $this->site_common->getdetails($table, $userid);
         $data['row'] = $this->site_common->getjoins($table1,$table12,$userid);
		 $num=count($data['row']);
		 if($num==0)
		 {
			 redirect('home');
			 
		 }
		 else
		 {
         $this->load->view('header');

         $this->load->view('view_profile', $data);
         $this->load->view('footer');
		 }
     }

 }

}
	