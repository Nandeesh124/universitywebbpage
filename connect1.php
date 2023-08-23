//Register_submit.php
<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "text";
    
    $conn = mysqli_connect($db_hostname,$db_name, $db_password);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $name=$_POST['name'];
    $password=$_POST['password'];


    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    mysqli_close($conn);
?>