<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_REQUEST['name'])) {

    require './connection.php';

    $sql = "SELECT * FROM user WHERE user_name LIKE '" . $_REQUEST['name'] . "%'";

    if ($result = mysqli_query($connect, $sql)) {

        // Fetch one and one row
        while ($row = mysqli_fetch_row($result)) {
         
            echo ' <option value="' . $row[1] . '">' . $row[1] . '</option>';
        }
        // Free result set
        mysqli_free_result($result);
    } 
    

//        echo 'name '.$_REQUEST['name'];
}