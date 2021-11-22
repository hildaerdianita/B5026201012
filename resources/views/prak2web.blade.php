<html>
    <head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <style type="text/css"></style>
    <style type="text/css">

        body{background: #e599db;}
        h1{text-align:center;}

        form{
            background-color: rgb(255,255,255,0.7);
          width: 800px;
          height: 500px;
          margin: 30px auto;
          padding: 3px;
          text-align: right;
          border-radius: 40px 10px;
          box-shadow: 2px 2px 7px #393939;}

        form li {
            list-style: none;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 100px;}

        form ul li label{
            float: left;
            clear: left;
            width: 100px;
            text-align: right;
            margin-right: 15px;
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size:14px;}

        form ul li input, select, span {
            float: left;
            margin-bottom: 10px;}

        form textarea {
            float: left;
            width: 350px;
            height: 150px;}

        [type="submit"] {
            clear: left;
            margin: 20px 0 0 230px;
            font-size:18px;
            background: #3498db;
            color:whitesmoke;
            border: 0;
            padding: 5px 8px;}
</style>

<script>
    //validasi userid
    function userid_validation(){
        'use strict';
        var userid_name = document.getElementById("userid");
        var userid_value = document.getElementById("userid").value;
        var userid_length = userid_value.length;
        if(userid_length<5|| userid_length>12)
            {
                document.getElementById('uid_err').innerHTML = 'Value must not be less than 5 characters and greater than 12 characters';
                userid_name.focus();
                document.getElementById('uid_err').style.color = "#FF0000";
            }
            else
            {
                document.getElementById('uid_err').innerHTML = 'Valid user id';
                document.getElementById('uid_err').style.color = "#00AF33";
            }
        }

    //validasi password
    function password_validation(){
        'use strict';
        var passid_name = document.getElementById("passid");
        var passid_value = document.getElementById("passid").value;
        var passid_length = passid_value.length;
        if(passid_length<7 || passid_length>12)
        {
            document.getElementById('passwd_err').innerHTML = 'Password must not be less than 7 characters and greater than 12 characters';
            passid_name.focus();
            document.getElementById('passwd_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('passwd_err').innerHTML = 'Valid password';
            document.getElementById('passwd_err').style.color = "#00AF33";
        }
    }

    //Validasi name
    function name_validation(){
        'use strict';
        var name_name = document.getElementById("name");
        var name_value = document.getElementById("name").value;
        var letters = /^[a-zA-Z]+$/;
        if(!name_value.match(letters))
        {
            document.getElementById('name_err').innerHTML = 'Name must be alphabetes characters only.';
            name_name.focus();
            document.getElementById('name_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('name_err').innerHTML = 'Valid name';
            document.getElementById('name_err').style.color = "#00AF33";
        }
    }

    // validasi country
    function country_validation(){
        'use strict';
        var country_name = document.getElementById("country");
        var country_value = document.getElementById("country").value;
        if(country_value === "Default" || country_value === "--")
        {
            document.getElementById('country_err').innerHTML = 'You must select a country';
            country_name.focus();
            document.getElementById('country_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('country_err').innerHTML = 'Country selected.';
            document.getElementById('country_err').style.color = "#00AF33";
        }
    }

    //validasi zipcode
    function zipcode_validation(){
        'use strict';
        var numbers = /^[0-9]+$/;
        var zip_name = document.getElementById("zip");
        var zip_value = document.getElementById("zip").value;
        var zip_length = zip_value.length;
        if(!zip_value.match(numbers) || zip_length !== 5)
        {
            document.getElementById('zip_err').innerHTML = 'You must enter a ZIP code, which must be numeric only.';
            zip_name.focus();
            document.getElementById('zip_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('zip_err').innerHTML = 'ZIP code entered';
            document.getElementById('zip_err').style.color = "#00AF33";
        }
    }

    //validasi email
    function email_validation(){
        'use strict';
        var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
        var email_name = document.getElementById("email");
        var email_value = document.getElementById("email").value;
        var email_length = email_value.length;
        if(!email_value.match(mailformat) || email_length === 0)
        {
            document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
            email_name.focus();
            document.getElementById('email_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('email_err').innerHTML = 'Valid email format';
            document.getElementById('email_err').style.color = "#00AF33";
        }
    }

    //validasi gender
    function gender_validation(){
        'use strict';
        if ( (document.getElementById("msex").checked === false) && (document.getElementById("fsex").checked === false)){
            document.getElementById('gender_err').innerHTML = 'Please slect a geneder.';
            document.getElementById('gender_err').style.color = "#FF0000";
            document.getElementById("msex").checked = true;
        }
        else
        {
            document.getElementById('gender_err').innerHTML = 'Gender selected';
            document.getElementById('gender_err').style.color = "#00AF33";
        }
    }



    </script>

</head>
<body>
    <h1>Registration Form</h1>
    <form action="/action_page.php">
    <form name='registration'>
        <ul>
            <li><label for="userid">User id:</label></li>
            <li><input type="text" name="userid" id="userid" size="12" onBlur="userid_validation();"/><span id="uid_err"></span></li>
            <li><label for="pw">Password:</label></li>
            <li><input type="password" name="pw" id="pw" size="12" onBlur="password_validation();"/><span id="passwd_err"></span></li>
            <li><label for="name">Name:</label></li>
            <li><input type="text" name="name" id="name" size="50" onBlur="name_validation();" /><span id="name_err"></span></li>
            <li><label for="address">Address:</label></li>
            <li><input type="text" name="address" id="address" size="50" /><span id="add_err"></span></li>
            <li><label for="country">Country:</label></li>
            <li><select id="country" name="country" onBlur="country_validation();">
                <option selected="" value="Default">(Please select a country)</option>
                <option value="--">none</option>
                <option value="IN">Indonesia</option>
                <option value="KO">Korea</option>
                <option value="CH">China</option>
                <option value="TH">Thailand</option>
                <option value="JP">Japan</option>
            </select><span id="country_err"></span></li>
            <li><label for="zip">ZIP Code:</label></li>
            <li><input type="text" name="zip" id="zip" onBlur="zipcode_validation();" /><span id="zip_err"></span></li>
            <li><label for="email">Email:</label></li>
            <li><input type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span></li>
            <li><label id="gender">Sex:</label></li>
            <li><input type="radio" name="msex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span></li>
            <li><input type="radio" name="fsex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>
            <li><label>Language:</label></li>
            <li><input type="checkbox" name="en" value="en" onBlur="language_validation();" /><span>English</span></li>
            <li><input type="checkbox" name="nonen" value="noen" /><span>Non English</span id="lang_err"></span></li>
            <li><label for="about">About:</label></li>
            <li><textarea name="about" id="about"></textarea></li>
            <li><input type="submit" name="submit" value="Submit" /></li>
        </ul>
    </form>
    <br>


</body>
</html>
