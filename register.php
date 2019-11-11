<?php
include_once("partials/header.php");
?>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="container register-wrapper">
  <h1 class="text-primary">
    REGISTER
    <small class="text-muted">ADVANCED WEB</small>
  </h1>
  <form class="jumbotron"  name="registerForm">
    <div class="form-group">
      <label for="email">Email address</label>
      <input
        type="email"
        class="form-control"
        id="email"
        name="email"
        aria-describedby="emailHelp"
        placeholder="Enter email"
      />
      <small id="emailHelp" class="form-text text-muted"
        >We'll never share your email with anyone else.</small
      >
    </div>
     <div class="form-group">
      <label for="name">Name</label>
      <input
        type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="Enter name"
      />
    
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="Password"
      />
    </div>

    <div class="form-group">
      <label for="password2">Confirm Password</label>
      <input
        type="password"
        class="form-control"
        id="password2"
        name="password2"
        placeholder="Password"
      />
    </div>
    <div class="form-group form-check">
      <a href="./login.php">Already have an account?</a>
    </div>
    
    <button class="btn btn-primary" type="submit" name="registerbtn">Register</a>
  </form>
</div>
<script src="js/register.js"></script>
<?php
include_once("partials/footer.php");
?>
