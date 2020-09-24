
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
</head>

<body>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if ($student) : ?>
                    <h3>Edit Student</h3>
                    <form action="/students/update" method="POST">
                        <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="<?php echo $student->name; ?>" placeholder="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?php echo $student->email; ?>" placeholder="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="">
                                <option value="" disabled>Gender</option>
                                <option value="male" <?php if ($student->gender == "male") {
                                                            echo "selected";
                                                        } ?>>Male</option>
                                <option value="female" <?php if ($student->gender == "female") {
                                                            echo "selected";
                                                        } ?>>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" value="<?php echo $student->dob; ?>" class="form-control" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" value="<?php echo $student->age; ?>" class="form-control" name="age">
                        </div>
                        <button class="btn btn-primary mt-5">Update Student</button>
                        <a href="/" class="btn btn-danger">Cancel</a>

                    </form>
                <?php else : ?>
                    <p>Studnet Not Found</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>