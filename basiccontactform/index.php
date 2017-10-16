<?php
$required = ['title','email','food'];
$missing = [];
$errors = [];
$numneeded = [
    'food' => 2
];

if(!isset($_POST['food'])){
    $_POST['food'] = [];
}
if($_POST){
    foreach($_POST as $key => $value){
        $$key = $value;
        if($value == '' && in_array($key,$required)){
            $missing[] = $key;
        }
        if(is_array($value) && in_array($key,array_keys($numneeded))){
            if(count($value) < $numneeded[$key])
            $errors[$key] = "$key must be $numneeded[$key] or greater";
        }
        $validEmail = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        if(!$validEmail){
            $errors['email'] = "Invalid email!";
        }
    }
    echo "<ul>";
    foreach($missing as $miss){
        echo "<li>$miss is missing</li>";
    }
    foreach($errors as $key => $val){
        if(!in_array($key,$missing)){
        echo "<li>";
        echo "$key - $val";
        echo "</li>";
        }
    }
    echo "</ul>";

    if(!$missing && !$errors){
        echo "congrats, your form is submitted! :D";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact me</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group"><label for="title">Title:</label><input type="text" name="title" class="form-control"></div>
        <div class="form-group"><label for="email">Email:</label><input type="text" name="email" class="form-control"></div>
        <div class="form-group"><label for="body">Body:</label><input type="text" name="body" class="form-control"></div>
        <div class="form-group">
            <label for="gender">fave foods:</label>
            <input type="checkbox" name="food[]" value="bacon">bacon
            <input type="checkbox" name="food[]" value="chicken">chicken
            <input type="checkbox" name="food[]" value="fish">fish
        </div>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
</body>
</html>