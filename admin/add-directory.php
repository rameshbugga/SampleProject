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
    //$admsta=1;
     
    $query=mysqli_query($con, "insert into  tbldirectory(FullName,Profession,Email,MobileNumber,BusName,BusPhNo,UnitSerialNo,UnitCatagory,Address,City,Status,Comments) value('$fullname','$profession','$email','$mobilenumber','$busname','$busphno','$unitserialno','$unitcategory','$address','$city','$status','$comments')");
    if ($query) {
    $msg="Person detail has been added.";
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
  
  <script src="js/function.js" type="text/javascript"></script>
     
     

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
          <li class="breadcrumb-item active">Add Directory</li>
        </ol>
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
        <!-- Icon Cards-->
        
        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
       
        <form name="form1">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="fullname" name="fullname" class="form-control"  maxlength="30" required="required" autofocus="autofocus">  
                  <label for="firstName">Full Name (less then 30 characters)</label>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="profession" name="profession" class="form-control" maxlength="30"  required="required">
                  <label for="lastName">Profession (less then 30 characters)</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="mobilenumber" name="mobilenumber" maxlength="15" class="form-control"  required="required">
                  <label for="inputPassword">Mobile Number (less then 15 characters)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control"  maxlength="30" required="required">
                  <label for="inputEmail">Email address (less then 30 characters)</label>
                </div>
              </div>
              
            </div>
          </div>
            
            
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="busname" name="busname"  class="form-control" maxlength="30" required="required">
                  <label for="busname">Business Name (less then 30 characters)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="busphno" name="busphno" class="form-control" maxlength="15" required="required">
                  <label for="busphno">Business Phone Number (less then 15 characters)</label>
                </div>
              </div>
              
            </div>
          </div>
            
        
                
            
            
            
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="unitcategory" name="unitcategory" class="form-control" maxlength="15" required="required">
                  <label for="unitcategory">Terminal Category (less then 15 characters)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="unitserialno" name="unitserialno" class="form-control" maxlength="20" required="required">
                  <label for="unitserialno">Terminal Serial No(less then 20 characters)</label>
                </div>
              </div>
          </div>
          </div>
            
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="address" name="address" class="form-control" maxlength="50" required="required">
              <label for="address">Address (less then 50 characters)</label>
            </div>
          </div>
            
            
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="text" id="city" name="city" class="form-control" maxlength="30" required="required">
                 <label for="city">City (less then 30 characters)</label>
                  
               </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                    
                  <select  id= "status" name="status"  class="form-control" required="required">
                       <option value="0">Select Customer Type</option> 
                       <option  value="Dealer">Dealer</option>
                        <option  value="Corporate">Corporate</option>
                       
                </select>    
                </div>
              </div>
             
                
            </div>
          </div>
          
            
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="comments" name="comments" class="form-control" maxlength="120" required="required">
              <label for="comments">Comments (less then 120 characters)</label>
            </div>
          </div>     
            
            
            
         <p style="text-align: center; "><button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">ADD</button></p>
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