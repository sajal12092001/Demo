<html>

<head>
    <title>Registration</title>
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

    <div class="container head " id="head" >
        <h2 style="margin-left: 8%;">Register here</h2>
        <span id="span" style="color: red; margin-left: 50px;"></span>
        <div>

            <div class="main">
                <div>
                    <div id="firstname" class="mb-3 form-group " style="margin-right: 25px;">
                        <label>First Name</label>
                        <input type="text" class="form-control " placeholder="Enter first name" id="fname">
                        <p style="color: red;" id="fnameerror"></p>

                    </div>
                </div>

                <div>
                    <div id="lastname" class="mb-3 form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control mr-5" placeholder="Enter last name" id="lname">
                        <p style="color: red;" id="lnameerror"></p>
                    </div>
                </div>

            </div>


            <div class="main">
                <div>
                    <div id="mob" class="form-group mb-3" style="margin-right: 25px;">
                        <label>Mobile</label>
                        <input type="number" class="form-control " placeholder="Enter mobile" id="mobile">
                        <p style="color: red;" id="mobileerror"></p>
                    </div>
                </div>

                <div>

                    <div id="bios" class="form-group mb-3">
                        <label>Bio</label>
                        <textarea rows="2" cols="23" class="form-control mr-5" placeholder="Enter your bio"
                            id="bio"></textarea>
                        <p style="color: red;" id="bioerror"></p>
                    </div>

                </div>

            </div>



            <div class="main">
                <div>
                    <div id="gen" class="form-group mb-3" style="margin-right: 25px; width: 206px;">
                        <label>Gender</label>

                        <select name="gender" class="form-control " id="genderlist">
                            <option value="selectgender">- Select Gender -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                        <p style="color: red;" id="gendererror"></p>
                    </div>
                </div>

                <div>
                    <div id="Dob" class="form-group mb-3" style="width: 203px;">
                        <label>Dob</label>
                        <input type="date" class="form-control mr-5" placeholder="Enter your dob" id="dob">
                        <p style="color: red;" id="doberror"></p>
                    </div>
                </div>

            </div>


            <div class="main">
                <div>

                    <div id="mail" class=" mb-3" style="margin-right: 25px;">
                        <label>Email</label>
                        <input type="email" class="form-control mr-5" placeholder="Enter email" id="email">
                        <p style="color: red;" id="emailerror"></p>
                    </div>
                </div>

                <div>
                    <div id="agee" class=" mb-3">
                        <label>Age</label>
                        <input type="number" class="form-control mr-5" placeholder="Enter your age" id="age">
                        <p style="color: red;" id="ageerror"></p>
                    </div>
                </div>

            </div>

            <div id="pass" class=" mb-3" style="margin-right: 865px;">
                <label>Password</label>
                <input type="password" class="form-control mr-5" placeholder="Enter password" id="password">
                <p style="color: red;" id="passworderror"></p>
            </div>

            <button type="submit" id="register" onclick="javascript:fetchData()" value="Register"
                class="btn btn-primary" style="margin-left: 150px;">Register</button>


    </div>
    </div>

    <script>
        

        document.getElementById("fname").addEventListener("input", checkfname);
        function checkfname() {
            const pattern = /[A-Za-z]/i;
           // let first_name = event.target.value;
           let first_name=document.getElementById("fname").value;
            if (first_name == "") {
                document.getElementById("fnameerror").innerHTML = "First name should not be Empty";
                document.getElementById("fname").style.borderBottom = "2px solid red"
                document.getElementById("fnameerror").style.color = "red";
                 return false;
                

            }

            else if (!pattern.test(first_name)) {

                document.getElementById("fnameerror").innerHTML = "First Name should be in alphabets";
                document.getElementById("fname").style.borderBottom = "2px solid red"
                document.getElementById("fnameerror").style.color = "red";
                 return false;

            }


            else {
                document.getElementById("fnameerror").innerHTML = "Valid First Name";
                document.getElementById("fname").style.borderBottom = "2px solid green"
                document.getElementById("fnameerror").style.color = "green";
                        return true;

            }

        }

        document.getElementById("lname").addEventListener("input", checklname);
        function checklname() {
            const pattern = /[A-Za-z]/i;
            // let last_name = event.target.value;
            let last_name = document.getElementById("lname").value;
            if (last_name == "") {
                document.getElementById("lnameerror").innerHTML = "Last name should not be Empty";
                document.getElementById("lname").style.borderBottom = "2px solid red"
                document.getElementById("lnameerror").style.color = "red";
                return false;

            }

            else if (!pattern.test(last_name)) {

                document.getElementById("lnameerror").innerHTML = "Last Name should be in alphabets";
                document.getElementById("lname").style.borderBottom = "2px solid red"
                document.getElementById("lnameerror").style.color = "red";
                return false;

            }


            else {
                document.getElementById("lnameerror").innerHTML = "Valid last Name";
                document.getElementById("lname").style.borderBottom = "2px solid green"
                document.getElementById("lnameerror").style.color = "green";
                return true;
            }

        }

        document.getElementById("mobile").addEventListener("input", checkmob);
        function checkmob() {
            // const pattern = /^[0-9]+$/i;
            const pattern = /^\d{10}$/i;
            // let mobi = event.target.value;
            let mobi = document.getElementById("mobile").value;
            if (mobi == "") {
                document.getElementById("mobileerror").innerHTML = "Mobile should not be Empty";
                document.getElementById("mobile").style.borderBottom = "2px solid red"
                document.getElementById("mobileerror").style.color = "red";
                return false;

            }

            else if (!pattern.test(mobi)) {

                document.getElementById("mobileerror").innerHTML = "Mobile Number should be 10 dogit";
                document.getElementById("mobile").style.borderBottom = "2px solid red"
                document.getElementById("mobileerror").style.color = "red";
                return false;

            }


            else {
                document.getElementById("mobileerror").innerHTML = "Valid mobile";
                document.getElementById("mobile").style.borderBottom = "2px solid green"
                document.getElementById("mobileerror").style.color = "green";
                return true;


            }

        }

        document.getElementById("bio").addEventListener("input", checkbio);
        function checkbio() {

            // let bio = event.target.value;
            let bio = document.getElementById("bio").value;
            
            if (bio == "") {
                document.getElementById("bioerror").innerHTML = "Bio should not be Empty";
                document.getElementById("bio").style.borderBottom = "2px solid red"
                document.getElementById("bioerror").style.color = "red";
                return false;

            }

            else {
                document.getElementById("bioerror").innerHTML = "Valid bio";
                document.getElementById("bio").style.borderBottom = "2px solid green"
                document.getElementById("bioerror").style.color = "green";
                return true;
            }

        }

        document.getElementById("genderlist").addEventListener("click", checkgender);
        function checkgender() {

            // let gen = event.target.value;
            let gen = document.getElementById("genderlist").value;
            if (gen == "selectgender") {
                document.getElementById("gendererror").innerHTML = "Please select gender";
                document.getElementById("genderlist").style.borderBottom = "2px solid red"
                document.getElementById("gendererror").style.color = "red";
                return false;

            }

            else {
                document.getElementById("gendererror").innerHTML = "";
                document.getElementById("genderlist").style.borderBottom = "2px solid green"
                document.getElementById("gendererror").style.color = "green";
                return true;
            }

        }

        document.getElementById("dob").addEventListener("click", checkdob);
        function checkdob() {

            // let dob = event.target.value;
            let dob = document.getElementById("dob").value;
            if (!dob) {
                document.getElementById("doberror").innerHTML = "Please select date";
                document.getElementById("dob").style.borderBottom = "2px solid red"
                document.getElementById("doberror").style.color = "red";
                return false;

            }

            else {
                document.getElementById("doberror").innerHTML = "";
                document.getElementById("dob").style.borderBottom = "2px solid green"
                document.getElementById("doberror").style.color = "green";
                return true;
            }

        }


        document.getElementById("email").addEventListener("input", checkmail);
        function checkmail() {
            // let email = event.target.value;
            let email = document.getElementById("email").value;
            if (email.includes("@") && email.includes(".")) {

                document.getElementById("emailerror").innerHTML = "Valid email";
                document.getElementById("email").style.borderBottom = "2px solid green"
                document.getElementById("emailerror").style.color = "green";
                return true;
            }
            else {

                document.getElementById("emailerror").innerHTML = "Invalid email";
                document.getElementById("email").style.borderBottom = "2px solid red"
                document.getElementById("emailerror").style.color = "red";
               
                return false;
            }
        }


        document.getElementById("age").addEventListener("input", checkage);
        function checkage() {
            const pattern = /^[0-9]+$/i;
            // let age = event.target.value;
            let age = document.getElementById("age").value;
            if (age == "") {
                document.getElementById("ageerror").innerHTML = "Age should not be Empty";
                document.getElementById("age").style.borderBottom = "2px solid red"
                document.getElementById("ageerror").style.color = "red";
                return false;

            }

            else if (!pattern.test(age)) {

                document.getElementById("ageerror").innerHTML = "Age should be in a number";
                document.getElementById("age").style.borderBottom = "2px solid red"
                document.getElementById("ageerror").style.color = "red";
                return false;

            }


            else {
                document.getElementById("ageerror").innerHTML = "Valid Age";
                document.getElementById("age").style.borderBottom = "2px solid green"
                document.getElementById("ageerror").style.color = "green";
                return true;
            }

        }
      

        document.getElementById("password").addEventListener("input", checkpass);
        function checkpass() {
            const pattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/i;

            // let pass = event.target.value;
            let pass = document.getElementById("password").value;
            if (pass == "") {
                document.getElementById("passworderror").innerHTML = "Should should not be Empty";
                document.getElementById("password").style.borderBottom = "2px solid red"
                document.getElementById("passworderror").style.color = "red";
                return false;

            }

            else if (!pattern.test(pass)) {

                document.getElementById("passworderror").innerHTML = "Password must include at least one number!<br>     Password must include at least one letter!<br>     Password must include at least one CAPS!<br>     Password must include at least one symbol!<br>";
                document.getElementById("password").style.borderBottom = "2px solid red"
                document.getElementById("passworderror").style.color = "red";
                return false;

            }


            else {
                document.getElementById("passworderror").innerHTML = "Valid password";
                document.getElementById("password").style.borderBottom = "2px solid green"
                document.getElementById("passworderror").style.color = "green";
                return true;
            }

        }      


    </script>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>

        function fetchData() {
            
                 
            if (checkfname() && checklname() && checkmob() && checkbio() && checkgender() && checkdob() && checkmail() && checkage() && checkpass()) {

                let email = $("#email").val();
                $(document).ready(function () {
                    $.ajax({
                        type: "post",
                        url: "fetchRegister.php",
                        data: { 'email': email },
                        success: function (responseText) {

                            try {
                                var flag = 0;
                                let data = JSON.parse(responseText);
                                console.log(data);

                                if (data.length > 0) {
                                    console.log("data lenght");
                                    for (var a = 0; a < data.length; a++) {
                                        let getmail = data[a].email;
                                        console.log(getmail);
                                        console.log("chek email: " + email);

                                        if (getmail == email) {
                                            flag = 1;
                                            console.log(true);
                                            $("#emailerror").text("Email already exist").css("color", "red");

                                            break;
                                        }


                                    }
                                    if (flag == 0) {
                                        $("#emailerror").text("Email already exist").css("color", "red");
                                        sendData();
                                        location.replace("login.php");
                                    }

                                } else {

                                    sendData();
                                    location.replace("login.php");
                                }


                            } catch (e) {
                                alert(e)
                                console.log(e);

                            }
                        }
                    });
                });

            }
            else {
                alert("required data");
            }

 
        }


        function sendData() {

            let fname = $("#fname").val();
            let lname = $("#lname").val();
            let mobile = $("#mobile").val();
            let bio = $("#bio").val();
            let gender = $("#genderlist").val();
            let dob = $("#dob").val();
            let email = $("#email").val();
            let age = $("#age").val();
            let password = $("#password").val();

            $(document).ready(function () {
                $.ajax({
                    type: "post",
                    url: "registerprocess.php",
                    data: {
                        'fname': fname,
                        'lname': lname,
                        'mobile': mobile,
                        'bio': bio,
                        'gender': gender,
                        'dob': dob,
                        'email': email,
                        'age': age,
                        'password': password
                    },
                    success: function (data) {
                        location.replace("login.php");
                    }
                });
            });



        }

        // function seterror(id, error) {
        //     element = document.getElementById(id);
        //     element.getElementsByClassName('formerror')[0].innerHTML = error;

        // }
        // function validation() {

        //     let first_name = document.getElementById('fname').value;
        //     let last_name = document.getElementById('lname').value;
        //     let mobi = document.getElementById('mobile').value;
        //     let boiss = document.getElementById('bio').value
        //     let dobb = document.getElementById('dob').value;
        //     let mail = document.getElementById('email').value;
        //     let ageee = document.getElementById('age').value;
        //     let psw = document.getElementById('password').value;

        //     var gend,
        //         element = document.getElementById('genderlist');
        //     if (element != null) {
        //         gend = element.value;
        //     } else {
        //         gend = null;
        //     }




           



        //     // for first name


        //     const pattern = /[A-Za-z]/i;

        //     if (first_name == "") {
        //         document.getElementById("fnameerror").innerHTML = "First name should not be Empty";

        //         return false;

        //     } else if (!pattern.test(first_name)) {

        //         document.getElementById("fnameerror").innerHTML = "First Name should be in alphabets";

        //         return false;
        //     }
        //     else {
        //         document.getElementById("fnameerror").innerHTML = "";
        //         return true;


        //     }



        //     // for last name


        //     if (last_name == "") {

        //         document.getElementById("lnameerror").innerHTML = "Last Name Not be Empty";

        //         return false;
        //     } else if (!pattern.test(last_name)) {


        //         document.getElementById("lnameerror").innerHTML = "Last Name should be in alphabets";


        //         return false;
        //     }
        //     else {
        //         document.getElementById("lnameerror").innerHTML = "";


        //     }


        //     // mobile


        //     if (mobi == 0) {

        //         document.getElementById("mobileerror").innerHTML = "Mobile Not be Empty";
        //         return false;
        //     }
        //     else {
        //         document.getElementById("mobileerror").innerHTML = "";

        //     }



        //     if (boiss.length == 0) {

        //         document.getElementById("bioerror").innerHTML = "Bio Not be Empty";

        //         return false;
        //     }
        //     else {

        //         document.getElementById("bioerror").innerHTML = "";

        //     }


        //     //gender 


        //     if (gend == "selectgender") {

        //         document.getElementById("gendererror").innerHTML = "Gender Not be Empty";

        //         return false;
        //     }
        //     else {

        //         document.getElementById("gendererror").innerHTML = "";

        //     }


        //     // dob


        //     if (!dobb) {

        //         document.getElementById("doberror").innerHTML = "Dob not be Empty";

        //         return false;
        //     }
        //     else {
        //         document.getElementById("doberror").innerHTML = "";


        //     }


        //     //mail



        //     if (mail == "") {

        //         document.getElementById("mailerror").innerHTML = "Email Not be Empty";

        //         return false;
        //     }
        //     else {
        //         document.getElementById("mailerror").innerHTML = "";


        //     }


        //     //age

        //     if (ageee == "") {

        //         document.getElementById("ageerror").innerHTML = "Age Not be Empty";

        //         return false;
        //     }
        //     else {
        //         document.getElementById("ageerror").innerHTML = "";


        //     }


        //     // password
        //     const pswpattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/i;

        //     if (psw == "") {

        //         document.getElementById("passworderror").innerHTML = "Password Not be Empty";


        //         return false;
        //     } else if (!pswpattern.test(psw)) {


        //         document.getElementById("passworderror").innerHTML = "Password must include at least one number!<br>     Password must include at least one letter!<br>     Password must include at least one CAPS!<br>     Password must include at least one symbol!<br>";

        //         return false;
        //     }

        //     else {
        //         document.getElementById("passworderror").innerHTML = "";


        //     }
        // }
    </script>

</html>