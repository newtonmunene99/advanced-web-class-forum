<?php
include 'control.php'; // Includes Login Script

if (isset($_SESSION['user'])) {
    header("location: home.php");
}
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

    <link rel="stylesheet" href="css/index.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#">Advanced Web Forum</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
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
            <p>
              This is a forum where students can post questions and get comments and answers to their questions. Voluptatibus omnis est eligendi harum ad. Rerum dolorum sunt et
              laudantium tempore itaque dignissimos? Aut repellat quas eligendi
              blanditiis voluptates esse saepe quibusdam sequi tenetur, eum
              ullam consequatur ipsa aliquam? Aliquid dolores eveniet ratione
              magnam fuga nisi dolore ut sunt odit autem.
            </p>
            <button type="button" class="btn btn-outline-primary">
              Learn more
            </button>
          </div>
          <div class="col-sm right">
            <h3>Get started</h3>
            <a
              class="btn btn-primary btn-lg btn-block"
              href="./login.php"
              role="button"
              >Already have an account?</a
            >
            <a
              class="btn btn-outline-primary btn-lg btn-block"
              href="./register.php"
              role="button"
              >Don't have an account?</a
            >
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
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
  </body>
</html>
