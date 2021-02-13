<?php

if (isset($_POST))
{
    $user_id=$_POST['email'];
}

if (isset($user_id))
{
    ?>Welcome <?php echo $user_id;
}

?>