<?php
if($_SESSION["FIEM"]==null)
    {
        header("location:index.html?msg=loginfirst");
    }
?>