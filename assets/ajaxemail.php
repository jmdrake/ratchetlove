<?php 
if (!function_exists('json_encode'))
{
    function json_encode($a=false)
    {
        if (is_null($a)) return 'null';
        if ($a === false) return 'false';
        if ($a === true) return 'true';
        if (is_scalar($a))
        {
            if (is_float($a))
            {
                // Always use "." for floats.
                return floatval(str_replace(",", ".", strval($a)));
            }

            if (is_string($a))
            {
                static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
            }
            else
            return $a;
        }
        $isList = true;
        for ($i = 0, reset($a); $i < count($a); $i++, next($a))
        {
            if (key($a) !== $i)
            {
                $isList = false;
                break;
            }
        }
        $result = array();
        if ($isList)
        {
            foreach ($a as $v) $result[] = json_encode($v);
            return '[' . join(',', $result) . ']';
        }
        else
        {
            foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
            return '{' . join(',', $result) . '}';
        }
    }
}


  $hostname="97.74.31.132";
  $username="ipxflorida";
  $password='Ipxfl!@3';
  $database="ipxflorida";
  
$con=mysql_connect($hostname,$username,$password);
mysql_select_db($database,$con);


	
$email=urldecode($_REQUEST['fieldValue']);
$userId=$_REQUEST['fieldId'];
$arrayToJs = array();
$arrayToJs[0] = $userId;
sleep(1);
//echo "SELECT * FROM syromalabar_students where parishno='$prid'";
$total=mysql_query("SELECT * FROM ratchet_register where email='$email'");
$countval=mysql_num_rows($total);

//echo $countval;


		if ($countval!=0) { 
$arrayToJs[1] = false;          // found user with that name
echo json_encode($arrayToJs);           
}
else {
$arrayToJs[1] = true;
echo json_encode($arrayToJs);       // that user name is free
}
		
	
	
