<?php
    $conn = mysqli_connect("localhost", "root", "", "demo");
    $sql = " SELECT * FROM test ";
    $q = mysqli_query( $conn, $sql );
    while( $f = mysqli_fetch_assoc( $q ) ) {
        echo "<img src='".$f['file']."' /><br/>";
    }
    mysqli_close( $conn );
?>