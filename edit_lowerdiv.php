<?php

require_once 'header.php';
require_once 'functions.php';


$connection = new mysqli($hn,$un,$pw,$db);

if($connection->connect_error) die($connection->connect_error);

var_dump($_POST);
update_grades();
update_first_attempt();
update_second_attempt();
update_third_attempt();

/**UPDATE FIRST ATTEMP **/
function update_first_attempt(){
    if(isset($_POST['CS_1401_+_one'])){
        $first = $_POST['CS_1401_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='CS 1401 +';");
    }
    if(isset($_POST['CS_2401_+_one'])){
        $first = $_POST['CS_2401_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='CS 2401 +';");
    }
    if(isset($_POST['MATH_2300_+_one'])){
        $first = $_POST['MATH_2300_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='MATH 2300 +';");
    }
    if(isset($_POST['CS_2302_+_one'])){
        $first = $_POST['CS_2302_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='CS 2302 +';");
    }
    if(isset($_POST['EE_2369_+_one'])){
        $first = $_POST['EE_2369_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='EE 2369 +';");
    }
    if(isset($_POST['EE_2169_+_one'])){
        $first = $_POST['EE_2169_+_one'];
        queryMysql("UPDATE lowerdiv SET one='$first' WHERE coursenum='EE 2169 +';");
    }
}
/**UPDATE SECOND ATTEMPT **/
function update_second_attempt(){
    if(isset($_POST['CS_1401_+_two'])){
        $second = $_POST['CS_1401_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='CS 1401 +';");
    }
    if(isset($_POST['CS_2401_+_two'])){
        $second = $_POST['CS_2401_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='CS 2401 +';");
    }
    if(isset($_POST['MATH_2300_+_two'])){
        $second = $_POST['MATH_2300_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='MATH 2300 +';");
    }
    if(isset($_POST['CS_2302_+_two'])){
        $second = $_POST['CS_2302_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='CS 2302 +';");
    }
    if(isset($_POST['EE_2369_+_two'])){
        $second = $_POST['EE_2369_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='EE 2369 +';");
    }
    if(isset($_POST['EE_2169_+_two'])){
        $second = $_POST['EE_2169_+_two'];
        queryMysql("UPDATE lowerdiv SET two='$second' WHERE coursenum='EE 2169 +';");
    }
}

/**UPDATE THIRD ATTEMPT **/
function update_third_attempt(){
    if(isset($_POST['CS_1401_+_three'])){
        $third = $_POST['CS_1401_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='CS 1401 +';");
    }
    if(isset($_POST['CS_2401_+_three'])){
        $third = $_POST['CS_2401_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='CS 2401 +';");
    }
    if(isset($_POST['MATH_2300_+_three'])){
        $third = $_POST['MATH_2300_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='MATH 2300 +';");
    }
    if(isset($_POST['CS_2302_+_three'])){
        $third = $_POST['CS_2302_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='CS 2302 +';");
    }
    if(isset($_POST['EE_2369_+_three'])){
        $third = $_POST['EE_2369_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='EE 2369 +';");
    }
    if(isset($_POST['EE_2169_+_three'])){
        $third = $_POST['EE_2169_+_three'];
        queryMysql("UPDATE lowerdiv SET three='$third' WHERE coursenum='EE 2169 +';");
    }
}

/**UPDATE GRADES **/
function update_grades(){
    if(isset($_POST['CS_1401_+_GR'])){
        $grade = $_POST['CS_1401_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='CS 1401 +';");
    }
    if(isset($_POST['CS_2401_+_GR'])){
        $grade = $_POST['CS_2401_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='CS 2401 +';");
    }
    if(isset($_POST['MATH_2300_+_GR'])){
        $grade = $_POST['MATH_2300_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='MATH 2300 +';");
    }
    if(isset($_POST['CS_2302_+_GR'])){
        $grade = $_POST['CS_2302_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='CS 2302 +';");
    }
    if(isset($_POST['EE_2369_+_GR'])){
        $grade = $_POST['EE_2369_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='EE 2369 +';");
    }
    if(isset($_POST['EE_2169_+_GR'])){
        $grade = $_POST['EE_2169_+_GR'];
        queryMysql("UPDATE lowerdiv SET GR='$grade' WHERE coursenum='EE 2169 +';");
    }
}

print_table_for_edit("SELECT * FROM lowerdiv", "Lower Division Requirements (18)","edit_lowerdiv.php");



$connection->close();



?>