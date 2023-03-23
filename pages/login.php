<?php session_start() ?>
<?php 

 include 'connection.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password 	= mysqli_real_escape_string($conn, $_POST['password']);


    // prepare database query
    $query = "SELECT * FROM user
                WHERE username = '{$username}'
                AND password = '{$password}'
                LIMIT 1";

                $result_set = mysqli_query($conn, $query);

                if ($result_set) {

                    if (mysqli_num_rows($result_set)==1) {
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['first_name'] = $user['first_name'];
                            header("Location: dash/index.html");
                    }else{
                        echo "Inavalid username or password";
                    }
                }
            } 
?>