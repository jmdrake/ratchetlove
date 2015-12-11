<?php
class Support extends CI_Controller
{

    public function index($msg=NULL)
    {
		$data['msg']=$msg;
		$this->load->view("header2");
        $this->load->view("support",$data);
       $this->load->view("footer");

    }
  public function contact_action()
    {


        $email = $_POST['email']; // Sender Name
        $comment = $_POST['comment']; // Sender Name
       // $email = $_POST['email'];
        //$company_name = $_POST['company_name']; // Sender Phone
       // $zip = $_POST['zip']; // Sender Comments
       // $what = $_POST['what']; // Sender Comments
        $message="<html>



	<body topmargin='0' rightmargin='0' leftmargin='0' bottommargin='0'>

	<table width='100%' border='0' cellspacing='0' cellpadding='0'>

 	 <tr>

    <td align='center' valign='top'>

     <table width='800' border='0' cellspacing='0' cellpadding='0' >

  	<tr>

    <td width='800'>

     <table width='800' border='0' cellspacing='0' cellpadding='0'  style='font-size:12px'>
	<tr>

    <td height='42' bgcolor='#f47b20'><table width='800' border='0' cellspacing='0' cellpadding='0'>

 	 <tr>

    <td width='19' height='42'>&nbsp;</td>

    <td width='757' align='left' valign='middle'><font face='Georgia, Times New Roman, Times, serif' size='6' color='#FFFFFF'><b>Enquiry Details</b>						    </font></td>

  	</tr>

	</table>

	</td>

 	 </tr>

  	<tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><table width='800' border='0' cellspacing='0' cellpadding='0'>

  <tr>

    <td width='521' align='left' valign='top'>

      <table width='100%' border='0' cellspacing='0' cellpadding='0'>

        <tr>

          <td width='2%' height='20'>&nbsp;</td>

          <td width='97%' align='left' valign='top'>&nbsp;</td>

          </tr>

        <tr>

          <td height='74' bgcolor='#f6f6f6'>&nbsp;</td>

          <td bgcolor='#f6f6f6'><font face='Arial, Helvetica, sans-serif' size='9'><table width='757'  align='left'>

            <tr><td width='318' style='font-size:12px'></td>

            <td width='450'>&nbsp;</td></tr>

              <tr><td  style='font-size:12px'>Email</td>

            <td  style='font-size:12px'>". $email."</td></tr>

			<tr><td  style='font-size:12px'>comment</td>

            <td  style='font-size:12px'>". $comment."</td></tr>

  
  
           <tr><td colspan='2'>&nbsp;</td></tr>

            </table></font>            </tr>

        <tr>

        <td>

        </td>

        </tr>

        </table>

        </td>

  </tr>

  <tr>

    <td height='10'></td>

  </tr>

  </table>



    </td>

  </tr>

  <tr>

   <td colspan='2' height='4'></td>

    </tr>

    <tr>

   <td height='42' colspan='2' align='center' valign='middle' bgcolor='#f47b20'></td>

    </tr>

	</table>

	</td>

  </tr>

	</table>



    </td>

  </tr>

	</table>



    </td>

  </tr>

	</table>



	</body>

	</html>";

        /* $message="<html>
             <body>
             <table border='0' cellpadding='1' width='500' cellspacing='1'>
              <tr>
                <td><p>Name:</p>
              </td><td>".$Name.
               "</td></tr>

               <tr >
                 <td><p>Email :</p>
              </td><td>".$Email."
              </td></tr>

                <tr >
                  <td><p>Phone:</p>
              </td><td>".$Phone."
              </td></tr>

                 <tr>
                   <td><p>Comment:</p>
               </td><td>".$Comment."   </td></tr>
             </table>
             </body>
             </html>";*/


        $headers  = "From:".$email."\r\n";
        $headers.= "Content-type: text/html\r\n";
       
		$to="cenveo4@gmail.com";
		
        $subject= "Enquiry Details";

        mail($to, $subject, $message, $headers);
        $msg="Your message sent successfully";
		$this->index($msg);


    }



}
?>