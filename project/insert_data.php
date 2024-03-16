<?php

if(isset($_POST['add_students'])){
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $age=$_POST['age'];

if($fname==""|| empty($fname)){
    header('location:indexx.php?message=you need to fill in the first name');
}

else{
    $query="insert into 'students'("f_name","l_name","age") values("$fname","$lname","$ag")";

    $result=mysqli_query($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error());
    }
    else{
        header('location:index.php?insert_msg=your data has been added successfully');
    }
}



}
?>