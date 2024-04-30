
<?php
include 'config.php'; // Include your database connection file

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['massage']); // Corrected spelling
    // SQL query to insert data into database
    $sql = "INSERT INTO contact_tb (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>about us</title>
    <link rel="website icon" type="png"
    href="logo.png">
</head>
<body>
    
    <!-- nav bar -->
    <div class="navbar">
        <div class="logo">
          <a href="user_page.php"><img src="logo.png" alt="Logo"></a>
        </div>
        <ul class="menu">
            <li><a href="user_page.php">Books</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <div class="buttons">
          <a href="logout.php" class="logout-button">Log Out</a>    
      </div>
    </div>

    <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">123 main stret</div>
              <div class="text-two">Nagpur</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">7470449667</div>
              <div class="text-two">7666367113</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">kajaltivari737903@gmail.com</div>
              <div class="text-two">priyathakurngp910@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of quries related to my website, you can send me message from here. It's my pleasure to help you.</p>
          <form action="" method="post"> <!-- Removed the invalid action and corrected method to "post" -->
    <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email">
    </div>
    <div class="input-box message-box">
        <textarea name="massage" placeholder="Enter your message"></textarea> <!-- Corrected spelling -->
    </div>
    <div class="button">
        <input type="submit" name="submit" value="Send Now"> <!-- Changed the button type to submit -->
    </div>
</div>
</form>
        </div>   
    <footer>
        <div class="container2">
        <div class="row">
        <div class="col-md-4 col-sm-6">
        <h4>ONLINE BOOK LIBRARY</h4>
        <p>Address: 123 Main Street, Nagpur, India</p>
        <p>Phone: 0123-456-7890</p>
        <p>Email: onlinebooks@gmail.com</p>
        </div>
        <div class="col-md-4 col-sm-6">
        <h4>Useful Links</h4>
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="categories.html">All Books</a></li>
        <li><a href="about.html">About Us</a></li>
        </ul>
        </div>
        <div class="col-md-4 col-sm-6">
        <h4>Important Links</h4>
        <ul>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        </ul>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <p>Copyright &copy; ONLNE BOOK LIBRARY. All rights reserved.</p>
        </div>
        </div>
        </div>
        </footer>
        </body>
        </html>
        
        <?php
include 'config.php'; // Include your database connection file

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['massage']); // Corrected spelling
    // SQL query to insert data into database
    $sql = "INSERT INTO contact_tb (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>


        