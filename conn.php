<?php
    $conn=mysqli_connect('localhost','root','','tala');
    
    if(!$conn)
    {echo 'error:'.mysqli_connect_error($conn);}
