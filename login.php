<?php
include_once("partials/header.php");
?>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container login-wrapper">
  <h1 class="text-primary">
    LOGIN
    <small class="text-muted">ADVANCED WEB</small>
  </h1>
  <form class="jumbotron" name="loginForm">
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
      <label for="password">Password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="Password"
      />
    </div>
    <div class="form-group form-check">
      <a href="./register.php">Don't have an account?</a>
    </div>
  
    <button class="btn btn-primary" type="submit" name="loginbtn">Login</button>
  </form>
</div>
<script src="js/login.js"></script>

<?php
include_once("partials/footer.php");
?>
