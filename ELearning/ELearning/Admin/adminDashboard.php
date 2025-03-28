<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
$totalcourse = $result->num_rows;

 $sql = "SELECT * FROM student";
 $result = $conn->query($sql);
 $totalstu = $result->num_rows;

 $sql = "SELECT * FROM courseorder";
 $result = $conn->query($sql);
 $totalsold = $result->num_rows;
?>
  <div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Courses</div>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $totalcourse; ?>
            </h4>
            <a class="btn text-white" href="courses.php">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Students</div>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $totalstu; ?>
            </h4>
            <a class="btn text-white" href="students.php">View</a>
          </div>
        </div>
      </div>
   
  
  
  </div>  <!-- div Row close from header -->
 </div>  <!-- div Conatiner-fluid close from header -->
<?php
include('./adminInclude/footer.php'); 
?>