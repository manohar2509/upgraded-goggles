<html>
<head>
	<style>
		.container
		{
			width:60%;
			position:relative;
			left:100px;
			background-color:yellow;
			border-style: dotted;
		}
		.topbar{
			width:80%;
			height:50px;
			background-color:red;
			text-align:center;
			padding:15px 5px 5px 0;
			font-size:200%;
			box-sizing: border-box;
			margin:0 100px 1px 100px;
			align:center;
			border-style: dashed;
		}
			body {
                
                margin: 0;
                padding: 0;
                font-family: Helvetica, Arial, sans-serif;
				background-color:Cyan;
                
            }
		}
	
	
	</style>

</head>
<?php
function quiz()
{
	$con = mysqli_connect('localhost','root','');
if (!$con) {
    echo 'Not Connected To Server';
}

if (!mysqli_select_db($con,'quizdbase1')) {
    echo 'Database Not Selected';
}else 
	echo '';
	?>
	<div class = "topbar">Here is the online quiz</div>
	<?php
		$i=0;
for ($i=1;$i<5;$i++){
	$k=(int)$i;
$sql1 = "SELECT *FROM questions where qid = $k";
   $retval1 = mysqli_query(  $con,$sql1 );
   if(! $retval1 ) {
      die('Could not get data: ' . mysqli_error($con));
   }
   ?>
   <div class = "container">
   <?php
   while($row = mysqli_fetch_array($retval1, MYSQLI_ASSOC)) {
      echo $k."."."{$row['question']}  <br> ";
   } 
   $sql2 = "SELECT *FROM answers where ans_id = $k";
   $retval2 = mysqli_query($con,$sql2);
   if(! $retval2 ) {
      die('Could not get data: ' . mysqli_error($con));
   }
   $k=0;
   while($row1 = mysqli_fetch_array($retval2, MYSQLI_ASSOC)) {
	  ?>
	  <form action="check.php" method="POST">
		<input type="radio" name="ans[<?php echo $row1['ans_id']; ?>]" value="<?php echo $row1['aid']; ?>">
	  <?php
      echo ++$k." :{$row1['answer']}  <br> ";
   }
   ?>
   </div>
   <?php
   
}
	?>
	<input type="submit" name="sub" value="submit" style = "width: 100px; height: 30px; font-size: medium;margin:10px 0 0 450px;background-color:blue">
	</form>
	<?php
	mysqli_close($con);
}
if(isset($_POST['log'])){
	$user = $_POST['user'];
	if($user != "")
		quiz();
	else
	{
		?><div class = "topbar">Please Enter Your name
		<form action="user-login.php" method="POST">
				<input type = "submit" value="Login Page" style="background-color:Ivory;width: 100px; height: 30px; font-size: medium;">
		</form>
		</div>
<?php
		
	}
}
else if(isset($_POST['sub1']))
{
quiz();
}

  
?>
</html>