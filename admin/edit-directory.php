<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
        
    $fullname=$_POST['fullname'];
    $profession=$_POST['profession'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $busname=$_POST['busname'];
    $busphno=$_POST['busphno'];
    $unitcategory=$_POST['unitcategory'];
    $unitserialno=$_POST['unitserialno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $status=$_POST['status'];
    $comments=$_POST['comments'];
     $pdid=$_GET['editid'];
  
    $query=mysqli_query($con, "update tbldirectory set FullName='$fullname',Profession='$profession',Email='$email',MobileNumber='$mobilenumber',BusName='$busname',BusPhNo='$busphno',UnitCatagory='$unitcategory',UnitSerialNo='$unitserialno',Comments='$comments',Address='$address',City='$city',Status='$status' where ID=$pdid");
    if ($query) {
    $msg="Record has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CDMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">



    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Record</li>
        </ol>
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
        <!-- Icon Cards-->
        
        <!-- Area Chart Example-->
  <?php
 $pdid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tbldirectory where ID='$pdid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      

        <!-- DataTables Example -->
        <form name="directory" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="fullname" name="fullname" class="form-control"  required="required" autofocus="autofocus" value="<?php echo $row['FullName'];?>">
                  <label for="firstName">Full Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="profession" name="profession" class="form-control"  required="required" value="<?php echo $row['Profession'];?>">
                  <label for="lastName">Profession</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="mobilenumber" name="mobilenumber" maxlength="10" class="form-control"  required="required" value="<?php echo $row['MobileNumber'];?>">
                  <label for="inputPassword">Mobile Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control"  required="required"  value="<?php echo $row['Email'];?>">
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              
            </div>
          </div>
            
            
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="busname" name="busname"  class="form-control"  required="required" value="<?php echo $row['BusName'];?>">
                  <label for="busname">Business Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="busphno" name="busphno" class="form-control"  required="required" value="<?php echo $row['BusPhNo'];?>">
                  <label for="busphno">Business Phone Number</label>
                </div>
              </div>
              
            </div>
          </div>
            
        
                
            
            
            
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="unitcategory" name="unitcategory" class="form-control"  required="required" value="<?php echo $row['UnitCatagory'];?>">
                  <label for="unitcategory">Terminal Category</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="unitserialno" name="unitserialno" class="form-control"  required="required" value="<?php echo $row['UnitSerialNo'];?>">
                  <label for="unitserialno">Terminal Serial No</label>
                </div>
              </div>
          </div>
          </div>
            
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="address" name="address" class="form-control"  required="required" value="<?php echo $row['Address'];?>">
              <label for="address">Address</label>
            </div>
          </div>
            
            
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="city" name="city" class="form-control"  required="required" value="<?php echo $row['City'];?>" >
                 <label for="city">City</label>
                  
               </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                    <select  id= "status" name="status"  class="form-control" style="width:500px;" required="required" >
                            <option value="0"><?php echo $row['Status'];?></option>
                            <option  value="Dealer">Dealer</option>
                            <option  value="Corporate">Corporate</option>
                           
                </select>    
                </div>
              </div>
              
            </div>
          </div>
          
            
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="comments" name="comments" class="form-control"  required="required" value="<?php echo $row['Comments'];?>">
              <label for="comments">Comments</label>
            </div>
          </div>     
            
            
          <?php } ?>  
         <p style="text-align: center; "><button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Update</button></p>
        </form>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
<?php }  ?>