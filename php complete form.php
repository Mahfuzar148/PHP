<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form validation</title>
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>
<body>
<?php
    $nameError = "";
    $emailError = "";
    $websiteError = "";
    $commentError = "";
    $genderError = "";
    $name=$email = $website=$comment =$gender = "";
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST["save"]))
        {
            if(empty($_POST["name"]))
            {
                $nameError = "Name is required";
            }
            else
            {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if(!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $nameError = "Only letters and white space allowed";
                }
            }
            
            if(empty($_POST["email"]))
            {
                $emailError = "Email is required";
            }
            else
            {
                $email = test_input($_POST["email"]);
                 // check if e-mail address is well-formed
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {   
                    $emailError = "Invalid email format";
                }
            }
            
            if(empty($_POST["website"]))
            {
                $websiteError = "";
            }
            else
            {
                $website = test_input($_POST["website"]);
                 // check if URL address syntax is valid
                if(!filter_var($website, FILTER_VALIDATE_URL))
                {
                    $websiteError = "Invalid URL provided";
                }
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
                {
                    $websiteError = "Invalid URL provided";
                }
            }
            if(empty($_POST["myComment"]))
            {
                $commentError = "";
            }
            else
            {   
                $comment = test_input($_POST["myComment"]);
            }
            if(empty($_POST["gender"]))
            {
                $genderError = "Gender is required";
            }
            else
            {
                $gender = test_input($_POST["gender"]);
            }
        
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
    <h2>PHP Form Validation Example</h2>

    <p><span class="error">* required field</span></p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="name" >Name:</label><br>
    <div>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameError ;?></span>
    </div>
    
    </br>
    <label for="email">E-mail:</label>
    <div>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <span class ="error">*<?php echo $emailError ;?></span>
    </div>
    </br>
    <label for="website">Website :</label>
    <div>
        <input type="text" name="website" id="website" value="<?php echo $website ; ?>">

    </div>
    </br>
    <label for="comment">Comment : </label>
    <div>
        <textarea name="myComment" id="comment" rows="5"  cols="20" ><?php echo $comment; ?></textarea>
    </div>
    <br>
    <label for="gender">Gender:</label>
    <div>
        <input type="radio" name="gender" id="gender"  <?php if(isset($gender) && $gender=="male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" id="gender" <?php if(isset($gender) && $gender=="female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" id="gender" <?php  if(isset($gender) && $gender=="other") echo "checked" ;?> value="other">Other

        <span class="error">* <?php echo $genderError ;?></span>
    </div>
    
    <br>
    <div>
        <input type="submit" name="save">
    </div>


    </form>

    
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
