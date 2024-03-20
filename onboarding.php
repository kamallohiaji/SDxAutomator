<?php

if(isset($_POST["network"])){
$token=$_GET['token'];
 $network=$_POST["pvt_network"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandboxapicdc.cisco.com/api/node/mo/uni/tn-common.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER=> 0, // Skip SSL Verification
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    
    "imdata": [
        {
            "fvCtx": {
                "attributes": {
                    "annotation": "",
                    "bdEnforcedEnable": "no",
                    "descr": "",                    
                    "ipDataPlaneLearning": "enabled",
                    "knwMcastAct": "permit",
                    "name":"'.$network.'",
                    "nameAlias": "",
                    "ownerKey": "",
                    "ownerTag": "",
                    "pcEnfDir": "ingress",
                    "pcEnfPref": "enforced",
                    "userdom": ":all:",
                    "vrfIndex": "0"
                }
            }
        }
    ]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain',
    'Cookie: APIC-cookie='.$token
  ),
));

$response = curl_exec($curl);

curl_close($curl);

//echo $response;
$result=json_decode($response,true);
if($result["totalCount"]==0){
  echo "<h3>Private Network added succefully</h3>";
}else{
  echo "Failed";
}
}

//---- Bridge Domain-----//

if(isset($_POST["bridge"])){
  $token=$_GET['token'];
  $bridge=$_POST["bridge_domain"];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sandboxapicdc.cisco.com/api/node/mo/uni/tn-common.json',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_SSL_VERIFYPEER=> 0, // Skip SSL Verification
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      
      "imdata": [
          {
              "fvBD": {
                "attributes": {
                  "OptimizeWanBandwidth": "no",
                  "annotation": "",
                  "arpFlood": "yes",
                  "descr": "",                 
                  "epClear": "no",
                  "epMoveDetectMode": "",
                  "hostBasedRouting": "no",
                  "intersiteBumTrafficAllow": "no",
                  "intersiteL2Stretch": "no",
                  "ipLearning": "yes",
                  "ipv6McastAllow": "no",
                  "limitIpLearnToSubnets": "yes",
                  "llAddr": "::",
                  "mac": "00:22:BD:F8:19:FF",
                  "mcastAllow": "no",
                  "multiDstPktAct": "bd-flood",
                  "name": "'.$bridge.'",
                  "nameAlias": "",
                  "ownerKey": "",
                  "ownerTag": "",
                  "type": "regular",
                  "unicastRoute": "yes",
                  "unkMacUcastAct": "proxy",
                  "unkMcastAct": "flood",
                  "userdom": ":all:",
                  "v6unkMcastAct": "flood",
                  "vmac": "not-applicable"
                }
              }
          }
      ]
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: text/plain',
      'Cookie: APIC-cookie='.$token
    ),
  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  
  //echo $response;
  $result=json_decode($response,true);
  
  if($result["totalCount"]==0){
    echo "<h3>BD added succefully</h3>";
  }else{
    echo "failed";
  }

}


//----Application Profile---------//

if(isset($_POST["profile"])){
  $token=$_GET['token'];
  $profile=$_POST["app_profile"];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sandboxapicdc.cisco.com/api/node/mo/uni/tn-common.json',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_SSL_VERIFYPEER=> 0, // Skip SSL Verification
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      
      "imdata": [
          {
              "fvAp": {
                "attributes": {
                  "annotation": "",
                  "descr": "",                  
                  "name": "'.$profile.'",
                  "nameAlias": "",
                  "ownerKey": "",
                  "ownerTag": "",
                  "prio": "unspecified",
                  "userdom": "all"
                  }
              }
          }
      ]
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: text/plain',
      'Cookie: APIC-cookie='.$token
    ),
  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  
  //echo $response;
  $result=json_decode($response,true);
  
  if($result["totalCount"]==0){
    echo "<h3>AP added succefully</h3>";
  }else{
    echo "failed";
  }

}


//--- Application Endpoint ---//
if(isset($_POST["endpoint"])){
  $token=$_GET['token'];
  $endpoint=$_POST["app_endpoint"];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sandboxapicdc.cisco.com/api/node/mo/uni/tn-common/ap-default.json',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_SSL_VERIFYPEER=> 0, // Skip SSL Verification
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      
      "imdata": [
          {
              "fvAEPg": {
                "attributes": {
                  "annotation": "",
                  "descr": "",     
                  "exceptionTag": "",
                  "floodOnEncap": "disabled",
                  "fwdCtrl": "",
                  "hasMcastSource": "no",
                  "isAttrBasedEPg": "no",
                  "matchT": "AtleastOne",
                  "name": "'.$endpoint.'",
                  "nameAlias": "",
                  "pcEnfPref": "unenforced",
                  "prefGrMemb": "exclude",
                  "prio": "level3",
                  "shutdown": "no",
                  "userdom": ":all:"
                  }
              }
          }
      ]
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: text/plain',
      'Cookie: APIC-cookie='.$token
    ),
  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  
 // echo $response;
  $result=json_decode($response,true);
  
  if($result["totalCount"]==0){
    echo "<h3>AP Endpoint added succefully</h3>";
  }else{
    echo "failed";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application Onboarding System –  ACI SDN Object Provisioning</title>

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

  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Application Onboarding System –  ACI SDN Object Provisioning</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Applications Objects Provisioning
              </li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                <div class="card-body">
                  <form name="network" method="post" action='?token='.<?=$_GET["token"]?>>
                  <div class="form-group">
                    <label for="exampleInputFile">Private Network/VRF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="form-control" name="pvt_network" id="exampleInputFile">
                      </div>
                      <div class="input-group-append">
                      <button type="submit" name="network" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                  </form>
                  <form method="post" action="">
                  <div class="form-group">
                    <label for="exampleInputFile">Bridge Domain</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="form-control" name="bridge_domain" id="exampleInputFile">
                      </div>
                      <div class="input-group-append">
                      <button type="submit" name="bridge" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
                <form method="post" action="">
                  <div class="form-group">
                    <label for="exampleInputFile">Application Profile</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" name="app_profile" class="form-control" id="exampleInputFile">
                      </div>
                      <div class="input-group-append">
                      <button type="submit" name="profile" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
</form>
<form method="post" action="">
                  <div class="form-group">
                    <label for="exampleInputFile">Application End Point Group</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" name="app_endpoint" class="form-control" id="exampleInputFile">
                      </div>
                      <div class="input-group-append">
                      <button type="submit" name="endpoint" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
</form>
                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
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
</body>
</html>
