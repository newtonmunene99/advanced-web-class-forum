$(document).ready(function() {
  $("select").change(function() {
    console.log("changed");
    var changedValue = $(this).val();
    console.log(changedValue);
    var ajaxurl = "control.php",
      data = { action: changedValue };
    $.post(ajaxurl, data, function(response) {
      let data = JSON.parse(response);
      console.log(data.length);
      var tbl = $(
        "<table class='table'><tr><th>name</th><th>name</th><th>name</th></tr><table/>"
      ).attr("id", "mytable");
      $("#output").append(tbl);
      for (var i = 0; i < data.length; i++) {
        var tr = "<tr>";
        var td1 = "<td>" + data[i]["ord_no"] + "</td>";
        var td2 = "<td>" + data[i]["ord_date"] + "</td>";
        var td3 = "<td>" + data[i]["purch_amt"] + "</td></tr>";

        $("#mytable").append(tr + td1 + td2 + td3);
      }

  
    });
  });
});
