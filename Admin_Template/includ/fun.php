<?php 
include('db.php');

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
function generateUSNM($digits = 6){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

function generateTIC($digits = 5){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
function welcomemail($to,$sub,$nm,$pass)
{
	$to =$to ;
	$nm =$nm ;
	$pass =$pass ;
$subject = $sub;

$message = "
<html>
<head>
<title>Registration Successfull</title>
</head>
<body>
<img src='../img/logo.png'/>
<h2>Thank you </h2>". $to ."
</br><h4>for your quick response & welcome to the Reals Time world.

you will get another mail from us very soon for your user id and password.</h4></br><p> We will back soon with exciting discounts in all kolhapur shops, malls, medical, hospitals, service providers etc. Stay tune with us</p>
<p>Note Down Your Login Details</p>
<table>
<tr>
<th>Full Name</th>
<th>Email</th>
<th>Password</th>
</tr>
<tr>
<td>". $nm ."</td>
<td>". $to ."</td>
<td>". $pass ."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: support@realstime.com' . "\r\n";
$headers .= 'Bcc: rohitchandane101@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
function checkmail($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE email='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkusernm($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE usernm='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkProfileEmail($mails)//check mails exist in newmember table.
{
	$mails=$mails;
	$sql="SELECT * FROM  `newmember`  WHERE email='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkProfileMob($mobile)//check mobile exits in newmember table.
{
	$mails=$mobile;
	$sql="SELECT * FROM  `newmember`  WHERE  mobile='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}

function checkmob($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE  mobno='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checklogin($mails,$pass)
{
	$mails=$mails;
	$pass=$pass;
	$sql="SELECT * FROM  `register`  WHERE email='$mails' AND password='$pass'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkloginm($mails,$pass)
{
	$mails=$mails;
	$pass=$pass;
	$sql="SELECT * FROM  `register`  WHERE mobno='$mails' AND password='$pass'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function getmailm($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE mobno='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
			
		 }
function getmailu($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
			
		 }
		 function getNewMembermail($val1)
		 {
		 	$val1=$val1;
			$sql="SELECT * FROM  `newmember`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
		}
			
		 function getmailua($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `admin_user`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
			
		 }
		 function getaf1($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			//echo $sql;
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_1'];
			
		 }
		function getaf2($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			//echo $sql;
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			//echo $row['affid_2'];
			return $row['affid_2'];
			
		 } 
		 function getaf3($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_3'];
			
		 }
		function getaf4($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_4'];
			
		 }
		 function getaf5($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_5'];
			
		 }
		 function getaf6($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_6'];
			
		 }
		 function getaf7($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_7'];
			
		 }
		 function getaf8($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_8'];
			
		 }
		 function getaf9($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_9'];
			
		 }
		 function getaf10($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_10'];
			
		 } 
		 function getaf11($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_11'];
			
		 } 
		 function getaf12($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_12'];
			
		 } 
		 function getaf13($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_13'];
			
		 } 
		 function getaf14($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_14'];			
		 }
		function getlevel($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['level_pos'];			
		 }
		 function getimg($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['photo'];			
		 }  
		 function agetimg($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `admin_user`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['photo'];			
		 } 
		 function getname($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['name'];			
		 } 
		 function getaname($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `admin_user`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['fullname'];			
		 } 
		 function getnewMemberName($val1)
		 {
		 	$val1=$val1;
			$sql="SELECT * FROM  `newmember`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$fnm=$row['firstname'];
			$lnm=$row['lastname'];
			return "$fnm"."$lnm";			
		 
		 }
		 function getmob($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['mobno'];			
		 } 
		 function getNewMemberMob($val1)
		 {

			$val1=$val1;
			$sql="SELECT * FROM  `newmember`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['mobile'];			
		 } 
		 
		 function unpaidamt($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `selfpay`  WHERE usrnm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['Amount_unpaid'];			
		 }
		 function totalamt($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `selfpay`  WHERE usrnm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['tot_amt'];			
		 }
		 function totmemb($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM `btree` WHERE `affid_1`='$val1' OR `affid_2`='$val1' OR `affid_3` ='$val1' OR `affid_4`='$val1' OR `affid_5`='$val1' OR `affid_6` ='$val1' OR `affid_7`='$val1' OR `affid_8`='$val1' OR `affid_9` ='$val1' OR `affid_10`='$val1' OR `affid_11`='$val1' OR `affid_12` ='$val1' OR `affid_13`='$val1' OR `affid_14`='$val1' OR `affid_15` ='$val1' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;		
		 }
		 function selfpays($val1,$val2,$val3,$val5)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$unpdamt=$val2;
			$dt=$val3;
			$pdby=$val5;
			$sql="SELECT * FROM  `selfpay`  WHERE usrnm='$val1'"; 
			//echo $sql;
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$unpdamt1=$row['Amount_unpaid']+$unpdamt;
			$totamt=$row['tot_amt']+$unpdamt;
			
			$sql1="UPDATE selfpay SET Amount_unpaid='$unpdamt1' ,Date='$dt' ,tot_amt='$totamt',Paid_by='$pdby' WHERE usrnm='$val1'"; 
			mysql_query($sql1);
			//echo $sql1;
			return 1;			
		 }
		
		function paylogs($val1,$val2,$val3)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$val2=$val2;
			$val3=$val3;
			$sql="insert into pay_log(paidby,paidto,amount)values('$val1','$val2','$val3')";
			mysql_query($sql);
			//echo $sql;
			return 1;			
		 }
		 function qualification($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['name'];			
		 } 
		 function level($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['level_pos'];			
		 }
		 function quali($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['qualification'];			
		 } 
		 function recognition($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `award`  WHERE aw_name='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['recognition'];			
		 } 
		 function getmaxid($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `$val1`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $count+1;			
		 }  
		 function getaddress($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  register WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $row['address'];			
		 } 
		 function gettotagent($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  register'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $count;			
		 }
		 function gettotmemb($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  newmember'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $count;			
		 } 
		  function totagent($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM `btree` as total"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;		
		 } 

function generateEMPID($digits = 4){
    $i = 0; //counter
    $empid = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $empid .= mt_rand(0, 9);
        $i++;
    }
    return $empid;
}	
function getadminname($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `admin_user`  WHERE fullname='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['fullname'];			
		 } 
		  function getdateum($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `newmember`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['regdt'];
			
		 }
		  function getpackage($val1)//for Collecting the the service Tax
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `comission` WHERE id='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $row['pacgval'];			
		 }   
		  function getservicetax($val1)//for Collecting the the service Tax
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `comission` WHERE id='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $row['servicetax'];			
		 }   
		 function selfpaysm($val1,$val2,$val3,$val5)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$unpdamt=$val2;
			$dt=$val3;
			$pdby=$val5;
			$sql="SELECT * FROM  `selfpaym`  WHERE usrnm='$val1'"; 
			//echo $sql;
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$unpdamt1=$row['Amount_unpaid']+$unpdamt;
			$totamt=$row['tot_amt']+$unpdamt;
			
			$sql1="UPDATE selfpaym SET Amount_unpaid='$unpdamt1' ,tot_amt='$totamt',Paid_by='$pdby' WHERE usrnm='$val1'"; 
			mysql_query($sql1);
			//echo $sql1;
			return 1;			
		 }
		 function paylogsm($val1,$val2,$val3)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$val2=$val2;
			$val3=$val3;
			$sql="insert into pay_logm(paidby,paidto,amount)values('$val1','$val2','$val3')";
			mysql_query($sql);
		//	echo $sql;
			return 1;			
		 }
		 function getnetamt($val1)//for Collecting the the NetReceipt Amt
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `comission` WHERE id='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $row['netamt'];				
		 }  
		  function getpackagenm($val1)//for Collecting the the service Tax
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `comission` WHERE id='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$count=mysql_num_rows($result);
			return $row['pacgnm'];			
		 }   
		 function getregdt($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['regdate'];			
		 }
		 function getNewRegdt($val1)
		 {
		 	$val1=$val1;
			$sql="SELECT * FROM  `newmember`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['regdt'];		
		 }
          function getdateagent($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['regdate'];
			
		 }
		 //New Function
		 
		 
		 	$paidAmt;
	$paidTax;
	function getTotalAgentCount()
	{
	   
			$sql="SELECT * FROM  `register`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count;			
	}
	
	function getTotalProfileCount()
	{
	   
			$sql="SELECT * FROM  `newmember`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);	
			return $count;	
	}
	
	function getUnpaidAgentCount()
	{
	   
			 $sql="SELECT * FROM  `register` where is_paid='0'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count;
	}
	
	function getUnpaidProfiles()
	{
	   
			$sql="SELECT * FROM  `newmember` where `status`='0'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count;
	}
	
	function getUncheckedTickets()
	{
	   
			 $sql="SELECT * FROM  `suporttic` where status='0'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
	}
	
	function getAgentTotalTax()
	{
	   
			 $sql="SELECT ROUND(sum(servtax),2) AS val_sum FROM `inreceipt`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_assoc($result);
			$paidTax=$row['val_sum'];
			return $paidTax;
	}
	
	function getPaidAgentCount()
	{
	   
			 $sql="SELECT * FROM  `register` where is_paid='1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count;
	}
	
	function getPaidProfiles()
	{
	   
			$sql="SELECT * FROM  `newmember` where `status`='1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count;
	}
	
	
	function getCheckedTickets()
	{
	   
			$sql="SELECT * FROM  `suporttic` where status='1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
	}
	
	function getPaidAgentAmt()
	{
	   
			$sql="SELECT ROUND(sum(amt),2) AS val_sum FROM `inreceipt`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_assoc($result);
			$paidAmt=$row['val_sum']; 
			return $paidAmt;
	}
	
	function getAgentBusinessValue()
	{
	   		$sql1="SELECT ROUND(sum(amt),2) AS val_sum FROM `inreceipt`"; 
			$result1=mysql_query($sql1);
			if($result1==false ){die(mysql_error());}
			$row1=mysql_fetch_assoc($result1);
			$paidAmt=$row1['val_sum']; 
			
			$sql2="SELECT ROUND(sum(servtax),2) AS val_sum FROM `inreceipt`"; 
			$result2=mysql_query($sql2);
			if($result2==false ){die(mysql_error());}
			$row2=mysql_fetch_assoc($result2);
			$paidTax=$row2['val_sum'];
			 
			return $paidAmt-$paidTax;
	}
	
	function getNotPaidAgentAmt()
	{
	   
			
			$sql="SELECT * FROM  `register` where is_paid='0'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result); 
			return $count*2951.00;
	}
	
	function getPaidProfileAmt()
	{
	   
			$sql="SELECT ROUND(sum(amt),2) AS val_sum FROM `inreceipt`"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_assoc($result);
			$paidAmt=$row['val_sum']; 
			return $paidAmt;
	}
	function agetmailu($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `admin_user`  WHERE username='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
			
		 }
	
	
	function getAgentCommission()
	{
		$at=0;
			for($i=1;$i<=15;$i++)
			{
					
				//$c=$_GET['level_pos'];
		$sql="SELECT level_pos FROM btree WHERE level_pos='$i'";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			$temp="pay".$i;
			$sql2="SELECT $temp FROM comission WHERE id='1'"; //1 is for agent 2is for profile
			$result1=mysql_query($sql2);
			//echo $sql2;
			
			$row=mysql_fetch_array($result1);
			//$comm=($row['pay1']);
			//echo $row;
			//$result1=count($result);
			//$result1=mysql_query($sql1);
				if ($result==false)
				{
					die(mysql_error());
				}
				 
				 $t=$count*($row[$temp]);
				 $at=$at+$t;
				//$count=mysql_num_rows($result);
				 //for($i=0;$i<=$count-1;$i++){ 
				//$row=mysql_fetch_array($result);
				//$row1=mysql_fetch_array($result1);	
		}
		return $at;
	}
	
  ?>