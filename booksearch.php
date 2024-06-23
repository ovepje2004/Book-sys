<table border=1>
<tr><td>책 이름</td><td>상태</td></tr>

<?php
  $db = mysqli_connect("localhost", "wlmin0339", "wlals2tkfkd!", "wlmin0339");
  
  $bookname = $_POST["bookname"];

  $query = "select * from booklist where name='".$bookname."';";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
?>

<?php
  if($row['name'] == $bookname){
    echo "<tr><td>".$row['name']."</td><td>".$row['state']."</td></tr>";
?>
<div>
    <form class="bookbook" method="post" action = "./bookbook.php">
        <select name="bookname">
            <option value="">--선택--</option>
            <option value="좀비 서바이벌 가이드">좀비 서바이벌 가이드</option>
            <option value="좀비 바이러스 치료법">좀비 바이러스 치료법</option>
            <option value="나는 좀비를 만났다">나는 좀비를 만났다</option>
        </select>
        <input type="submit" name="bookbook" value="예약하기">
    </form>
</div>
<?php
    }
  else{
    echo "<script>window.alert('찾으시는 책이 없습니다');
            history.go(-1);</script>";
  }
 ?>