<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 04</title>
</head>
<body>
    
    <?php 
    $name  = "Mahfuzar Rahman";
    $university_name = "University of Rajshahi";
    $department_name = "Computer Science and Enginnering ";
    $course_name = "Bachelor of Computer Science";
    $session = "2020-21";
    $address = "District : Rangpur,Upazilla = Rangpur Sadar, Union = Mominpur, Village =Katihara Hajipara";
    echo "My name is $name, I am from $university_name and I study $department_name and $course_name";
    ?>

    <h1> My name is : <?php echo $name;?> </br> I am a student of <?php echo $university_name;?></br> My department name is <?php echo $department_name;?> and Course name is <?php echo $course_name?></h1>
    <h1> My session is : <?php echo $session;?> </h1>
    <h2> My Address : <?php echo $address;?></h2>
</body>
</html>
