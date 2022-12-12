<?php
include("connect.php");
session_start();
$id = $_SESSION["id"];
$sql = "select * from register where id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
if (isset($_POST["edit"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $bio = $_POST["bio"];
    $sql = "update register set first_name='$firstname',last_name='$lastname',email='$email',mobile='$mobile',password='$password',gender='$gender',age='$age',dob='$dob',bio='$bio' where id='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {

        header('Location: /myprojects/Demo/JAVASCRIPT/dashboard.php');
    } else {
        echo "sql not rum";
    }
}


?>
<html>

<head>
    <title>Edit Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .head {
            position: absolute;
            left: 35%;
        }

        .main {
            display: flex;
        }
    </style>
</head>

<body>

    <div class="container head " id="head">
        <h2 style="margin-left: 8%;">Edit here</h2>
        <form method="post" action="#" name="editform" onsubmit="return validation()">

            <div class="main">
                <div>
                    <div id="firstname" class="mb-3 form-group " style="margin-right: 25px;">
                        <label>First Name</label>
                        <input type="text" class="form-control " placeholder="Enter first name" name="fname"
                            value="<?php echo $data['first_name'] ?>">
                        <p style="color: red;" class="formerror"></p>

                    </div>
                </div>

                <div>
                    <div id="lastname" class="mb-3 form-group">
                        <label>Last Name</label>
                        <input value="<?php echo $data['last_name'] ?>" type="text" class="form-control mr-5"
                            placeholder="Enter last name" name="lname">
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

            </div>


            <div class="main">
                <div>
                    <div id="mob" class="form-group mb-3" style="margin-right: 25px;">
                        <label>Mobile</label>
                        <input value="<?php echo $data['mobile'] ?>" type="number" class="form-control "
                            placeholder="Enter mobile" name="mobile">
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

                <div>


                    <div id="bios" class="form-group mb-3">
                        <label>Bio</label>
                        <input value="<?php echo $data['bio'] ?>" type="textarea" class="form-control mr-5"
                            placeholder="Enter your bio" name="bio">
                        <p style="color: red;" class="formerror"></p>
                    </div>



                </div>

            </div>



            <div class="main">
                <div>
                    <div id="gen" class="form-group mb-3" style="margin-right: 25px; width: 206px;">
                        <label>Gender</label>

                        <select value="<?php echo $data['gender'] ?>" name="gender" class="form-control "
                            id="genderlist">
                            <option value="selectgender">- Select Gender -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

                <div>
                    <div id="Dob" class="form-group mb-3" style="width: 203px;">
                        <label>Dob</label>
                        <input value="<?php echo $data['dob'] ?>" type="date" class="form-control mr-5"
                            placeholder="Enter your dob" name="dob">
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

            </div>


            <div class="main">
                <div>


                    <div id="mail" class=" mb-3" style="margin-right: 25px;">
                        <label>Email</label>
                        <input value="<?php echo $data['email'] ?>" type="email" class="form-control mr-5"
                            placeholder="Enter email" name="email">
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

                <div>
                    <div id="agee" class=" mb-3">
                        <label>Age</label>
                        <input value="<?php echo $data['age'] ?>" type="number" class="form-control mr-5"
                            placeholder="Enter your age" name="age">
                        <p style="color: red;" class="formerror"></p>
                    </div>
                </div>

            </div>





            <div id="pass" class=" mb-3" style="margin-right: 865px;">
                <label>Password</label>
                <input value="<?php echo $data['password'] ?>" type="password" class="form-control mr-5"
                    placeholder="Enter password" name="password">
                <p style="color: red;" class="formerror"></p>
            </div>




            <input name="edit" type="submit" class="btn btn-primary" value="Edit" style="margin-left: 150px;">


        </form>
    </div>


</body>

<script>

    function seterror(id, error) {
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;


    }
    function validation() {

        // for first name

        let first_name = document.forms['editform']["fname"].value
        const pattern = /[A-Za-z]/i;

        if (first_name == "") {
            seterror("firstname", "First Name Not be Empty");

            return false;

        } else if (!pattern.test(first_name)) {

            seterror("firstname", "First Name should be in alphabets");

            return false;
        }
        else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }

        // for last name

        let last_name = document.forms['editform']["lname"].value

        if (last_name == "") {
            seterror("lastname", "Last Name Not be Empty");

            return false;
        }
        else if (!pattern.test(last_name)) {

            seterror("lastname", "Last Name should be in alphabets");

            return false;
        }

        else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }

        let mobi = document.forms['editform']["mobile"].value

        if (mobi == 0) {
            seterror("mob", "Mobile Not be Empty");
            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }

        let boiss = document.forms['editform']["bio"].value

        if (boiss.length == 0) {
            seterror("bios", "Bio Not be Empty");

            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }


        let gend = document.forms['editform']["gender"].value

        if (gend == "selectgender") {
            seterror("gen", "Gender Not be Empty");

            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }


        let dobb = document.forms['editform']["dob"].value

        if (!dobb) {
            seterror("Dob", "Dob Not be Empty");

            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }

        let mail = document.forms['editform']["email"].value

        if (mail == "") {
            seterror("mail", "Email Not be Empty");

            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }

        let ageee = document.forms['editform']["age"].value

        if (ageee == "") {
            seterror("agee", "Age Not be Empty");

            return false;
        } else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }



        let psw = document.forms['editform']["password"].value
        const pswpattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/i;

        if (psw == "") {
            seterror("pass", "Password Not be Empty");

            return false;
        }
        else if (!pswpattern.test(psw)) {

            seterror("pass", "Password must include at least one number!<br>     Password must include at least one letter!<br>     Password must include at least one CAPS!<br>     Password must include at least one symbol!<br>");

            return false;
        }

        else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";

        }



    }
</script>

</html>