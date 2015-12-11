<?php

/**
 *
 */
class Site_common extends CI_Model
{

    function getAll($table)
    {
        $result = $this->db->get($table);
        $fetch = $result->result_array();
        return $fetch;
    }
   function getAll2($table)
    {
        $result = $this->db->get($table);
        $fetch = $result->result();
        return $fetch;
    }
    function getdetails($table,$id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get($table);
        $fetch = $result->result_array();
        return $fetch;

    }
	function get($table,$id)
    {
        $this->db->where('uid',$id);
        $result = $this->db->get($table);
        $fetch = $result->result_array();
        return $fetch;

    }
	function get2($table,$id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get($table);
        $fetch = $result->row_array();
        return $fetch;

    }
	function gett($table,$id)
    {
        $this->db->where('uid',$id);
        $result = $this->db->get($table);
        $fetch = $result->row_array();
        return $fetch;

    }
	function gettime($table,$id)
    {
        $this->db->where('whoview',$id);
        $result = $this->db->get($table);
        $fetch = $result->row_array();
        return $fetch;

    }


    function insert($table,$data)
    {
        $this->db->insert($table,$data);
        return $id = $this->db->insert_id();
        //echo $this->db->last_query();
		//exit;
    }
	 function insert2($table,$data)
    {
        $this->db->insert($table,$data);
        //return $id = $this->db->insert_id();
        //echo $this->db->last_query();
    }

    function delete($tablename,$data)
    {
        $this->db->where($data);
        $this->db->delete($tablename);
//        echo $this->db->last_query();
    }
    function update($tablename,$id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update($tablename,$data);


    }
	 function update2($tablename,$id,$data)
    {
        $this->db->where('viewid',$id);
        $this->db->update($tablename,$data);

    }
	 function updatemessage($tablename,$id,$data)
    {
        $this->db->where('msgid',$id);
        $this->db->update($tablename,$data);

    }
    function update_any($tablename,$field,$value,$data)
    {
        $this->db->where($field,$value);
        $this->db->update($tablename,$data);
    }
    function select_where($tablename,$data)
    {
        $result=$this->db->get_where($tablename,$data);
        $fetch=$result->row_array();
        return $fetch;
    }
	 function selectview($tablename,$owner,$whoview)
    {
        $result=$this->db->where('owner',$owner);
		$result=$this->db->where('whoview',$whoview);
		$result=$this->db->get($tablename);
        $fetch=$result->row_array();
        return $fetch;
    }
	function selectimage($tablename,$id)
    {
        $result=$this->db->where('uid',$id);
		$result=$this->db->get($tablename);
        $fetch=$result->row_array();
		//echo $this->db->last_query();
		//exit;
        return $fetch;
    }
	 function select_i_view($tablename,$owner)
    {
		$this->db->select('*');
	    $this->db->from($tablename);
        $this->db->join('ratchet_register', 'ratchet_register.id = ratchet_view.owner');
        $this->db->where('owner',$owner);
		$result=$this->db->get();
		$fetch=$result->result_array();
		//echo $this->db->last_query();
		 //exit;
        return $fetch;
    }
	/* function select_i_view($tablename,$owner)
    {
        $result=$this->db->where('owner',$owner);
		$result=$this->db->get($tablename);
        $fetch=$result->result_array();
        return $fetch;
    }*/
	 function select_me_view($tablename,$owner)
    {
		$this->db->select('*');
	    $this->db->from($tablename);
        $this->db->join('ratchet_register', 'ratchet_register.id = ratchet_view.whoview');
		
        $result=$this->db->where('whoview',$owner);
		$result=$this->db->get();
        $fetch=$result->result_array();
        return $fetch;
    }
	/* function select_me_view($tablename,$owner)
    {
        $result=$this->db->where('whoview',$owner);
		$result=$this->db->get($tablename);
        $fetch=$result->result_array();
        return $fetch;
    }*/
function select_where2($tablename,$data)
    {
        $result=$this->db->get_where($tablename,$data);
        echo $this->db->last_query();die;
        $fetch=$result->result_array();

        return $fetch;
    }

