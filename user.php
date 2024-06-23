<?php
  $db = mysqli_connect("localhost", "wlmin0339", "wlals2tkfkd!", "wlmin0339");
  
  $name = $_POST["name"];
  $id = $_POST["id"];
  $pwd = $_POST["pwd"];

  $query = "INSERT USER(name, id, pwd) VALUES('".$name."', '".$id."', '".$pwd."');";
  mysqli_query($db, $query);
  
 ?>
<script> 
  window.alert('회원가입이 완료되었습니다');
  location.href="./main.php";
</script>
