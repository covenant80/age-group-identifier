<?php
function UidExists($conn,$name,$email) {
    $sql = "SELECT * FROM users WHERE username = ? OR Email = ?;";
    $stmt =mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare( $stmt,$sql)){
        header("Location: ../login.php?error=uncaught error");
        exit();  
    }

    mysqli_stmt_bind_param($stmt, "ss",$name,$email);
    mysqli_stmt_execute($stmt);


    $resultData =  mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}
function createUser($conn,$name,$email,$pwd,$radio) {
    $sql =  "INSERT users (Username,Email,password,Typeofuser) VALUES (?,?,?,?);";
    $stmt =mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare( $stmt,$sql)){
        header("Location: ../login.php?error=uncaught error");
        exit();  
    }

    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashpwd, $radio );
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?error=none");
    exit();  
}