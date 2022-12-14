<?php
session_start();
$respond = "";
if (isset($_SESSION["id"])) {
    echo isset($_SESSION["id"]);
    header("Location: /myprojects/Demo/try/dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #login {
            position: absolute;
            top: 30%;
            left: 40%;
        }
    </style>
</head>

<body>


    <div class="container mt-3" id="login">
        <h2 class="head">Login form</h2>


        <div>
            <span id="span" style="color: red; margin-left: 50px;"></span>

            <div id="mail" class="mb-3 mt-3" style='margin-right:900px'>
                <label>Email:</label>
                <input value="" type="email" class="form-control mr-5" placeholder="Enter email" id="email">
                <p id="emailerror"></p>
            </div>
            <div id="psw" class=" mb-3" style='margin-right:900px'>
                <label for="pwd">Password:</label>
                <input type="password" value="" class="form-control" placeholder="Enter password" id="password">
                <p style="color: red;" id="passworderror"></p>
            </div>
            <div class="form-check mb-3">
                <button class="btn btn-primary head" onclick="javascript:fetchData()" value="login" type="submit"
                    name="loginbu">Login</button>
            </div>
            <div>
                <p>Create new user
                    <a href="register.php" class="fw-bold text-body"><u>Register here</u></a>
                </p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("email").addEventListener("input", checkmail);
        function checkmail() {
            let email = document.getElementById('email').value;
            if (!email.includes("@") && !email.includes(".")) {
                document.getElementById("emailerror").innerHTML = "Invalid email";
                document.getElementById("email").style.borderBottom = "2px solid red"
                document.getElementById("emailerror").style.color = "red";
                return false;

            }
            else {
                document.getElementById("emailerror").innerHTML = "Valid email";
                document.getElementById("email").style.borderBottom = "2px solid green"
                document.getElementById("emailerror").style.color = "green";
                return true;

            }
        }
    </script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>

    function fetchData() {
        if (checkmail()) {

            let email = $("#email").val();
            let pass = $("#password").val();
            $(document).ready(function () {
                $.ajax({
                    type: "post",
                    url: "fetchLogin.php",
                    data: {
                        'email': email,
                        'password': pass
                    },
                    success: function (data) {
                        if (data == "yes") {
                            alert("login successfully");
                            location.replace("dashboard.php");
                        }
                        else {

                            $("#span").text("Invalid credentials");

                        }
                    },
                    error: function (e) {
                        allert(e);
                    }
                });
            });


        }

    }



    // function seterror(id, error) {
    //     element = document.getElementById(id);
    //     element.getElementsByClassName('formerror')[0].innerHTML = error;
    // }
    // function validation() {
    //     let mail = document.getElementById("email").value;

    //     if (mail == "") {
    //         seterror("mail", "Email should not be empty");
    //         return false;
    //     } else {
    //         element.getElementsByClassName('formerror')[0].innerHTML = "";

    //     }

    //     let psw = document.getElementById("password").value

    //     if (psw == "") {
    //         seterror("psw", "Password should not be empty");
    //         return false;
    //     }

    // }
</script>

</html>