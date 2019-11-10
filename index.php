<?php 
include_once("partials/header.php");
?>
<link rel="stylesheet" href="css/home.css">
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Advanced Web</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php"
            >Home <span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./forum.php">Forum</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input
          class="form-control mr-sm-2"
          type="search"
          placeholder="Search"
        />
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
          Search
        </button>
      </form>
    </div>
  </nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="container unit_info col">
                <div class="row"><h6 class="text-light">CSC 101</h6></div>
                <div class="row text-light">Unit Name</div>
            </div>
             <div class="container unit_info col">
                <div class="row"><h6 class="text-light">Updates</h6></div>
                <div class="row text-light">No Updates Available</div>
            </div>
        </div>
        <div class="col-6">
            <?php
           
                for ($i = 0; $i < 20; $i++) {
    echo '<div class="post_wrapper container-fluid">
                <div class="post_author row">
                    
                   <div class="col-8"><a href="#">
                    <h6>Newton Munene</h6>
                </a></div></div>
                <div class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veritatis repellat odio nostrum beatae deleniti quidem voluptate mollitia, nam amet.
                </div>
                <div class="post_actions row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">10 views</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">0 Upvotes</button>
                        </div>
                       
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">0 Comments</button>
                        </div> 
                </div>
            </div>';
}
            ?>
            <div class="post_wrapper container-fluid bg-light">
                <div class="post_author row">
                    
                   <div class="col-8"><a href="#">
                    <h6>Newton Munene</h6>
                </a></div></div>
                <div class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veritatis repellat odio nostrum beatae deleniti quidem voluptate mollitia, nam amet.
                </div>
                <div class="post_actions row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">10 views</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">0 Upvotes</button>
                        </div>
                       
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">0 Comments</button>
                        </div> 
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="container">

            <ul class="list-group list-group-flush actions">
  <li class="list-group-item">Profile</li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Notifications
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item">Students' directory</li>
  <li class="list-group-item">Instructor Info</li>
  <li class="list-group-item">Help</li>
  <a href="./login.php" class="list-group-item">Logout</a>
</ul>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include_once("partials/footer.php");
?>
