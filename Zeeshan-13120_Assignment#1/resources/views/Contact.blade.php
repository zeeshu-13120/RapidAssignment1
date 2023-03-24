<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
      }
      form {
        background-color: #fff;
        padding: 20px;
        max-width: 600px;
        margin: 0 auto;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      input[type="text"],
      input[type="email"],
      textarea {
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
</head>
<body>

<!-- -------------------Navbar------------------- -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">13120</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/services">Services</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- -------------------form--------------------- -->
  <div class="Container">
  <body>
    <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your email" required>

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject" required>


      <label for="phoneNumber">Phone Number:</label>
      <input type="text" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" name="phoneNumber">

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message here" style="height:200px" required></textarea>

      <input type="submit" value="Send">
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </body>
    </div>




</html>
