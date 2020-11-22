<html>
<?php
$host="localhost"; //hostname
$username="root"; //username
$password=""; //password
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
$result = mysqli_query($con,"CREATE DATABASE  quizdbase1");
if (!$result)
echo "Database not created" . mysqli_error($con);
else
echo "";
if (!mysqli_select_db($con,'quizdbase1')) {
    echo '';
}else 
	echo '';
 $sql = "CREATE TABLE questions( ".
            "qid INT(120) NOT NULL AUTO_INCREMENT PRIMARY KEY,".
            "question VARCHAR(2000) NOT NULL,".
			"ans_id INT(120))";
         mysqli_select_db( $con,'quizdbase1' );
         $retval = mysqli_query( $con,$sql );
         
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 $sql1 = "CREATE TABLE answers( ".
            "aid INT(120) AUTO_INCREMENT PRIMARY KEY, ".
            "answer VARCHAR(2000) NOT NULL,".
			"ans_id INT(120))";
         mysqli_select_db( $con,'quizdbase1' );
         $retval1 = mysqli_query( $con,$sql1 );
         if(! $retval1 ) {
            die('Could not create table: ' . mysqli_error($con));
         }
	$q1 = 'HTML ful form';
	$a1 =1;
	$q2 = 'CSS full form';
	$a2 ='5';
	$q3="SQL full form";
	$a3=9;
	$q4="JS full form";
	$a4=13;
	$sql2= "INSERT INTO questions". 
   " (question,
	ans_id)".
"VALUES".
    "(
	'$q1',
	'$a1'  
    ),
    (
     '$q2', 
	'$a2'  
    ),
	(
     '$q3', 
	'$a3'  
    ),
	(
     '$q4', 
	'$a4'  
    )";
               mysqli_select_db($con,'quizdbase1');
            $retval2 = mysqli_query($con,$sql2 );
			 if(! $retval2 ) {
               die('Could not enter data: '.mysqli_error($con));
            }
$an1 = 'Hypertext Markup Language';
	$a1 =1;
	$an2 = 'Hometext Markup Language';
	$a2 =1;
	$an3="Helptext Markup Language";
	$a3=1;
	$an4="Hypertext Markingup Language";
	$a4=1;
	$an5 = 'Cascading Style Sheets';
	$a5 =2;
	$an6 = 'Cascading Sheets of Style';
	$a6 =2;
	$an7="Cascad Style Sheets";
	$a7=2;
	$an8="Cascading Style with Sheets";
	$a8=2;
	$an9 = 'Structured query language';
	$a9 =3;
	$an10 = 'Structured queries language';
	$a10 =3;
	$an11="Structures with query language";
	$a11=3;
	$an12="Structure of query language";
	$a12=3;
	$an13= 'Javascript';
	$a13=4;
	$an14 = 'Javascripted';
	$a14=4;
	$an15='Javascripts';
	$a15=4;
	$an16='Javascrews';
	$a16=4;
	$sql3= "INSERT INTO answers". 
   " (answer,
	ans_id)".
"VALUES".
    "(
	'$an1',
	'$a1'  
    ),
    (
     '$an2', 
	'$a2'  
    ),
	(
     '$an3', 
	'$a3'  
    ),
	(
     '$an4', 
	'$a4'  
    ),
	(
     '$an5', 
	'$a5'  
    ),
	(
     '$an6', 
	'$a6'  
    ),
	(
     '$an7', 
	'$a7'  
    ),
	(
     '$an8', 
	'$a8'  
    ),
	(
     '$an9', 
	'$a9'  
    ),
	(
     '$an10', 
	'$a10'  
    ),
	(
     '$an11', 
	'$a11'  
    ),
	(
     '$an12', 
	'$a12'  
    ),
	(
     '$an13', 
	'$a13'  
    ),
	(
     '$an14', 
	'$a14'  
    ),
	(
     '$an15', 
	'$a15'  
    ),
	(
     '$an16', 
	'$a16'  
    )";
             mysqli_select_db($con,'quizdbase1');
            $retval3 = mysqli_query($con,$sql3 );
			 if(! $retval3 ) {
               die('Could not enter data: '.mysqli_error($con));
            }
	?>
	<form action="user-login.php" method="POST" style="text-align: center;">
			<input type = "submit" value="Login Page" style="width: 100px; height: 30px; font-size: medium;background-color:FloralWhite">
	</form>
	<?php
	mysqli_close($con);

?>
</html>