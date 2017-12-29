<!DOCTYPE html>
<html lang="en">
<?php
//check password
$pwfile = fopen("Password", "r");
$pw = fgets($pwfile);
fclose($pwfile);
if(!password_verify($_POST["PSSWD"], $pw)){
    echo("<script>var u = window.location.href.toString().replace('admin.php', 'enteradmin.html'); document.location=u;</script>");
    die;
}
?>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900');
        body{
            text-align: center;
        }
        table{
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        a{
            color: purple;
            text-decoration: none;
        }
        h1{
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
        th{
            cursor: pointer;
            text-align: center;
        }
        th:hover{
            background-color: lightgray;
        }
    </style>
</head>
<body>
<script>
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("questions");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
         no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
             first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                 one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                 based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                 and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount ++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                 set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>
    <table id="questions">
        <col width="10%">
        <col width="15%">
        <col width="25%">
        <col width="50%">
        <tr>
            <th onclick="sortTable(0)">Type</th>
            <th onclick="sortTable(1)">Name</th>
            <th onclick="sortTable(2)">Email</th>
            <th onclick="sortTable(3)">Question</th>
        </tr>
        <?php
        Require_Once("DBConnect.php");
        $sql = "SELECT * FROM Requests WHERE Answered='false'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo("<tr><td>".$row["Type"]."</td> <td>".$row["Name"]."</td> <td>".$row["Email"]."</td> <td>".$row["Question"]."</td></tr>");
            }
        }else{
            echo("There Are No Help Requests At This Time");
        }
        ?>
    </table>
</body>
