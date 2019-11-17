$(document).ready(function() {
  console.log("weee");
  $("#logoutbtn").click(function() {
    alert("clicked");
    ev.preventDefault();
    // $.post(
    //   "control.php",
    //   {
    //     logout: {}
    //   },
    //   function(loggedout) {
    //     if (loggedout == 1) {
    //       window.location.replace("./login.php");
    //     } else {
    //       console.log("Failed to logout");
    //     }
    //   }
    // );
  });

  $("form").submit(function(ev) {
    ev.preventDefault();
    var body = ev.target["post_input_textarea"].value;

    var data = {
      post: {
        body: body
      }
    };
    $.post("control.php", data, function(posted) {
      if (posted == 1) {
        window.location.reload();
      } else {
        alert("Failed to post");
      }
    });
  });
});
