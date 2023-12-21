<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    
    <?php 
    //get
    //http://localhost/SE_CAMP/week4/Form.php?q=1 
    ?>
    <!-- post -->
    <form action="" method="post">
    <input type="text" name="my_val">
    <button type="Submit">บันทึก</button>
    </form>
    <h1><?php 
        if(isset($_POST['my_val'])){
            echo $_POST['my_val'];
        } ?>
    </h1>
</body>

</html>