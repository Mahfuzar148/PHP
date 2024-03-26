<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h2>This is html forms tutorial</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="name">Name</label>
        <div>
            <input type="text" name ="myName" id="name" required>
        </div>
        <br>
        <label for="role">Role</label>
        <div>
            <input type="text"  name ="myRoll" id="role">
        </div>
        
        <br>
        <label for="email">Email</label>
        <div>
            <input type="email" name ="myEmail" id="email">
        </div>
        <br>
        <label for="password">Password</label>
        <div>
            <input type="password" name ="myPassword" id="password">
        </div>
        <br>
        <label for="date">Date</label>
        <div>
            <input type="date" name="myDate" id="date">
        </div>
        
        <br>
        <label for="bonus">Bonus</label>
        <div>
            <input type="number" name="myBonus" id="bonus" >
        </div>
        <br>
        <label for="address">Home District</label>
        <div>
        <select name="myAddress" id="address">
            <option value="Rangpur">Rangpur</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chitagong">Chitagong</option>
            <option value="Khulna">Khulna</option>
            <option value="Barisal">Barisal</option>
            <option value="Maymonsingh">Maymonsingh</option>
        </select>
        </div>
        <br>
        <label for="eligible">Are you eligible?</label>
        <div>
            <input type="checkbox" name="myEligibility" id="eligible">
        </div>
        
        <br>
        <label for="gender">Gender</label>
        <div>
            Male:<input type="radio" name="myGender" id="gender">  Female : <input type="radio" name="myGender" id="gender">
            Other : <input type="radio" name="myGender" id="gender">
        </div>
        <br>
        <label for="car">Car</label>
        <div>
            <select name="myCar" id="car">
                <option value="BMW" selected>BMW</option>
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Volvo">Volvo</option>
            </select>
        </div>
        <br>
        <label for="yourself">Write about yourself</label>
        <div>
            <br><textarea name="myText" cols = "90" rows="10" id="yourself"></textarea>
        </div>

        <br>
        <div>
            <input type="submit"  name="save" value="Submit now">
            <input type="reset" value="Reset Now"> 
        </div>
    </form>
    <?php

    if(isset($_POST["save"])) {
        "<ul>";
        echo "<li>". $_POST["myName"]."</li>"."<br><br>";
        echo "<li>".$_POST["myRoll"]."</li>"."<br><br>";
        echo "<li>".$_POST["myEmail"]."</li>"."<br><br>";
        echo "<li>".$_POST["myPassword"]."</li>"."<br><br>";

        echo "<li>".$_POST["myDate"]."</li>"."<br><br>";
        echo "<li>".$_POST["myBonus"]."</li>"."<br><br>";
        echo "<li>".$_POST["myAddress"]."</li>"."<br><br>";
        echo "<li>".$_POST["myEligibility"]."</li>"."<br><br>";
        echo "<li>".$_POST["myGender"]."</li>"."<br><br>";
        echo "<li>".$_POST["myCar"]."</li>"."<br><br>";
        echo "<li>".$_POST["myText"]."</li>"."<br><br>";
        "/ul";

    
    }

    ?>
</body>
</html>
