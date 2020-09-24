<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studennts Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />

</head>

<body>

    <div class="container mt-4">
    <h3>PHP Mini FrameWork</h3>
        <div><a href="/students/create" class="btn btn-primary">Create</a>
        
    </div>
        <hr>

        <div class="row justify-content-center">

            <div class="col-8">

            </div>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if ($students) : ?>
                        <?php foreach ($students as $student) : ?>

                            <tr>
                                <td><?php echo $student->id ?></td>
                                <td><?php echo $student->name ?></td>
                                <td><?php echo $student->age ?></td>
                                <td><?php echo $student->dob ?></td>
                                <td><?php echo $student->gender ?></td>
                                <td>
                                    <a href="/student/<?php echo $student->id ?>" class="btn btn-primary">
                                   Detail
                                </a>
                                <a href="/students/delete/<?php echo $student->id ?>" class="btn btn-danger">
                                   Delete
                                </a>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No student found!</p>

                    <?php endif; ?>



                </tbody>
            </table>
        </div>
    </div>
</body>

</html>