    function select_where3($tablename,$data)
    {
        $result=$this->db->query($tablename,$data);
        $fetch=$result->result_array();
        return $fetch;
    }
    function select_where_multiple($tablename,$data)
    {
        $result=$this->db->get_where($tablename,$data);
        $fetch=$result->result_array();
        return $fetch;

    }
    function select_where_data($tablename,$data)
    {

        // $ID= $data['main_id'];
        $i=0;
        $table = $this->db->dbprefix($tablename);
        foreach ($data as $key => $value)
        {
            if($i>0)
            {
                $condition .= " AND $key='$value'";
            }
            else
            {
                $condition = "$key='$value'";
            }
            $i++;
        }

        $sql = "SELECT * FROM $table WHERE $condition ";

        $result = $this->db->query($sql);
        foreach ($result->result_array() as $row)
        {
            $fetch[] =  $row;
        }
        // return $sql;
        if(!empty($fetch))
        {

            return $fetch;
        }


    }



    function select_where_datanew($tablename,$data)
    {

        // $ID= $data['main_id'];
        $i=0;
        $table = $this->db->dbprefix($tablename);
        foreach ($data as $key => $value)
        {
            if($i>0)
            {
                $condition .= " AND $key='$value'";
            }
            else
            {
                $condition = "$key='$value'";
            }
            $i++;
        }

        $sql = "SELECT * FROM $table WHERE $condition and $table.job_id in(select id from myrite_jobs)";

        $result = $this->db->query($sql);
        foreach ($result->result_array() as $row)
        {
            $fetch[] =  $row;
        }
        // return $sql;
        if(!empty($fetch))
        {

            return $fetch;
        }


    }



    function getRecords($tablename,$limit1,$limit2)
    {
        $tablename = $this->db->dbprefix($tablename);
        $sql = "SELECT * FROM $tablename  LIMIT $limit1, $limit2";

        $result = $this->db->query($sql);
        foreach ($result->result_array() as $row)
        {
            $fetch2[] =  $row;
        }
        return $fetch2;
    }

    function search_where($tablename,$data,$limit1,$limit2)
    {
        $result=$this->db->get_where($tablename,$data);


        $result=$this->db->limit($limit1,$limit2);
        foreach ($result->result_array() as $row)
        {
            $fetch[] =  $row;
        }
        return $fetch;
    }
    function gettruckbylimit($tablename,$trailer_class,$limit1,$limit2)
    {
        $tablename = $this->db->dbprefix($tablename);
        $result=$this->db->query("select * from $tablename where type='$trailer_class' LIMIT $limit1,$limit2");
        $fetch=$result->result_array() ;
        return $fetch;
    }
    function search_job($tablename,$keyword,$mile,$limit1,$limit2)
    {

        $result=$this->db->query("select * from $tablename where estimated_miles<=$mile and ( pickup_address like '%$keyword%' or delivery_address like '%$keyword%' ) LIMIT $limit1,$limit2");

        $fetch=$result->result_array() ;
        return $fetch;
    }
    function getbylimit($tablename,$limit1,$limit2)
    {
        $tablename = $this->db->dbprefix($tablename);
        $result=$this->db->query("select * from $tablename LIMIT $limit1,$limit2");
        $fetch=$result->result_array() ;
        return $fetch;
    }

    function search_trucker($tablename,$keyword)
    {
        $result=$this->db->query("select * from $tablename where  firstname	 like '%$keyword%' or lastname	 like '%$keyword%'");
        $fetch=$result->result_array() ;
        return $fetch;
    }
    function search_shipper($tablename,$keyword)
    {
        $result=$this->db->query("select * from $tablename where  company	 like '%$keyword%' ");
        $fetch=$result->result_array() ;
        return $fetch;
    }

    function loadcity($table,$term)
    {
        $result=$this->db->query("SELECT city,county,state_code,zip FROM $table where city LIKE '$term%' group by city order by city");
        $fetch=array();
        foreach ($result->result_array() as $row){

            $fetch[]=$row;


        }

        return $fetch;

    }
    function loadstate($table,$term)
    {
        $result=$this->db->query("SELECT city,county,state_code,zip FROM $table where city LIKE '$term%' group by state_code order by state_code");
        $fetch=array();
        foreach ($result->result_array() as $row){

            $fetch[]=$row;


        }

        return $fetch;

    }
    function loadzip($table,$term)
    {
        $result=$this->db->query("SELECT city,county,state_code,zip FROM $table where  zip like'$term%' group by city order by city");
        //echo $this->db->last_query();
        $fetch=array();
        foreach ($result->result_array() as $row){

            $fetch[]=$row;


        }

        return $fetch;

    }
    function loadmile($table,$term)
    {
        $result=$this->db->query("SELECT city,county FROM $table where city LIKE '$term%' group by city order by city");
        $fetch=array();
        foreach ($result->result_array() as $row){

            $fetch[]=$row;

        }

        return $fetch;

    }


