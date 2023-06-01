<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGR Inc. - Weight Lifting Plans</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
      /* Additional styles for contact.html */
      input[type="text"], input[type="email"], textarea {
        display: block;
        width: 100%;
        padding: 10px 20px;
        margin: 10px 0;
        box-sizing: border-box;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
      }
      
      input[type="submit"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: white;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border: 1px solid #333;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
      
      input[type="submit"]:hover {
        background-color: #444;
        border-color: #444;
      }
      
      footer a {
        color: white;
        text-decoration: underline;
      }
        .success-message {
      background-color: lightgreen;
      border: 1px solid green;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px; }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.jpg" alt="VGR Inc. Logo">
        <h1>VGR Inc.</h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="contact">
        <h2>Contact Us</h2>
        <?php
     if (isset($_GET['success'])) {
      echo '<div class="success-message"><p>Thank you for contacting us! We will get back to you shortly.</p></div>';      }
      ?>

       <form action="send_email.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="10" required></textarea>
          
          <input type="submit" value="Submit">
        </form>
      </section>
    </main>
    <footer>
      <div class="footer-content">
        <div class="social-media">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="https://www.facebook.com/vgrinc">Facebook</a></li>
            <li><a href="https://www.instagram.com/vgrinc">Instagram</a></li>
            <li><a href="https://www.twitter.com/vgrinc">Twitter</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <h3>Contact Info</h3>
          <p>Phone: (123) 456-7890<br> Email: info@vgrinc.com</p>
        </div>
        <div class="copyright">
          <p>&copy; 2023 VGR Inc. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  </body>
</html>