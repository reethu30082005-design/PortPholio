<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Registration Successful</h2>

    <p><b>Name:</b> <?= $_POST['fullname'] ?></p>
    <p><b>Date of Birth:</b> <?= $_POST['dob'] ?></p>
    <p><b>Gender:</b> <?= $_POST['gender'] ?></p>
    <p><b>Email:</b> <?= $_POST['email'] ?></p>
    <p><b>Phone:</b> <?= $_POST['phone'] ?></p>
    <p><b>Country:</b> <?= $_POST['country'] ?></p>

    <p><b>Father's Name:</b> <?= $_POST['father'] ?></p>
    <p><b>Mother's Name:</b> <?= $_POST['mother'] ?></p>

    <h3>Academic Details</h3>
    <p><b>USN:</b> <?= $_POST['usn'] ?></p>
    <p><b>College / University:</b> <?= $_POST['college'] ?></p>
    <p><b>Branch:</b> <?= $_POST['branch'] ?></p>
    <p><b>Course:</b> <?= $_POST['course'] ?></p>
    <p><b>Year / Semester:</b> <?= $_POST['semester'] ?></p>

    <h3>Additional Info</h3>
    <p><b>Hobbies:</b> <?= implode(", ", $_POST['hobbies'] ?? []) ?></p>
    <p><b>Skills:</b> <?= $_POST['skills'] ?></p>
    <p><b>Languages Known:</b> <?= implode(", ", $_POST['languages'] ?? []) ?></p>
    <p><b>Address:</b> <?= $_POST['address'] ?></p>

</div>

</body>
</html>
