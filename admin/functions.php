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