    function select_join($tablename1,$tablename2,$data)
    {
        $result=$this->db->query("select $tablename1.*,$tablename2.company from $tablename1 inner join $tablename2 on $tablename1.shipper_id=$tablename2.id");
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }
    function select_join_archive($tablename1,$tablename2,$id)
    {
        $tablename1 = $this->db->dbprefix($tablename1);
        $tablename2 = $this->db->dbprefix($tablename2);

        $result=$this->db->query("select $tablename1.*,$tablename2.company from $tablename1 inner join $tablename2 on $tablename1.shipper_id=$tablename2.id where $tablename1.id='$id'");
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }

    function select_join_pagenate($tablename1,$tablename2,$data,$limit1,$limit2)

    {
        //$i=0;
        // foreach ($data as $key => $value)
        //{
        //if($i>0)
        //{
        //$condition .= " AND $key='$value'";
        //}
        //else
        //{
        //$condition = "$key='$value'";
        //}
        //$i++;
        // }
        $result=$this->db->query("select $tablename1.*,$tablename2.company from $tablename1 inner join $tablename2 on $tablename1.shipper_id=$tablename2.id    order by $tablename1.id desc LIMIT $limit1,$limit2");
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }


    function select_join_pagenate_new($tablename1,$tablename2,$data,$limit1,$limit2,$id)
    {

        $result=$this->db->query("select $tablename1.*,$tablename2.company from $tablename1 inner join $tablename2 on $tablename1.shipper_id=$tablename2.id and $tablename1.shipper_id=$id  order by $tablename1.id desc LIMIT $limit1,$limit2");
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }

    function search_jobs($tablename,$tablename1,$trailer,$keyword,$mile,$limit1,$limit2)
    {
        $tablename = $this->db->dbprefix($tablename);
        $tablename1 = $this->db->dbprefix($tablename1);

        $condition="where ";
        $f = 0;
        if($trailer !='none')
        {
            $condition .= "$tablename.trailer_class like '%$trailer%' ";
            $f++;
        }

        if($mile !='none')
        {
            if($f==1)
            {
                $condition .= " and $tablename.estimated_miles<=$mile ";
            }
            else
            {
                $condition .= "$tablename.estimated_miles<=$mile ";
            }
            $f++;
        }
        if($keyword !='none')
        {
            if($f>0)
            {
                $condition .= " or ( $tablename.pickup_address like '%$keyword%' or $tablename.delivery_address like '%$keyword%' )";
            }
            else
            {
                $condition .= "( $tablename.pickup_address like '%$keyword%' or $tablename.delivery_address like '%$keyword%' )";
            }
        }


        if($condition == "where ")
        {
            $condition =" ";
        }
        //else{
        //$condition.="and $tablename1.id =$uid";
        //}

        $sql = "select $tablename.*,$tablename1.company from $tablename inner join $tablename1 on $tablename.shipper_id=$tablename1.id $condition order by id desc LIMIT $limit1,$limit2";
        $result=$this->db->query($sql);
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }


