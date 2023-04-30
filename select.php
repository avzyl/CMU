<?php


if(isset($_POST["emp_id"]))
{
    $output = '';

    $connect = mysqli_connect("localhost", "root", "", "cmu");
    $query = "SELECT * FROM tbl_accounts WHERE id = '".$_POST["emp_id"]."'";
    $result = mysqli_query($connect, $query);


    $output .= '
    <div class="table-responsive">
         <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
         $output .= '
         <div class="text-center">
         <tr">
         <h3>'.$row["name"].'</h3>
         </tr>
         <tr">
         <p>'.$row["username"].'</p>
         </tr>
         <tr>
         <p>College/s: '.$row["colleges"].'</p>
         </tr>
         <tr>
         <p>Email: '.$row["email"].'</p>
         </tr>
         </div>';
    }
    $output .= "</table></div>";
    echo $output;








}
