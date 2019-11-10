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
  <form class="jumbotron">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input
        type="email"
        class="form-control"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter email"
      />
      <small id="emailHelp" class="form-text text-muted"
        >We'll never share your email with anyone else.</small
      >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input
        type="password"
        class="form-control"
        id="exampleInputPassword1"
        placeholder="Password"
      />
    </div>
    <div class="form-group form-check">
      <a href="./register.php">Don't have an account?</a>
    </div>
  
    <a class="btn btn-primary" href="./index.php">Login</a>
  </form>
</div>
<?php
include_once("partials/footer.php");
?>
