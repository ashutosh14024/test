<?php 

require 'db_connect.php';
$conn    = Connect();

if(isset($_GET['access'])){
  $access = $_GET['access'];
  if($access!="TABLE_GRANTED"){
    $result = "access_token_error";
    echo json_encode(array("result"=>$result));
  }else{
    
    $result = array();

      $res = mysqli_query($conn, "SELECT * from `ashu`");
        
      while($row = mysqli_fetch_assoc($res)){
        array_push($result,
          array(
            'Name'=>$row['name'],
            'Email'=>$row['email'],
            'Aadhar No'=>$row['adhar'],
            'Wallet Amount'=>$row['wallet']
          )
        );
      } 
    echo json_encode(array("result"=>$result));
  }
}else{
  $result = "error";
  echo json_encode(array("result"=>$result));
}

?>