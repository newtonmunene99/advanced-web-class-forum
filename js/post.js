$(document).ready(function() {
  var url = new URL(window.location.href);
  setTimeout(() => {
    $.post(
      "control.php",
      {
        postviews: {
          post: url.searchParams.get("postid")
        }
      },
      function(viewed) {
        if (viewed == 1) {
          console.log("views updated");
        } else {
          console.log("Failed to add views");
        }
      }
    );
  }, 5000);

  $("#upvotebtn").click(function() {
    $.post(
      "control.php",
      {
        postupvotes: {
          post: url.searchParams.get("postid")
        }
      },
      function(upvoted) {
        if (upvoted == 1) {
          window.location.reload();
        } else {
          console.log("Failed to upvote post");
        }
      }
    );
  });
  $("form").submit(function(ev) {
    ev.preventDefault();
    var body = ev.target["comment_input_textarea"].value;

    var data = {
      comment: {
        body: body,
        post: url.searchParams.get("postid")
      }
    };
    $.post("control.php", data, function(commented) {
      if (commented == 1) {
        window.location.reload();
      } else {
        alert("Failed to post");
      }
    });
  });
});
