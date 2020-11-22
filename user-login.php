<?php /* This file majorly has html content for form */?>

<html>
<head>
    <meta charset="UTF-8">
    <title> Login Page </title>
    <style>
        body 
        {   
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            font-size: 110%;
			background-color:HoneyDew;
        }
		.log
		{
			width:60%;
			position:relative;
			left:200px;
			background-color:Khaki;
		}
    </style>
</head>
    <body>
	<div class = "log">
    <h2 style="text-align: center"> Enter Name </h2>
        <form action='qz.php' method="POST" style="text-align: center;">
            <label for="user"> <b> Name </b> <br/>
                <input type="text" name="user" style="width: 300px; height: 30px;"> <br/> <br/> 
            </label>
            <label> 
                <input type="submit"name="log"value="Start Quiz" style="background-color:OldLace;width: 100px; height: 30px; font-size: medium;"> 
            </label>
        </form>
	</div>
    </body>
</html>