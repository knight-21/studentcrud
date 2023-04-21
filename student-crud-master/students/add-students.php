<?php

    require_once "../connection.php";

    if(isset($_POST['add_student']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $year = $_POST['year'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO students(fname, lname, gender, year, course, semester)
        VALUES('$fname', '$lname', '$gender', '$year', '$course', '$semester')";
        $result = $conn->query($sql);

        if($result)
        {
            header("Location: ../students.php");
        }else
        {
            die("something went wrong");
        }
    }