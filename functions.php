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
 * @param [number] $cat_id
 * @return array
 */
function get_category($conn, $cat_id = 0) {
    $sql = "SELECT * FROM `category`";
    
    if($cat_id !== 0) {
        $sql .= " WHERE id = '$cat_id'";
    }

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
        return $categories;
    } else {
        return null;
    }

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

/**
 * Undocumented function
 *
 * @param [type] $conn
 * @param [type] $cat_id
 * @return void
 */
function cat_products($conn, $cat_id) {
    $sql = "SELECT * FROM `products` WHERE category_id = '$cat_id'";

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

// registration form validation
function validate($first_name, $last_name, $email, $password, $con_pass) {
    $result = false;

    if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($con_pass)) {
        $result = true;
    }

    return $result;
}

function pwdMatch($password, $con_pass) {
    $result = false;
    if($password !== $con_pass) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function emailExitst($conn, $email) {
    $result = false;

    $sql = "SELECT * FROM users WHERE `email` = '$email'";
    $dbRes = mysqli_query($conn, $sql);

    if(!$dbRes) {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    if(mysqli_num_rows($dbRes) > 0) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function get_user($conn, $uid) {
    $sql = "SELECT * FROM users WHERE `id` = '$uid'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("SOMETHING WENT WRONG" . mysqli_error($conn));
    }

    $user = array();

    while($row=mysqli_fetch_assoc($result)) {
        $user[] = $row;
    }

    return $user;
}