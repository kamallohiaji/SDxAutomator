<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application Onboarding System Mapping</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
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


  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Application Onboarding System –  ACI SDN Object Mapping</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="validation.php">Home</a></li>
              <li class="breadcrumb-item active">Applications Objects Mapping</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"></h3>

        
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Bridge Domain</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Bridge Domain Name</option>
                  
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text">Submit</span>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>IP Subnet/Gateway</label>
                  <div class="select2-purple">
                   <input type="text" class="form-control">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bridge Domain</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Bridge Domain Name</option>
                   </select>
                   <div class="input-group-append">
                    <span class="input-group-text">Submit</span>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Application End Point Group</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected">EPG Name</option>
                  
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text">Submit</span>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>VRF/Private Network</label>
                  <select class="select2"  data-placeholder="" style="width: 100%;">
                    <option>VRF Name</option>
                  
                  </select>
                 
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <div class="input-group-append">
                    <span class="input-group">&nbsp;<br></span>
                  </div>
                  <label>Bridge Domain</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Bridge Domain Name</option>
                   
                  </select>
                 
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

           
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Application End Point Group 1</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">EPG Name</option>
                  
                  </select>
                
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Provider Contract</label>
                  <div class="select2-purple">
                    <select class="select2"  style="width: 100%;">
                      <option selected>Contract Name</option>
                   
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Application End Point Group 2</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">EPG Name</option>
                  
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text">Submit</span>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Consumed Contract</label>
                  <div class="select2-purple">
                    <select class="select2"  style="width: 100%;">
                      <option selected>Contract Name</option>
                   
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
