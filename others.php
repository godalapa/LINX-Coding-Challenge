<html>
<body>
<h1>The family Tree is as follows<br></h1>
Enter the name of the person from below to know their family relations and click on submit<br><br>
<FORM method="post" ACTION="others.php">
<input type="text" name ="t1" required>
<input type="submit" >
<br>

</FORM>
</body>
</html>

<?php   
	   
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "";                                  
    $db = "relatives";                                  
    $port = 3306;                                
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
	$count=0;
	$count1=0;
	$count2=0;
	$count3=0;
	$count4=0;
	$abc='';
	$var= $_POST["t1"];
	$result=null;
	$flag=0;
	
	$number1=0;
	$number="select Sno from families where family_title='$var'";
	$result1=mysqli_query($connection, $number);
	//echo"$result1";
	while ($row = mysqli_fetch_assoc($result1))
	{  
		 //echo"$result1";
		 foreach($row as $cell_name => $cell)
		 {
		//	echo "<td>$cell<br></td>";
			$number1=$cell;
			
		 }
	 }
	// echo"$number1";
	 
 $number2="select Sno from families";
	 $result2=mysqli_query($connection, $number2);
	//echo"$result1";
	while ($row = mysqli_fetch_assoc($result2))
	{  
		 
		 foreach($row as $cell_name => $cell)
		 {
			//echo "<td>$cell<br></td>";
			if($number1==$cell)
			{
				//echo"same";
			$flag=1;
			break;
			}
			else
			{
				//echo"not same";
			$flag=0;
			}
			
		 }
		 if($flag==1)
			 break;
		 
	 }
	
	
//	if($number!=null)
	//{
		if($flag==1)
		{
	$result1=mysqli_query($connection, $number);
	//echo"$result[0]";
	while ($row = mysqli_fetch_assoc($result1))
	{  
		 
		 foreach($row as $cell_name => $cell)
		 {
			//echo "<td>$cell<br></td>";
			$number1=$cell;
			
		 }
	 }
	//echo"$number1";
	echo "<br>";
       echo( "My Grandparents are <br>");
	   $query = "select r.name from relation r inner join families f on r.Id=f.Sno and r.id=$number1 where r.relationship='grandfather' or r.relationship='grandmother'";
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
				 on f.Sno=r.Id and r.Id=$number1  
				 where r.relationship='father' or r.relationship='mother'";
	   $result = mysqli_query($connection, $query);	   
	   while ($row = mysqli_fetch_assoc($result))
	   {
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
			$count1++;
		 }
	   }
	   if($count1==0)
		{
			echo("No data<br>");
		}
		echo "<br>";
		echo( "My Siblings are <br>");
       $query = "select r.Name from relation r inner join families f 
				 on f.Sno=r.Id and r.Id=$number1
				 where r.relationship='sibling'";
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
		
	   echo( "My Children are <br>");
       $query = "select r.Name from relation r inner join families f 
				 on f.Sno=r.Id and r.Id=$number1
				 where r.relationship='Children'";
	   $result = mysqli_query($connection, $query);	   
	   while ($row = mysqli_fetch_assoc($result))
	   {
		 foreach($row as $cell_name => $cell)
		 {
			echo "<td>$cell<br></td>";
			$count4++;
		 }
	   }
	   if($count4==0)
		{
			echo("No data<br>");
		}
		}
	else
	{
		echo "There's no one by this name in the family <br>";
	}
echo"<br>";	
echo "<a href=\"priyanka.php\">Back<br></a>";
echo "<a href=\"main3.php\">Home Page</a>";	
?>





