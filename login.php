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

        <span id="span" style="color: red; margin-left: 50px;"></span>
        <form method="post" name="loginform" action="#">

            <div id="mail" class="mb-3 mt-3" style='margin-right:900px'>
                <label>Email:</label>
                <input type="email" class="form-control mr-5" placeholder="Enter email" id="email">
                <p style="color: red;" class="formerror"></p>
            </div>
            <div id="psw" class=" mb-3" style='margin-right:900px'>
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="password">
                <p style="color: red;" class="formerror"></p>
            </div>
            <div class="form-check mb-3">
                <button type="submit" class="btn btn-primary head" onclick="javascript:fetchData()" value="login"
                    name="loginbu">Login</button>
            </div>
            <div>
                <p>Create new user
                    <a href="register.html" class="fw-bold text-body"><u>Register here</u></a>
                </p>
            </div>
        </form>
    </div>


    </div>

</body>

<script>

    function fetchData() {

        if (true) {
            let mail = document.getElementById('email').value;
            let pass = document.getElementById('password').value;

            const xhr = new XMLHttpRequest();


            xhr.open('get', 'fetch.php', true);
            xhr.send();



            xhr.onload = function () {

                try {
                    var flag = 0;
                    let data = JSON.parse(this.responseText);
                    console.log(data);

                    if (data.length > 0) {
                        console.log(data.length);
                        for (var a = 0; a < data.length; a++) {
                            var getmail = data[a].email;
                            var getpass = data[a].password;

                            console.log(getmail);
                            console.log("chek email: " + mail);

                            console.log(getpass);
                            console.log("chek pass: " + pass);

                            if ((getmail == mail) && (getpass == pass)) {

                                flag = 1;
                                console.log(true);
                                break;
                            }

                        }

                        if (flag == 1) {
                            send_Session_id(data[a].id);
                            console.log("flag = 0");

                            // // alert("login");
                            location.replace("dashboard.php");
                            
                            

                        }
                        else {

                            document.getElementById("span").innerHTML = "Email or passsword is incorrect";
                            alert("error");

                        }


                    }

                }
                catch (e) {
                  
                    console.log(e);
                }

            }
        }

    }

    function send_Session_id(id) {
   
        let xhr = new XMLHttpRequest();
        xhr.open("post", "loginprocess.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            console.log(id);
        }
        xhr.send("id=" + id);
    }

    function seterror(id, error) {
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }
    function validation() {
        let mail = document.forms['loginform']["email"].value;

        if (mail == "") {
            seterror("mail", "Email should not be empty");
            return false;
        }
        else {
            element.getElementsByClassName('formerror')[0].innerHTML = "";
        }

        let psw = document.forms['loginform']["password"].value

        if (psw == "") {
            seterror("psw", "Password should not be empty");
            return false;
        }

    }
</script>

</html>