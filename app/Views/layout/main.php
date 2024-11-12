<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template CSS -->
    <link href="<?= base_url('path/to/style.css') ?>" rel="stylesheet"> <!-- Update with the correct path -->
    <title>Login</title>
</head>
<style>
    .main-body {
  background-color: #f0f2f5; /* Light gray background */
}

.main-login-container {
  width: 1510px; /* Set container width */
  background: white; /* White background for the login box */
  padding: 100px; /* Padding inside the container */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for the container */
  margin: auto; /* Center the container */
  margin-top: 20px; /* Space from the top */
  margin-bottom: 5px; /* Space from the bottom */
}

/* Form-specific styles */
.add-student-container {
    background: white; /* White background for the form */
    padding: 40px; /* Padding inside the container */
    border-radius: 8px; /* Rounded corners */
    margin: auto; /* Center the container */
    margin-top: 50px; /* Space from the top */
    margin-bottom: 50px; /* Space from the bottom */
}

</style>
<body class="main-body">

    <div class="main-login-container">
        <?= $this->renderSection('body') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
