<html>
<body>
    <?php 
    $name = $_POST["name"];
    $email = $_POST["email"];

    // if($_POST["name"] === true){
    //     echo "Dear $name, thank you for your comments.";
    // } elseif ($_POST["email"] === true) {
    //     echo "Dear $email, thank you for your comments.";
    // } else {
    //     echo "Dear guest, thank you for your comments.";
    // }
    ?>

<h2>
    Dear <?php echo $name;?>, thank you for your comments.
</h2>

</body>
</html>


