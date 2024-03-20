<?php

if(isset($_POST["submit"])){
 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandboxapicdc.cisco.com/api/aaaLogin.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER=> 0, // Skip SSL Verification
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "aaaUser" : {
    "attributes" : {
      "name" : "admin",
      "pwd" : "!v3G@!4@Y"
} }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain',
    'Cookie: APIC-cookie=eyJhbGciOiJSUzI1NiIsImtpZCI6InRsc3NwdnVsMjVyNnZvdW5mOTA5ZWN2Mm9xYjRsOWluIiwidHlwIjoiand0In0.eyJyYmFjIjpbeyJkb21haW4iOiJhbGwiLCJyb2xlc1IiOjAsInJvbGVzVyI6MX1dLCJpc3MiOiJBQ0kgQVBJQyIsInVzZXJuYW1lIjoiYWRtaW4iLCJ1c2VyaWQiOjE1Mzc0LCJ1c2VyZmxhZ3MiOjAsImlhdCI6MTY1MTc3MTAwMSwiZXhwIjoxNjUxNzcxNjAxLCJzZXNzaW9uaWQiOiJyaGppaDhoUVR1eStrNWRKVlhaMnZRPT0ifQ.ExF2Fu0HlNWhDqn3itCttMlJ7kL3zQzPJEXA-E9l0NJPG912vJ2nPzCOobuCBKaxly3Q-WYaOPhdai5W1OiXqkvZOFkal2Z7Bj0YB1ySHrHJUgguv-ZbrWj0oN-1tg7fY6_bdzIF3Cd-DYPoj-y_hKNaNO381Fsg5bWkR3Zi1RFex053rgcv7ThO2SR9-_cLSgHMHGawTW4J2zOJTJY83n9BGZjNPjF64ZvkDjIRB4ZT6sThls95a08yJNzXZM09SbgYRxUcTWgOZZkQoDM0_i0WPcBnDuAFiiNhGbLMBUu8AWyRgKsN66kV2bilGT1t54Pa3Tg3yJiFvST7rsOnoQ'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result= json_decode($response,true);
//echo '<pre>';print_r($result);

$token = $result['imdata'][0]['aaaLogin']['attributes']['token'];
//echo $token;
header("Location: http://localhost/Admin/onboarding.php?token=".$token);
die();
//header('Location:mapping.php?token='+token);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application Onboarding System Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/admin.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="validation.php" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Application Onboarding System - ACI SDN Authentication</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="validation.php">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User</label>
                    <input type="text" value="admin" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" value="!v3G@!4@Y" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Admin App -->
<script src="dist/js/admin.min.js"></script>
<!-- Admin for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
