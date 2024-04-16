<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>USM Chat</header>
      <form action="#">
        <div class="error-txt">An error occured.</div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter email address">
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue">
          </div>
        </form>
          <div class="link">Don't have an account? <a href="index.php">Sign up here</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>
