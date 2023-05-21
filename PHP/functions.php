<?php

function isUserExists($db, $uemail)
{
        //$SQL = "SELECT Email FROM Account WHERE Email = '$uemail'";
    $SQL = "SELECT * FROM Account WHERE Email = '$uemail'";
        
    $results =  mysqli_query($db, $SQL);

    $row = $results->fetch_assoc(); // we fetch results as associative array

    return (is_array($row) && count($row)>0); // we check if it's array and count is more than 0 so this means that a user email already exists
}


// function destroy_session($usession)
// {
//     session_unset();
//     session_destroy();
//     header('Location: login.php');
//     
// }
?>