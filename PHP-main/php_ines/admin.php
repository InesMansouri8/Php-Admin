<?php
    $username = "root";
    $password = "root";
    $database = 'contact';
    $servername = 'localhost:3306';
    $mysqli = new mysqli($servername,$username,$password,$database);
    if ($mysqli->connect_error) {
        die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
    }
    $sql = " SELECT * FROM contact ORDER BY id ASC ";
    $result = $mysqli->query($sql);
    $mysqli->close();
 ?>
 <!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body {
            background-color: #4A5679;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #9B64A6;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #6469A2;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Contacts</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Sujet</th>
                <th>Message</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Nom'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Telephone'];?></td>
                <td><?php echo $rows['Sujet'];?></td>
                <td><?php echo $rows['Message'];?></td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>