<?php

    require_once('koneksi.php');
    
    if(empty($_GET)) {
        $query = mysqli_query( $konek, "SELECT * FROM produk");
        $result = array();
        while($row = mysqli_fetch_array($query)) {
        array_push($result, array (
            'id' => $row['id'],
            'image' => $row['image'],
            'title' => $row['title'],
            'summary' => $row['summary'],
            'release_at' => $row['release_at']
        ));
    }

    echo json_encode (
        array('result'=>$result)
    );
    } else {
        $query = mysqli_query($konek, "SELECT * FROM produk WHERE id=". $_GET
        ['id'] );

        $result = array();
        while($row=$query->fetch_assoc()) {
            $result=array(
                'id'=>$row['id'],
                'image' => $row['image'],
                'title' => $row['title'],
                'summary' => $row['summary'],
                'release_at' => $row['release_at']
            );
        }

        echo json_encode (
            array('result'=>$result)
        );
    }

?>