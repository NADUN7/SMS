<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $id=$_GET['registration_number'];
      $course_id=$_GET['course_id'];
      $sql="SELECT * FROM course WHERE registration_number='$id'AND course_id= '$course_id'";
      $result=mysqli_query($data,$sql);
      $info=$result->fetch_assoc();


      if(isset($_POST['update']))
      {
        $marks=$_POST['marks'];
      

          $query="UPDATE course set marks='$marks' WHERE registration_number='$id'AND course_id= '$course_id' ";
          $result2=mysqli_query($data,$query);

          if($result2)
        {
           header("location:stCourse.php?registration_number=$id");
           exit();
        }
       

    }




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<header class="header">
		
		<a href="">Admin Dashboard</a>

		<div class="logout">
			
			<a href="logout.php" class="btn btn-primary">Logout</a>

		</div>

	</header>


	<aside>
		
    <ul>
			
			<li>
				<a href="adminhome.php">Home</a>
			</li>

			<li>
				<a href="add_student.php">Add Student</a>
			</li>

			<li>
				<a href="view_student.php">View Student</a>
			</li>

			<li>
				<a href="add_course.php">Add Courses</a>
			</li>
			<li>
				<a href="view_course.php">View Courses</a>
			</li>


		</ul>


	</aside>


	<div class="content">
		
		<h1>Update Marks</h1>

        <div>
            <form action="#" method="POST">
               <div>
                    <lable>Registration Number</lable>
                    <input type="text" name="marks" value="<?php echo "{$info['marks']}";  ?>">
               </div>
               
              
               <div>
                    <input type="submit" name="update" value="AddMarks">
               </div>





            </form>



	</div>

</body>
</html>
