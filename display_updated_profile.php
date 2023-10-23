<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Profile</title>
   
<body>
<div class="container">
    <div class="profile-content">
       
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Panda Fashion</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></head>
</head>
<style>

</style>
<body style="border-radius: 40px;
background: #403f3f;">
  

    <!-- Navigation Bar for nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">Panda Fashion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto lead ">
                <li class="nav-item  ">
                    <a class="nav-link text-white" href="home.html">Home </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="gents.html">Gents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ladies.html">Ladies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="cart.html">cart</a>
                </li>
                 <li class="nav-item active">
                    <a class="nav-link text-primary" href="edit.php">profile<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


<div class="container">
    <div class="profile-content">
        <h2>Updated Profile</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newName = $_POST['name'];
            $newEmail = $_POST['email'];
            $newDateOfBirth = $_POST['date_of_birth'];
        ?>
        <p><strong>Name:</strong> <?php echo $newName; ?></p>
        <p><strong>Email:</strong> <?php echo $newEmail; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $newDateOfBirth; ?></p>
        <?php
        }
        ?>
    </div>
</div>

   


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>
