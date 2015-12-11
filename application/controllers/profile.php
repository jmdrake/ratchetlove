<?php
class Profile extends CI_Controller
{

    public function index(){
        $this->load->view('header_min');
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
		/*$image=$this->uplo();
		$galimg1=$this->uplo1();
		$galimg2=$this->uplo2();
		$galimg3=$this->uplo3();
		$galimg4=$this->uplo4();*/
		
		
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image1'))
		
		{
			$image1='';
		}
		else
		{
			$data = $this->upload->data();
			$image1=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		$config['max_size']	='16000';
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image2'))
		
		{
			$image2='';
		}
		else
		{
			$data = $this->upload->data();
			$image2=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
	
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image3'))
		
		{
			$image3='';
		}
		else
		{
			$data = $this->upload->data();
			$id=$this->input->post('id');
			$image3=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
	
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image4'))
		
		{
			$image4='';
		}
		else
		{
			$data = $this->upload->data();
			$image4=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';

		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image5'))
		
		{
			$image5='';
		}
		else
		{
			$data = $this->upload->data();
			$image5=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();

		if ( ! $this->upload->do_upload('logo'))
		
		{
			$logo='';
		}
		else
		{
			$data = $this->upload->data();
		
            $logo=$data['file_name'];
		}
		
		/*echo $image1;
		echo $image2;
		echo $image3;
		echo $image4;
		echo $image5;
		echo "hai";
		exit;
		*/
		
		 $data=array('height'=>$height,'date_night'=>$date_night,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'image'=>$image1,'uid'=>$userid,'galimg1'=>$image2,'galimg2'=>$image3,'galimg3'=>$image4,'galimg7'=>$image5);
		 
		 $table="ratchet_profile";
			$result=$this->site_common->insert($table,$data);
			//exit;
        if($result)
        {
            redirect('online');
        }
	}
	 public function uplo($image)
 {
  $config['upload_path'] = 'assets/images';
  $config['allowed_types'] = 'gif|jpg|png';
  //$config['max_size'] = '100';
  //$config['max_width']  = '1024';
  //$config['max_height']  = '768';

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('userfile'))
  {
   $pic=$image;
   echo "true";
   return $pic;

   //$this->load->view('upload_form', $error);
  }
  else
  {
   $data = array('upload_data' => $this->upload->data());
   $pic=$data["upload_data"]["file_name"];
   echo "false";
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
		 $table = "ratchet_register";
		 $data['fetch2']= $this->site_common->get2($table, $userid);
		 
		  $num=count($data['fetch1']);
		 if($num==0)
		 {
			 redirect('home');
			 
		 }
		 else
		 {
		 
         
         $this->load->view('header_min');
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

		
		
		
		$table = "ratchet_profile";
         $data1= $this->site_common->gett($table, $userid);
		
		//$image=$this->uplo($data1['image']); 
		//echo $image . "image";
		//exit;
		
		
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image1'))
		
		{
			$image1=$data1['galimg1'];
		}
		else
		{
			$data = $this->upload->data();
			$image1=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		$config['max_size']	='16000';
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image2'))
		
		{
			$image2=$data1['galimg2'];
		}
		else
		{
			$data = $this->upload->data();
			$image2=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
	
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image3'))
		
		{
			$image3=$data1['galimg3'];
		}
		else
		{
			$data = $this->upload->data();
			$id=$this->input->post('id');
			$image3=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
	
		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image4'))
		
		{
			$image4=$data1['galimg4'];
		}
		else
		{
			$data = $this->upload->data();
			$image4=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';

		$this->load->library('upload', $config);
		$data = $this->upload->data();

if ( ! $this->upload->do_upload('image5'))
		
		{
			$image5=$data1['galimg5'];
		}
		else
		{
			$data = $this->upload->data();
			$image5=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();
if ( ! $this->upload->do_upload('image6'))
		
		{
			$image6=$data1['galimg6'];
		}
		else
		{
			$data = $this->upload->data();
			$image6=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();
if ( ! $this->upload->do_upload('image7'))
		
		{
			$image7=$data1['galimg7'];
		}
		else
		{
			$data = $this->upload->data();
			$image7=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();
if ( ! $this->upload->do_upload('image8'))
		
		{
			$image8=$data1['galimg8'];
		}
		else
		{
			$data = $this->upload->data();
			$image8=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();
if ( ! $this->upload->do_upload('image9'))
		
		{
			$image9=$data1['galimg9'];
		}
		else
		{
			$data = $this->upload->data();
			$image9=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();	
if ( ! $this->upload->do_upload('image10'))
		
		{
			$image10=$data1['galimg10'];
		}
		else
		{
			$data = $this->upload->data();
			$image10=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();
if ( ! $this->upload->do_upload('image11'))
		
		{
			$image11=$data1['galimg11'];
		}
		else
		{
			$data = $this->upload->data();
			$image11=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();	
		if ( ! $this->upload->do_upload('image12'))
		
		{
			$image=$data1['image'];
		}
		else
		{
			$data = $this->upload->data();
			$image=$data['file_name'];
		}
		$config['upload_path'] ='assets/images';
		$config['allowed_types'] ='gif|jpg|png';
		
		$this->load->library('upload', $config);
		$data = $this->upload->data();									
												
				
		

		if ( ! $this->upload->do_upload('logo'))
		
		{
			$logo='';
		}
		else
		{
			$data = $this->upload->data();
			$logo=$data['file_name'];
		}
		
		
		
		
		
		
		/*if(($image!=0)||($image!="0"))
		{*/
		
		$data=array('height'=>$height,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'viewpermission'=>$viewpermission,'image'=>$image,'uid'=>$userid,'galimg1'=>$image1,'galimg2'=>$image2,'galimg3'=>$image3,'galimg4'=>$image4,'galimg5'=>$image5,'galimg6'=>$image6,'galimg7'=>$image7,'galimg8'=>$image8,'galimg9'=>$image9,'galimg10'=>$image10,'galimg11'=>$image11);
		/*}
		
		else
		{
			$data=array('height'=>$height,'body_type'=>$body_type,'hair_color'=>$hair_color,'eye_color'=>$eye_color,'seeking'=>$seeking,'looking'=>$looking,'education'=>$education,'own_car'=>$own_car,'second_language'=>$second_language,'marital_status'=>$marital_status,'want_children'=>$want_children,'have_children'=>$have_children,'smoke'=>$smoke,'drug'=>$drug,'drink'=>$drink,'religion'=>$religion,'profession'=>$profession,'pets'=>$have_pets,'ambitious'=>$ambitious,'headline'=>$head_line,'interests'=>$interests,'description'=>$description,'income'=>$income,'viewpermission'=>$viewpermission,'uid'=>$userid);
			
		}*/
		 
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
		 $table = "ratchet_register";
		 $data['fetch2']= $this->site_common->get2($table, $userid);
         $table1 = "ratchet_register";
         $table12="ratchet_profile";

         //$data['fetch1'] = $this->site_common->getdetails($table, $userid);
         $data['profileinfo'] = $this->site_common->getjoins($table1,$table12,$userid);
		 $num=count($data['profileinfo']);
		 if($num==0)
		 {
			 redirect('home');
			 
		 }
		 else
		 {
         $this->load->view('header_min');

         $this->load->view('view_profile', $data);
         $this->load->view('footer');
		 }
     }

 }
 
  
 
 

}
	