<?php
  $db = mysqli_connect("localhost", "wlmin0339", "wlals2tkfkd!", "wlmin0339");
  
  $id = $_POST["id"];
  $pwd = $_POST["pwd"];

  $query = "select * from user where id='".$id."';";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  if($row['id'] == $id){
    if($row['pwd'] == $pwd){
      echo "<script>window.alert('로그인이 완료되었습니다.');</script>";
    }
    else{
      echo "<script>window.alert('아이디 또는 비밀번호가 틀립니다.');</script>";
    }
  }
  else{
    echo "<script>window.alert('아이디 또는 비밀번호가 틀립니다.');</script>";
  }
 ?>
<script> 
  location.href="./main.php";
</script>