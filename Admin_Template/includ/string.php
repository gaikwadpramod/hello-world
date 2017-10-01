<?php 
$maintitle="||  Home ";
session_start();
if(isset($_SESSION["username"]))
{
	$user=$_SESSION["username"];
	//echo $user;
	$jn="LOGOUT";
	$jnr="logout.php";
	if(isset($_SESSION["mid"]))
	{
		
		$menu=$_SESSION["mid"];
		//echo $user;
		if($menu==0)
		{
			$menunm="adminmenu.php";
		}
		else if($menu==1)
		{
			$menunm="supportmenu.php";
		}
		else if($menu==2)
		{
			$menunm="accountmenu.php";
		}
		else if($menu==3)
		{
			$menunm="adminmenu.php";
		}
		
	}
	else
	{
		$menunm="";
	}

}
else
{
	$user="Visitors";
	$jn="JOIN US";
	$jnr="register.php";
}

$name="Shubhvivah";
$treetabl="table6";
$t1e1="name";
$t1e2="email";
$t1e3="mobno";
$t1e4="isapprove";
$t1e5="regdt";
$t1e6="level";
$t1e7="password";
$t1e8="regloc";
$tabl2="venderreg";
$t1e9="shname";
$t1e10="catid";

$ststax=457.40;
$packg=2951;
$pay1=374.1;
$pay2=124.7;
$pay3=74.82;
$pay4=74.82;
$pay5=49.88;
$pay6=37.41;
$pay7=37.41;
$pay8=24.94;
$pay9=24.94;
$pay10=24.94;
$pay11=18.70;
$pay12=18.70;
$pay13=12.47;
$pay14=12.47;
$pay15=12.47;

?>