    function search_total_jobs($tablename,$tablename1,$trailer,$keyword,$mile)
    {
        $tablename  = $this->db->dbprefix($tablename);
        $tablename1 = $this->db->dbprefix($tablename1);

        $condition="where ";
        $f = 0;
        if($trailer !='none')
        {
            $condition .= "$tablename.trailer_class like '%$trailer%' ";
            $f++;
        }

        if($mile !='none')
        {
            if($f>0)
            {
                $condition .= " and $tablename.estimated_miles<=$mile ";
            }
            else
            {
                $condition .= "$tablename.estimated_miles<=$mile ";
            }

            $f=$f+1;
        }
        if($keyword !='none')
        {
            if($f>0)
            {
                $condition .= " or ( $tablename.pickup_address like '%$keyword%' or $tablename.delivery_address like '%$keyword%' )";
            }
            else
            {
                $condition .= " ( $tablename.pickup_address like '%$keyword%' or $tablename.delivery_address like '%$keyword%' )";
            }
            $f=$f+1;
        }


        if($condition == "where ")
        {
            $condition =" ";
        }
        // echo $condition ;
        $sql = "select $tablename.*,$tablename1.company from $tablename inner join $tablename1 on $tablename.shipper_id=$tablename1.id $condition";
        $result=$this->db->query($sql);
        //echo $this->db->last_query();
        $fetch=$result->result_array() ;
        return $fetch;
    }
     function checkUser($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('ratchet_register');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$result=$this->db->get();
//        echo $this->db->last_query();
		$fetch=$result->row_array(); 
		if($result->num_rows() > 0)
		{
			$fetch  = $result->row_array();
			$values = array('userid' => $fetch['id'], 'username' => $fetch['username'],'gender'=>$fetch['gender'],'lf'=>$fetch['looking_for']);
//echo $values;die;
			$this->session->set_userdata($values);
			return true;
		}
		else
		{
			return false;
		}
				
		
	}

    function search($looking,$age)
    {
        $result=$this->db->query('select * from ratchet_register where looking_for='.$looking.' and age >='.$age);
        $fetch=$result->result_array() ;
        return $fetch;
    }

