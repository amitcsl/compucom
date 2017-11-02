<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Status Since Last Active</title>
<?php
include("trip.php");
?>

<script language="javascript" src="includes/pages/jquery-1.9.1.js"></script>
<script language="javascript">


	
	function getUserReport(obj)
	{
		var unitid = obj[obj.selectedIndex].value;
		document.tripreport.unitid.value = unitid;
		var val = document.tripreport.need.value;
		var valto = document.tripreport.needto.value;		
		//alert("Hello "+unitid);
		$("#lastActiveStatus").load("includes/pages/tripreportDetails.php",{unitid:unitid,fromd:val,tod:valto});
	}
	
	function gohome()
	{
		//alert("Go home");
		$(location).attr('href', 'http://jantv.in/gps/')
	}

	function goBack() {
		window.history.back();
	}
</script>


<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	background: url(background.jpg);
	margin:0 auto;
	width:100%;
}
a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
a:visited {
	color: #666;
	font-weight:bold;
	text-decoration:none;
}
a:active,
a:hover {
	color: #bd5a35;
	text-decoration:underline;
}


/*
Table Style - This is what you want
------------------------------------------------------------------ */
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#222;
	font-size:12px;
	/*text-shadow: 1px 1px 0px #eee;*/
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border-collapse:collapse;
	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:8px 8px 12px 10px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;
	color:#4387fd;
	font-size:14px;
	letter-spacing:0px;
	background: #babafe;
	background: -webkit-gradient(linear, left top, left bottom, from(#fdfdff), to(#c1c1ff));
	background: -moz-linear-gradient(top,  #cbcbcb,  #ebebeb);
/*    background: -webkit-linear-gradient(top,#4387fd,#4683ea); */
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:20px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
	padding:6px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
/*	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
}
table tr.even td{
/*	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
*/}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #e2e2e2;
	color:#FFFFFF;
	font-size:12px;
	background: -webkit-gradient(linear, left top, left bottom, from(#777799), to(#aaaaff));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}
#statustd
{

}

#statustd:hover
{
	background-color:transparent;
}

.clickable
{
	color:blue;
	cursor:pointer;
}


#leftside
{
	position:absolute;	
	height:auto;
	width:55%;
	margin-left:1.5%;
}
#map_canvas
{
	top:20px;
	left:58%;
	position:fixed;
	height:460px;
	width:40%;
}
#pageheading
{
	color:#4387fd;
	font-size:16px;
	padding-left:18px;
}

#header_link
{
	cursor:pointer;
}
#td_back
{
	cursor:pointer;
	color:#0000FF;
}
#td_back:hover {
	background: #f00;
	color:#FFFFFF;
	font-size:16px;
	background: -webkit-gradient(linear, left top, left bottom, from(#aa4466), to(#ff99aa));
	background: -moz-linear-gradient(top,  #f24466,  #ff99aa);	
	
}


</style>

</head>

<body>
<form  method="post" action='#' name="tripreport" >

 <table width="98%" border="1" bgcolor="#F00FFF" style="margin-top:0px;">
 	<tr><td id="header_link" height="60px;" style="background-image:url(includes/pages/logo.jpg); background-repeat:no-repeat"  onclick='gohome()'></td>
		<td colspan="6" height="60px;" style="background-image:url(includes/pages/appname.jpg); background-repeat:no-repeat" ></td>
	</tr>
 	<tr  height="22px;">
		<td width="12%" id="pageheading" align="center" >Trip Report of </td>
		<td width="12%" id="pageheading" align="center" ><?php include("getUsersList.php"); ?></td>		
		<td >From</td> 
			<td >
			<div id="fromdatediv">
			<input type="hidden" name="unitid" id="unitid" value="<?php echo date('Y-m-d',strtotime("-1 days"));?>">
			<input type="hidden" name="need" id="need" value="<?php echo date('Y-m-d',strtotime("-1 days"));?>">
				<input type="text" name="fromdatetext" readonly="readonly" value="<?php echo date('Y-m-d',strtotime("-1 days"));?>" id="sel1" size="20"><input type="reset" value="... " onclick="return showCalendar('sel1', '%Y-%m-%d', '24', true);"> 
				</div>
			</td>	
			<td>To</td> 
			<td>
			<div id="todatediv">
			<input type="hidden" name="needto" id="needto" value="-1">			
				<input type="text" name="todatetimetext" readonly="readonly" id="sel2" size="20" value="<?php echo date('Y-m-d');?>"><input type="reset" value="... " onclick="return showCalendar('sel2', '%Y-%m-%d', '24', true);"> 
				</div>
			</td>
			<td id="td_back" width="6%"><a onclick="goBack()">BACK</a></td>
		</tr> 
	</table>	
   <div id="lastActiveStatus">
					<?php 
					$formd1 = date('Y-m-d',strtotime("-1 days"));	
					$tod1 =  date('Y-m-d');		
					$_GET["formd"] = $formd1;
					$_GET["tod"] = $tod1;	
					include("includes/pages/tripreportDetails.php");
				?>
   </div>
</form>   
</body>
</html>	