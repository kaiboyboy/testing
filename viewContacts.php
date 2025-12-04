<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 250px;
            height: 400px;
            background-color: #fff082;
            float:left;
            margin: 10px;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 10px;
            border: 2px solid #a6a6a6;
        }
    </style>
</head>
<body>
    <a href='addNewContact.php'>Add New  Contact</a><hr>
    <form method="post">
        Search:<input type='search' name='search_key'>
        <button name='searchBtn'>Search</button>
    </form>

    <?php
    include("conn.php");

    $search_key ='';

    if(isset($_POST['searchBtn'])){
        $search_key = $_POST['search_key'];
    }

    $sql = "SELECT * FROM contacts WHERE contact_name LIKE '%$search_key%' ";
    $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)){
        echo '<div class = "box">';

        if ($row['contact_gender'] == "Male"){
            echo "<img src = \'man.png\' width=\'50\'>";
        }
        
        if ($row['contact_gender'] == "Female"){
            echo "<img src = \'woman.png\' width=\' 50\'>";
        }

        echo '<h3>' . $row['contact_name']. '</h3>';
        echo '<p>' . $row['contact_phone']. '</p>';
        echo '<p>' . $row['contact_email']. '</p>';
        echo '<p>' . $row['contact_address']. '</p>';
        echo '<p>' . $row['contact_gender']. '</p>';
        echo '<p>' . $row['contact_relationship']. '</p>';
        echo '<p>' . $row['contact_dob']. '</p>';
        echo "<button type='button' 
                onclick=\"if(confirm('Are you sure?'))
                {window.location.href='deleteContact.php?id=$row[id]';}\">
                Delete
                </button>";
        echo '</div>';
    }
    ?>
</body>
</html>