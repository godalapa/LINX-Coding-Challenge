# LINX-Coding-Challenge
PHP Coding Challenge

Objective - To create web pages to display information from a database of a family of multiple parents and multiple children.

Technology Used - PHP, MySQL,Xampp Server

Background - I have initially created a database called relatives which has two tables Families and Relation. The Families table consists of the family members and Relation table consists of the relationship type between the family members.

Functioning of the Website - The main Page displays my name “Priyanka” and on clicking we are directed to the page with all the family relations for Priyanka, like Grandparents, Parents, Siblings and Children. 
Here we are prompted with a text box where you can enter a name from the relations which retrieves the information of their family.

Since the Family Tree can be huge, I have just considered three Generations i.e., Grandparents, Parents, Siblings and Children. I have just displayed values limited to these relations for each person.

Code Explained – 

•	The first page is main3.php file

•	The main3.php file is connected to the families table, here you can click on the person “Priyanka” 

•	The priyanka.php page is executed where all my relations are displayed. 

•	A text box is provided where you can enter the name of the person whose relations you want to display, this redirects the others.php which displays all the relations of the persons in the database.



