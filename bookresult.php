<?php
    $db = mysqli_connect("localhost", "wlmin0339", "wlals2tkfkd!", "wlmin0339");
    $query ="select * from booklist;";
    $row=mysqli_fetch_row($result);

    echo "<tr><td>".$row['name']."</td><td>".$row['state']."</td><td>";
?>