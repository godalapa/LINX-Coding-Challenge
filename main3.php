<?php   
    
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "";                                  
    $db = "relatives";                                  
    $port = 3306;                                
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
	
    $query = "SELECT family_title FROM families where Sno=1";
    $result = mysqli_query($connection, $query);
	echo "<table><tr><th>My name is<br><br></th></tr>";
    while ($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		  
	
    foreach($row as $cell_name => $cell){
		
       		
		echo "<td><a href=\"$cell.php\">$cell<br><br></a></td>";
			
		}
			
		    echo "</tr>\n";
}
echo "</table>";
echo "Click above to know further";


