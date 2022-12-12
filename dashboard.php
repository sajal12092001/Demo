<?php
session_start();
include("connect.php");
$id = $_SESSION['id'];
$custsql = "select * from register where id='$id'";
$custquery = mysqli_query($conn, $custsql);
$custdata = mysqli_fetch_assoc($custquery);

$addsql = "select * from address where customer_id='$id'";
$addquery = mysqli_query($conn, $addsql);


// foreach ($custdata as $maindata) {
//     echo $maindata . "<br>";
// }


if (isset($_POST["logout"])) {
    session_destroy();
    header("location:/myprojects/Demo/try/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <form class="d-flex" method="post" action="#">

                    <button class="btn btn-primary" name="logout" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>



    <div class="container mt-3" style="margin-left: 330px;">


        <table>
            <tr>
                <td>
                    <h2>User Details</h2>
                </td>
                <td style="text-align: right; width: 725px;">
                    <a href="edit.php">
                        <button class="btn btn-primary" name="editbutton" type="submit">Edit Details</button>
                    </a>
                </td>
            </tr>
        </table>

        <table class="table table-striped" style="width: 900px;">


            <tr>
                <td><b>First Name</b></td>
                <td>
                    <?php echo $custdata['first_name'] ?>
                </td>
            </tr>
            <tr>
                <td><b>Last Name</b></td>
                <td>
                    <?php echo $custdata['last_name'] ?>
                </td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td>
                    <?php echo $custdata['email'] ?>
                </td>
            </tr>


            <tr>
                <td><b>Mobile</b></td>
                <td>
                    <?php echo $custdata['mobile'] ?>
                </td>
            </tr>

            <tr>
                <td><b>Gender</b></td>
                <td>
                    <?php echo $custdata['gender'] ?>
                </td>
            </tr>
            <tr>
                <td><b>Age</b></td>
                <td>
                    <?php echo $custdata['age'] . " Years" ?>
                </td>
            </tr>
            <td><b>Dob</b></td>
            <td>
                <?php echo $custdata['dob'] ?>
            </td>
            </tr>
            <td><b>Bio</b></td>
            <td>
                <?php echo $custdata['bio'] ?>
            </td>
            </tr>


        </table>


    </div>

    <div class="container mt-3" style="margin-left: 330px;">


        <table>
            <tr>
                <td>
                    <h2>User Address Details</h2>
                </td>
                <td style="text-align: right; width: 600px;">
                    <a href="add_address.html">
                        <button class="btn btn-danger" name="editbutton" type="submit">Add Address</button>
                    </a>
                </td>
            </tr>
        </table>

        <table class="table table-bordered" style="width: 900px;">
            <thead>
                <tr>
                    <th style="text-align: center;">Address Line 1</th>
                    <th style="text-align: center;">Address Line 2</th>
                    <th style="text-align: center;">City</th>
                    <th style="text-align: center;">State</th>
                    <th style="text-align: center;">Country</th>
                    <th style="text-align: center;">Zip Code</th>
                    <th style="text-align: center;">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($addquery) > 0) {
                    while ($adddata = mysqli_fetch_assoc($addquery)) {


                ?>

                <tr>

                    <td>
                        <?php echo $adddata['addressline1'] ?>
                    </td>
                    <td>
                        <?php echo $adddata['addressline2'] ?? ''; ?>
                    </td>
                    <td>
                        <?php echo $adddata['city'] ?? ''; ?>
                    </td>
                    <td>
                        <?php echo $adddata['state'] ?? ''; ?>
                    </td>
                    <td>
                        <?php echo $adddata['country'] ?? ''; ?>
                    </td>
                    <td>
                        <?php echo $adddata['zipcode'] ?? ''; ?>
                    </td>
                    <td>
                        <?php echo $adddata['phone'] ?? ''; ?>
                    </td>

                </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

<script>

</script>


</html>