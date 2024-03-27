<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form validation</title>
</head>
<body>

    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="name" >Name:</label><br>
    <div>
        <input type="text" name="name" id="name">
    </div>
    
    </br>
    <label for="email">E-mail:</label>
    <div>
        <input type="email" name="email" id="email">
    </div>
    </br>
    <label for="website">Website :</label>
    <div>
        <input type="text" name="website" id="website">

    </div>
    </br>
    <label for="comment">Comment : </label>
    <div>
        <textarea name="myComment" id="comment" rows="5"  cols="20" ></textarea>
    </div>
    <br>
    <label for="gender">Gender:</label>
    <div>
        <input type="radio" name="gender" id="gender">Male
        <input type="radio" name="gender" id="gender">Female
        <input type="radio" name="gender" id="gender">Other
    </div>
    
    <br>
    <div>
        <input type="submit" name="save">
    </div>


    </form>

    <?php
    $name=$email = $website=$comment =$gender = "";
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST["save"]))
        {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["myComment"]);
            $gender = test_input($_POST["gender"]);
        }
    
    }
    
    function test_input($data)
    {
        $data = trim($data);//remove empty lines,tabs and spaces and newlines from data
        $data = stripslashes($data); //remove backslashes
        $data = htmlspecialchars($data); //convert special characters to HTML entities.
        return $data;
    }
        
    ?>
    <?php
        echo  "<h1>Input Data : </h1>";
        echo "Name :".$name."<br>";
        echo "E-mail :". $email."<br>";
        echo "Website :".$website."<br>";
        echo "Comment :".$comment."<br>";
        echo "Gender :".$gender."<br>";
    
    
    ?>
    
    
</body>
</html>
