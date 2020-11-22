<html>
<body style="background-color:LightGray">
<div style="width:80%;height:50px;background-color:Aliceblue;text-align:center;box-sizing: border-box;margin:0 100px 1px 100px;padding:15px 5px 5px 0;font-size:200%">Result Page</div>
<?php
$con = mysqli_connect('localhost','root','');
if (!$con) {
    echo 'Not Connected To Server';
}

if (!mysqli_select_db($con,'quizdbase1')) {
    echo 'Database Not Selected';
}else 
	echo '';
?>

<?php
if(isset($_POST['sub']))
	{
		?>
		<div style="width:80%;height:50px;background-color:Aqua;text-align:center;box-sizing: border-box;margin:0 100px 1px 100px;padding:15px 5px 5px 0;">
		<?php
		if(!empty($_POST['ans']))
			{ $count = count($_POST['ans']);
				$selected = $_POST['ans'];
				$sql1 = "SELECT *FROM questions";
			   $retval1 = mysqli_query(  $con,$sql1 );
			   if(! $retval1 ) 
			   {
				  die('Could not get data: ' . mysqli_error($con));
			   }
			   $i=1;
			   $result = 0;
			   while($row = mysqli_fetch_array($retval1, MYSQLI_ASSOC)) 
				{
				  if(isset($selected[$i]) &&$row['ans_id'] == $selected[$i])
				  {
					  $result++;
				  }
				  $i++;
				}
				echo $result."/"."4";
				?>
			<form action="qz.php" method="POST">
			<input type="submit" name="sub1" style="background-color:yellow;margin-top :15px;width: 100px; height: 30px; font-size: medium;" value="Restart Quiz">
			</form>
			</div>
			<?php
			}
			else
			{
				echo "0"."/"."4";
				?>
			<div >
				<form action="qz.php" method="POST">
				<input type="submit" name="sub1" style="background-color:yellow;margin-top :15px;width: 100px; height: 30px; font-size: medium;" value="Restart Quiz">
				</form>
			</div>
				<?php
			}
			
	}
	?>
	</body>
</html>