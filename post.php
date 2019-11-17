<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Advanced Web</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/main.css" />

    <link rel="stylesheet" href="css/home.css" />
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

        </div>
        <div class="col-6">

          <?php
$connection = mysqli_connect("localhost", "root", "", "csc316");
$result = mysqli_query($connection, "SELECT * FROM post WHERE id='$_GET[postid]'");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userResult = mysqli_query($connection, "SELECT * FROM user WHERE id='$row[author]'");
        if (mysqli_num_rows($userResult) == 1) {
            while ($userRow = mysqli_fetch_assoc($userResult)) {
                echo "<div class='post_wrapper container-fluid'>
                        <div class='post_author row'>
                          <div class='col-8'>
                            <a href='#'>
                              <h6>$userRow[name]</h6>
                            </a>
                          </div>
                        </div>
                        <div class='post_body'>
                          $row[body]
                        </div>
                        <div class='post_actions row'>
                          <div class='col'>
                            <button type='button' class='btn btn-outline-primary'>
                               $row[views] views
                            </button>
                          </div>
                          <div class='col'>
                            <button type='button' class='btn btn-outline-primary' id='upvotebtn'>
                               $row[upvotes] Upvotes
                            </button>
                          </div>

                          <div class='col'>
                            <button type='button' class='btn btn-outline-primary'>
                              $row[comments] Comments
                            </button>
                          </div>
                        </div>
                      </div>
                      "
                ;
            }}

    }

}

?>
        <div class="post_input_wrapper container-fluid">
            <div class="card">
              <div class="card-header bg-light">
                Write new comment
              </div>
              <div class="card-body">
                <form method="POST" name="postForm">
                  <div class="form-group">
                    <textarea
                      name="comment_input_textarea"
                      class="form-control"
                      id="post_input"
                      rows="3"
                      required
                    ></textarea>
                  </div>
                  <button
                    class="btn btn-primary text-right"
                    type="submit"
                    name="post_submit_btn"
                  >
                    Create Comment
                  </button>
                </form>
              </div>
            </div>
          </div>
          <?php
$connection = mysqli_connect("localhost", "root", "", "csc316");

$result = mysqli_query($connection, "SELECT * FROM comment WHERE post='$_GET[postid]'");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userResult = mysqli_query($connection, "SELECT * FROM user WHERE id='$row[author]'");
        if (mysqli_num_rows($userResult) == 1) {
            while ($userRow = mysqli_fetch_assoc($userResult)) {
                echo "<div class='post_wrapper container-fluid'>
                        <div class='post_author row'>
                          <div class='col-8'>
                            <a href='#'>
                              <h6>$userRow[name]</h6>
                            </a>
                          </div>
                        </div>
                        <div class='post_body'>
                          $row[body]
                        </div>

                      </div>
                      "
                ;
            }}

    }

}

?>
      </div>
      <div class="col-sm">

        </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/post.js"></script>
  </body>
</html>
