<!-- check session -->
<?php include '../private/session.php' ?> 
<!-- database connection -->
<?php include '../private/db_connection_GCP.php'; ?>
<!-- header -->
<?php include 'shared/top.php' ?>

<body>

<!-- Nav bar -->
<?php include 'shared/menu.php' ?>

<div class="container">


<div class="content-container">

<!-- SHow department table -->

<button onclick='showDep()' class="button-blue">Show</button>

</br></br>
<div class="dept">
<?php 
    $sql = "SELECT * FROM departments order by dept_no ASC";
    $query = mysqli_query($connection, $sql);

    if($query){
        echo "

        <table id='tabledep' class='disable'>
            <tr>
                <th style='color: #1ba1f2;'>Department Number</th>
                <th style='color: #1ba1f2;'>Name</th>
            </tr> ";
        while($row = mysqli_fetch_assoc($query)){
            echo "
                <tr>
                    <th>".$row["dept_no"]. "</th>
                    <th>".$row["dept_name"]."</th>
                </tr> ";
            }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>
</div>
    <!-- Search a employee by Id  -->
    <div class = "empt">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $emp_id = $_GET['emp_id'];
        $sql = "SELECT * FROM dept_emp where emp_no='$emp_id'";
        $query = mysqli_query($connection, $sql);
    }

            echo '<form method="GET">
            Employee Number: &nbsp <input type="text"  name="emp_id"></br> </br>
            <input type="submit" class="button-blue">
            </form>';

        if ($query) {

                echo "<table>
                <th>Employee No.</th>
                <th>Department No.</th>
                <th>From</th>
                <th>To</th>";

                while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>
                <td>" . $row["emp_no"] . "</td>
                <td>" . $row["dept_no"] . "</td>
                <td>" . $row["from_date"] . "</td>
                <td>" . $row["to_date"] . "</td>
                </tr> ";
                
                }
            echo "</table>";
                
            }else {
                echo "0 results";
            }
            ?>
        </div>

</div>
<!-- Script -->
<script src="js/script.js"></script>
<!-- Bottom -->
<?php include 'shared/bottom.php' ?>