<html>
<head>
</head>
<body>
<?php
$form = [
    "username" => $_POST["username"],
    "email" => $_POST["email"],
    "password" => $_POST["password"],
    "password2" => $_POST["password2"],
    "gender" => $_POST["password2"]
]
?>

<?php
echo print_r($form)
?>

</body>
</html>