<!DOCTYPE html>
<html>


<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>


    <?php
    include "connection.php";
    include "navbar.php";
    ?>



    <?php
    $user_ID = $_SESSION["id"];

    ?>









    <div class="containerpro">
        <div class="profile-info">
            <h2>Personal Information</h2>
            <div class="profile-photo">
                <img src="image/consul.jpg" alt="Profile Photo">
            </div>
            <p><strong>User Name:</strong> <span id="username"><?php echo $user['username']; ?></span></p>
            <p><strong>Email:</strong> <span id="email"><?php echo $user['email']; ?></span></p>
            <h3>Update your Password? </h3>
            <a href="updatepass.php"><button id="update-password-btn">Update Password</button> </a>
        </div>

        <div class="transaction-history">
            <h2>Transaction History</h2>
            <table>
                <thead class="tableheading">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Price(TK)</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $tran_query = mysqli_query($conn, "SELECT * FROM `record` WHERE user_id = '$user_ID'") or die('query failed');
                    if (mysqli_num_rows($tran_query) > 0) {
                        while ($fetch_record = mysqli_fetch_assoc($tran_query)) { ?>
                            <tr class="tranrow">
                                <td>
                                    <?php echo $fetch_record['transaction_ID']; ?>
                                </td>
                                <td>
                                    <?php echo $fetch_record['payment']; ?>
                                </td>
                                <td>
                                    <?php echo $fetch_record['time']; ?>
                                </td>



                            </tr>
                    <?php }
                    } ?>




                </tbody>
            </table>
        </div>
    </div>


    <?php include "footer.php";
    ?>
</body>

</html>