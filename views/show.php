
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studennts Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />

</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <?php if ($student) : ?> 
                <p> ID: <?php echo $student->id?></p>
                <p>Name: <?php echo $student->name?></p>
                <p>Age: <?php echo $student->age?></p>
                <p>DOB: <?php echo $student->dob?></p>
                <p>Gender: <?php echo $student->gender?></p>
                <a href="/" class="btn btn-primary">HOME</a>
                 <a href="/students/edit/<?php echo $student->id?>" class="btn btn-info">Edit</a> 
                 <a href="/students/delete/<?php echo $student->id?>" class="btn btn-danger">Delete</a> 

            <?php else : ?> 
            
               <p>Studnet Not Found</p>
                
            <?php endif; ?>
        </div>
    </div>
</body>

</html>