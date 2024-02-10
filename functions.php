<?php

function check_input($data) {
    // trim 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


/**
 * get_category function
 *
 * @param [object] $conn
 * @return array
 */
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

/**
 * Undocumented function
 *
 * @param [object] $conn
 * @param [string] $type
 * @param [number] $limit
 * @return array
 */

function get_products($conn, $type = '', $limit = 0) {
    $sql = "SELECT * FROM `products`";

    if($type == 'latest') {
        $sql .= " `products`.`ProductID` DESC";
    }

    if($limit != 0) {
        $sql .= " LIMIT '$limit'";
    }

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $products = array();

        while($row=mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        return $products;
    } else {
        return null;
    }
}