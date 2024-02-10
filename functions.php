<?php

function check_input($data) {
    // trim 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

// get category 
function get_category($conn) {
    $sql = "SELECT * FROM `category` ORDER BY `category`.`id` DESC";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    if(mysqli_num_rows($result) > 0) {
        $categories = array();

        // fetch each row and add it to the array 
        while($row=mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }

    return $categories;
}