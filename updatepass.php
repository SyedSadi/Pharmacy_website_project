<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updatepass.css">
    <title>Document</title>
</head>

<body>

    <?php
    include "connection.php";


    $error = null;
    if (isset($_POST["upass"])) {
        $id = $user['id'];
        $pp = $user["password"];
        $ppassword = $_POST["ppassword"];
        $np = $_POST["newpassword"];
        $cp = $_POST["cpassword"];


        if (!empty($ppassword) && !empty($np) && !empty($cp)) {
            if ($pp !== $ppassword) {
                $error = " previous password don't match ";
            } else if ($np !== $cp) {
                $error = "new password and confirm password are different";
            } else {
                $sql =  "SELECT password FROM user WHERE id ='$id' AND password='$pp' ";

                $result = mysqli_query($conn, $sql);
                $sql2 = "UPDATE USER SET password ='$np' WHERE id='$id' ";
                mysqli_query($conn, $sql2);
            }
        } else {
            $error = "please enter some valid information";
        }
    }



    ?>






    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-icon">
                <img src="image/doctor_consultation.png" alt="Profile Icon">
            </div>
            <h2><?php echo $user['username']; ?></h2>
        </div>
        <div class="profile-content">
            <form class="profile-form" method="POST">
                <div class="form-group">

                    <input type="text" id="name" name="name" value="<?php echo $user['username']; ?> " disabled>
                </div>
                <div class="form-group">

                    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?> " disabled>
                </div>
                <div class="form-group">

                    <input type="password" id="prev-password" name="ppassword" placeholder="Enter previous password">
                </div>
                <div class="form-group">

                    <input type="password" id="new-password" name="newpassword" placeholder="Enter new password">
                </div>
                <div class="form-group">

                    <input type="password" id="confirm-password" name="cpassword" placeholder="Confirm new password">
                </div>
                <div class="errorshow">
                    <p><?php echo $error; ?></p>
                </div>
                <div class="form-group">
                    <input type="submit" value="update_password" name="upass">
                </div>
            </form>
        </div>
    </div>



</body>

</html>