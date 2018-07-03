<?
include 'ck.php';

$sid=$_POST[sl];
$name=$_POST[nm];
$cont=$_POST[cont];
$roll=$_POST[rl];
$cls1=$_POST[cls1];
$sec=$_POST[sec];

if($name=="" or $roll=="" or $cls1=="" or $sec=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query = "UPDATE stud SET nm='$name',cont='$cont',roll='$roll',scls='$cls1',sec='$sec' where sl='$sid'";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Updated!');
document.location="index.php";
</script>
<?
}
?>