    function online($sid,$gender)
    {
        $result= $this->db->query("SELECT *,ratchet_register.id as user_id
FROM ratchet_register
INNER JOIN ratchet_profile
ON ratchet_register.id=ratchet_profile.uid
WHERE  status=1 AND ratchet_register.id !=".$sid." AND ratchet_register.gender !='$gender'");
//        $result = $this->db->get();
        $fetch=$result->result_array();
//       echo $this->db->last_query();
        return $fetch;
    }
    function getjoins($table1,$table2,$id)
    {

        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, 'ratchet_register.id = ratchet_profile.uid');
        $this->db->where('uid',$id);
        $result = $this->db->get();
        $fetch = $result->row_array();

        return $fetch;

    }
    function messages($sid)
    {
        $result= $this->db->query('SELECT *,ratchet_register.id as user_id
FROM ratchet_register
INNER JOIN ratchet_messages
ON ratchet_register.id=ratchet_messages.uid
WHERE  status=1 AND ratchet_register.id <>'.$sid);
//        $result = $this->db->get();
        $fetch=$result->result_array();
        //echo $this->db->last_query();
        return $fetch;
    }

//    function inbox($sid)
//    {
//        $result= $this->db->query('SELECT *,ratchet_register.id as user_id,ratchet_messages.id as msg_id
//FROM ratchet_register
//INNER JOIN ratchet_messages
//ON ratchet_register.id=ratchet_messages.to_id
//INNER JOIN ratchet_profile
//ON ratchet_profile.uid=ratchet_register.id
//WHERE  ratchet_messages.to_id='.$sid.' AND ratchet_register.id='.$sid );
////        $result = $this->db->get();
//        $fetch=$result->result_array();
////        echo $this->db->last_query();
//        return $fetch;
//    }

    function inbox($sid)
    {
        $result= $this->db->query('SELECT *,C.id as user_id,A.id as msg_id
        FROM ratchet_messages as A
        left join ratchet_profile as B ON
        A.from_id=B.uid
        left join ratchet_register as C ON
         A.from_id=C.id
        where A.to_id='.$sid );
//        $result = $this->db->get();

        $fetch=$result->result_array();
//        echo $this->db->last_query();
//        __DIR__
        return $fetch;
    }
    function send_message($sid)
    {
        $result= $this->db->query('SELECT *,C.id as user_id,A.id as msg_id
        FROM ratchet_messages as A
        left join ratchet_profile as B ON
        A.to_id=B.uid
        left join ratchet_register as C ON
         A.to_id=C.id
        where A.from_id='.$sid.' ORDER BY msg_id DESC' );
//        $result = $this->db->get();
        $fetch=$result->result_array();
//        echo $this->db->last_query();
        return $fetch;
    }

//
//    function send_message($sid)
//    {
//        $result= $this->db->query('SELECT *,ratchet_register.id as user_id,ratchet_messages.id as msg_id
//FROM ratchet_register
//INNER JOIN ratchet_messages
//ON ratchet_register.id=ratchet_messages.from_id
//INNER JOIN ratchet_profile
//ON ratchet_profile.uid=ratchet_register.id
//WHERE  ratchet_messages.from_id='.$sid);
////        $result = $this->db->get();
//        $fetch=$result->result_array();
//        //echo $this->db->last_query();
//        return $fetch;
//    }
    function message_view($id,$msg_id)
    {
        $result= $this->db->query('SELECT *,C.id as user_id,A.id as msg_id
        FROM ratchet_messages as A
        left join ratchet_profile as B ON
        A.from_id=B.uid
        left join ratchet_register as C ON
         A.from_id=C.id
        where A.to_id='.$id.' and A.id='.$msg_id.' ORDER BY msg_id DESC');
//        $result = $this->db->get();

        $fetch=$result->row_array();
       
        return $fetch;
    }

    function send_message_view($id,$msg_id)
    {
        $result= $this->db->query('SELECT *,C.id as user_id,A.id as msg_id
        FROM ratchet_messages as A
        left join ratchet_profile as B ON
        A.to_id=B.uid
        left join ratchet_register as C ON
         A.to_id=C.id
        where A.to_id='.$id.' and A.id='.$msg_id.' ORDER BY msg_id DESC');
//        $result = $this->db->get();
        $fetch=$result->row_array();

//        echo $this->db->last_query();

        return $fetch;
    }

    function invited($id)
    {
        $result= $this->db->query('SELECT *,ratchet_date_night.id as inv_id
FROM ratchet_date_night
INNER JOIN ratchet_register
ON ratchet_date_night.uid=ratchet_register.id
INNER JOIN ratchet_profile
ON ratchet_profile.uid=ratchet_register.id
WHERE ratchet_date_night.status=0 AND  ratchet_date_night.pid='.$id);
//        $result = $this->db->get();
        $fetch=$result->result_array();
        //echo $this->db->last_query();
        return $fetch;
    }

    function accepted($id)
    {
        $result= $this->db->query('SELECT *,ratchet_date_night.id as inv_id
FROM ratchet_date_night
INNER JOIN ratchet_register
ON ratchet_date_night.pid=ratchet_register.id
INNER JOIN ratchet_profile
ON ratchet_profile.uid=ratchet_register.id
WHERE ratchet_date_night.accept=1 AND  ratchet_date_night.uid='.$id);
//        $result = $this->db->get();
        $fetch=$result->result_array();
        //echo $this->db->last_query();
        return $fetch;
    }

    public function extrasearch($data)
    {
        $this->db->select('*');
        $this->db->from('ratchet_register');
        $this->db->join('ratchet_profile','ratchet_register.id = ratchet_profile.uid');

        if($data[0]!="")$this->db->like('gender',$data[0],'none');
		
		
		
        if($data[3]!="")$this->db->like('seeking',$data[3],'none');
        if($data[4]!="")$this->db->like('body_type',$data[4],'none');
        if($data[5]!="")$this->db->like('education',$data[5],'none');
        if($data[6]!="")$this->db->like('ethnicity',$data[6],'none');
        if($data[7]!="")$this->db->like('country',$data[7],'none');
        if($data[8]!="")$this->db->like('religion',$data[8],'none');
        if($data[9]!="")$this->db->like('marital_status',$data[9],'none');
		if($data[1]){
		$this->db->where('age >=', $data[1]);
		}
		if($data[2]){
        $this->db->where('age <=', $data[2]);
		}
        $result = $this->db->get();
        $fetch = $result->result_array();
//echo $this->db->last_query();
//exit;
        return $fetch;
    }
    public  function select_last(){
        $this->db->select("*");
        $this->db->from("ratchet_payments");
        $this->db->limit('1');
        $this->db->order_by('id',"desc");
        $result=$this->db->get();
        $fetch=$result->row_array();
        return $fetch;


    }
	
	 function fetch_record($limit, $start)
	 {
	  $this->db->limit($limit, $start);
	  $query = $this->db->get($this->data);
	  return ($query->num_rows() > 0)  ? $query->result() : FALSE;
	
	 }

	 function record_count()
	 {
	  return $this->db->count_all_results('data');
	 }

}

?>