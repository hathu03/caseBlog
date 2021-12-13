<p>
    <?php
    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else {
        header("location:index.php?page=login");
    }
    ?>
</p>
<hr>