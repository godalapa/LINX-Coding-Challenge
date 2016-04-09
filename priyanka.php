<html>
<body>
<h1>My family Tree is as follows<br></h1>
Enter the name of the person from below to know their family relations and click on Submit<br><br>

<FORM method="post" ACTION="others.php">
<input type="text" name ="t1" required>
<input type="submit" >
<br>
</FORM>
</body>
</html>
<?php

	session_start();    
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "";                                  
    $db = "relatives";                                  
    $port = 3306;                                
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
	$count=0;
	$abc='';
	$count=0;
	$count2=0;	
 // if(isset($_POST['gp']))
	//{
		//echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
      // echo( "My Grandparents are <br>");
	   //$abc= $_SERVER['REQUEST_URI']; 
//echo"$abc<br>"; 
//print_r(str_split("$abc"));
//echo"$abc<br>";
 //$var=explode(".",explode("/",$abc)[2])[0];
 //echo"$var<br>";
 echo "<br>";
 echo("My grandparents are<br>");
 $query = "select r.name from relation r inner join families f on r.Id=f.Sno and r.id=1 where r.relationship='grandfather' or r.relationship='grandmother'";
	   $result = mysqli_query($connection, $query);	  
		
		
	   while ($row = mysqli_fetch_assoc($result))
	   {  
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
			$count++;
		 }
	   }
		
		if($count==0)
		{
			echo("No data<br>");
		}
	  
	   echo "<br>";
	   echo( "My Parents are <br>");
       $query = "select r.Name from relation r inner join families f 
				 on f.Sno=r.Id and r.Id=1
				 where r.relationship='father' or r.relationship='mother'";
	   $result = mysqli_query($connection, $query);	   
	   while ($row = mysqli_fetch_assoc($result))
	   {
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
		 }
	   }
		echo "<br>";
		echo( "My Siblings are <br>");
       $query = "select r.Name from relation r inner join families f 
				 on f.Sno=r.Id and r.Id=1
				 where r.relationship='sibling'";
	   $result = mysqli_query($connection, $query);	   
	   while ($row = mysqli_fetch_assoc($result))
	   {
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
		 }
	   }
	
echo "<br>";	   
	   echo( "My Children are <br>");
       $query = "select r.Name from relation r inner join families f 
				 on f.Sno=r.Id and r.Id=1
				 where r.relationship='children'";
	   $result = mysqli_query($connection, $query);	   
	   while ($row = mysqli_fetch_assoc($result))
	   {
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
			$count2++;
		 }
	   }
	   if($count2==0)
		{
			echo("No data<br>");
		}
echo "<br>";
		echo "<a href=\"main3.php\">Home Page</a>";	
?>





