<table border=1>
<tr><td>책 이름</td><td>상태</td></tr>
<?php
    $db = mysqli_connect("localhost", "wlmin0339", "wlals2tkfkd!", "wlmin0339");
  
    $bookname = $_POST["bookname"];
  
    $query = "select * from booklist where name='".$bookname."';";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);


    if($row['state']=='대여 가능'){
        $query="update booklist set state='예약 중' where name = '".$bookname."';";
        $result=mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
?>
<script>
    window.alert('예약을 완료했습니다.');
    location.href="./main.php";
</script>

<?php
    }
    else{
        echo "<script>window.alert('예약 할 수 없습니다');
            history.go(-1);</script>";
    }
?>