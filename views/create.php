<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
         <div class="col-8">
            <form action="/store" method="POST">
               <div class="form-group">
               <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
               </div>
               <div class="form-group">
               <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="email" name="email">
               </div>
               <div class="form-group">
               <label for="gender">Gender</label>
                    <select name="gender" class="form-control" id="">
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
               </div>
               <div class="form-group">
               <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob">
               </div>
               <div class="form-group">
               <label for="age">Age</label>
                <input type="number" class="form-control" name="age">
               </div>
               <button class="btn btn-primary mt-5">Create New Student</button>
            </form>
         </div>
        </div>
    </div>
</body>
</html>