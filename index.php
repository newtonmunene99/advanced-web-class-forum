<?php 
include_once("partials/header.php");
?>
<link rel="stylesheet" href="css/index.css">
</head>

<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Advanced Web Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
   
  </div>
</nav>
  <div class="header-wrapper">
    <div class="container">
  <div class="row">
    <div class="col-sm left">
      <h3>
        Advanced Web Forum
      </h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus omnis est eligendi harum ad. Rerum dolorum sunt et laudantium tempore itaque dignissimos? Aut repellat quas eligendi blanditiis voluptates esse saepe quibusdam sequi tenetur, eum ullam consequatur ipsa aliquam? Aliquid dolores eveniet ratione magnam fuga nisi dolore ut sunt odit autem.</p>
      <button type="button" class="btn btn-outline-primary">Learn more</button>
    </div>
    <div class="col-sm right">
      <h3>Get started</h3>
     <a  class="btn btn-primary btn-lg btn-block" href="./login.php" role="button">Already have an account?</a>
<a  class="btn btn-outline-primary btn-lg btn-block" href="./register.php" role="button">Don't have an account?</a>

    </div>
    
  </div>
</div>
  </div>

<?php
include_once("partials/footer.php");
?>