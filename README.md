# Task-2-Robot-Direction
Task 2 in IoT

This task is to design a web page to move the robot. The direction should be saved in the database to be used later. 

##  3 files used in this task 2 is HTML and 2 php. Also There is a picture of the database table :


### The Task2Direction.html contain :

the design of the page using HTML tags, this page will be used by the user to control the robot remotely. its contains 5 buttons (Forward, Backward, Right, Left, Stop).

### The Task2Directionphp.php contain :

a php code that include 1 variable. its used to hold the value (the direction that user select). Also, the database connection and the query used to insert the values in the database.

### The Task2Datafromdb.php :

this page will show the last data inserted in the database each time the user request the page.
 Also, the code of this page include the database connection and the query used to retrieve the last values from the database.

### The Database table.png :

show table that contains 2 columns which are (id, direction) the data type of the id is integer and string for the direction.
the table save only letters so : 
* F = Forward
* B = Backward
* R = Right
* L = Left
* S = Stop
