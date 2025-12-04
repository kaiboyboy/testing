<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Contact</title>
    <style>
        input[type=text],input[type=tel],input[type=email],
        input[type=date],textarea,select{
            width:100%;
            padding:15px;
            margin-top:5px;
            margin-bottom:22px;
            font-size:15px;
        }
        input[type=text]:valid,input[type=tel]:valid,
        input[type=email]:valid,input[type=date]:valid,
        textarea:valid,select:valid{
            background-color:#7EB77F;
        }
        input[type=text]:invalid,input[type=tel]:invalid,
        input[type=email]:invalid,input[type=date]:invalid,
        textarea:invalid,select:invalid{
            background-color:#ED7B84;
        }

        .button_container{
            display:flex;
            gap:10px;
        }

        .button_container{
            background-color:#959595;
            border:none;
            color:white;
            padding:15px 32px;
            text-align:center;
            display:inline-block;
            font-size:16px;
            transition: background-color 0.3s ease;
            border-radius:5px;
        }

        .button_container button:hover{
            background-color:#b3b3b3;
        }

        #container{
            width:700px;
            margin:0 auto;
            border:3px solid #000;
            padding:10px 20px;
        }

        * {
            box-sizing:border-box;
        }


    </style>
</head>
<body>
    <div id="container">
        <h1>My Address Book</h1>
        <h2>Add New Contact</h2>
        <form method="post" action="#">
            <label>Name</label><br>
            <input type="text" name="contact_name" required>
            <br>
            <label>Phone Number</label><br>
            <input type="tel" name="contact_phone" required>
            <br>
            <label>Email Address</label><br>
            <input type="email" name="contact_email" required>
            <br>
            <label>Home Address</label><br>
            <textarea name="contact_address" required></textarea>
            <br>
            <label>Gender</label><br>
            <input type="radio" name="contact_gender"
            value="Male" required> Male
            <input type="radio" name="contact_gender"
            value="Female" required> Female
            <br>
            <label>Relationship</label><br>
            <select name="contact_relationship" required>
                <option value="">Please Seelect</option>
                <option value="Family">Family</option>
                <option value="Friend">Friend</option>
                <option value="Colleague">Colleague</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <label>Date of Birth</label><br>
            <input type="date" name="contact_dob" required>

            <div class="button_container"> 
                <button type="submit" name="submitBtn">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
    
    <?php
    if (isset($_POST['submitBtn'])){
        include("conn.php");

        $sql="INSERT INTO contacts (contact_name, contact_phone, contact_email,contact_address,
        contact_gender,contact_relationship,contact_dob)

        VALUES
        ('$_POST[contact_name]','$_POST[contact_phone]','$_POST[contact_email]','$_POST[contact_address]',
        '$_POST[contact_gender]','$_POST[contact_relationship]','$_POST[contact_dob]')";

        if (!mysqli_query($con,$sql)) {
            die('Error: '. mysqli_error($con));
        }
        else {
            echo '<script>alert("1 record added!");
            window.location.href = "viewContacts.php";
            </script>';
        }
            mysqli_close($con);
    }
    ?>


</body>
</html>