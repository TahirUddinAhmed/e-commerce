<?php

/**
 * get customer function
 *
 * @param [object] $conn
 * @return array
 */
function get_customers($conn) {
    $sql = "SELECT * FROM users WHERE `role` = 'buyer'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    $customers = array();

    while($row=mysqli_fetch_assoc($result)) {
        $customers[] = $row;
    }

    return $customers;
}

// email exits 
/**
 * Undocumented function
 *
 * @param [object] $conn
 * @param [string] $email
 * @return boolean
 */
function emailExists($conn, $email) {
    $result = false;

    $sql = "SELECT * FROM users WHERE `email` = '$email' AND role = 'admin'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("QUERY FAILED" . mysqli_errno($conn));
    } 

    if(mysqli_num_rows($result) > 0) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}