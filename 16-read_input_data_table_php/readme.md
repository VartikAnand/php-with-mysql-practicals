## Write a program to read input data, from table and display all this information in tabular form on output screen


## Code

### index.php


```php

<?php

$conn = mysqli_connect("localhost", "root", "", "vartikdb");

if (!$conn) {
    echo "Error connecting to database";
}

$query = "SELECT * from emp";

$result = mysqli_query($conn, $query);

?>
<html lang="en">

<body>
    <center>
        <table border="2" cellpadding="30px">
            <th>Id No</th>
            <th>Name</th>
            <th>salary</th>

            <?php
            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>";
                echo "<td>" . $row['emp_no']  . "</td>";
                echo "<td>" . $row['emp_name']  . "</td>";
                echo "<td>" . $row['salary']  . "</td>";

                echo "<tr>";
            }

            ?>

        </table>
    </center>
</body>

</html>

```

## Output

![Output Image Unavailable](1.png)