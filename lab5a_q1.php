<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nurin Nasuha Binti Mohd Nasir";
        $matric_number = "CI230020";
        $course = "Computer Science | BIS";
        $year_of_study = "Year 2";
        $address = "Pasir Gudang, Johor";
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
            <td>Matric_Number</td>
            <td><?php echo "$matric_number"; ?></td> 
        </tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
            <td>Year of Study</td>
            <td><?php echo "$year_of_study"; ?></td> 
        </tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
