<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>USM Chat</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter first name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name" required>
          </div>
        </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter email address" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field">
            <label>Profile Photo</label>
            <input type="file" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" value="Create new account">
          </div>
        </form>
          <div class="link">Already have an account? <a href="login.php">Login here</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>
