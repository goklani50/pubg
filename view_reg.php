<?php
session_start();

if (isset($_SESSION['u_id'])) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PUBG Tournaments | Registrations </title>
</head>
<body >
    <nav  class="navbar is-transparent is-black">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <strong>PUBG Tournaments</strong>
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="field is-grouped">
                            <p class="control">
                                <a id="user-name" class="button is-dark"> <?php if(isset($_SESSION['u_id'])){ echo $_SESSION['name']; }?> </a>
                            </p>
                        </div>
                    </div>
                    <span class="navbar-item">
                        <a href="https://facebook.com/pubgtournaments2018" class="button is-fb">
                            <span class="icon">
                                <i class="fab fa-facebook"></i>
                            </span>
                            <span>pubgtournaments2018</span>
                        </a>
                    </span>
                    <span class="navbar-item">
                        <a href="https://instagram.com/pubgtournaments2018" class="button is-insta is-inverted">
                            <span class="icon">
                                <i class="fab fa-instagram"></i>
                            </span>
                            <span>@pubgtournaments2018</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <section id="banner" class="hero is-small is-link is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    User Registrations
                </h1>
            </div>
        </div>
    </section>
    <br>

    <div class="container">
      <div class="columns">
        <div class="column" >
          <?php
          // Check if user is logged in using the session variable
        if (isset($_SESSION['u_id'])) {
              echo "<form name=\"dateIp\" method=\"POST\"><label class=\"label\">Date<span class=\"has-text-danger\"></span></label>
              <input name=\"dated\" class=\"input\" type=\"date\" >
              <br><br>
              <select name=\"squad\" id=\"mySelect\"style=\"width:800px;\">
                  <option value=\"SQUAD\">Squad</option>
                  <option value=\"SOLO\">Solo</option>
              </select>
              <br><br>
              <button onclick=\"getTable();\" type=\"button\"class=\"button is-link\">Submit</button></form>";
        }
        ?>
      <table class="table" id="tableAppend">
          </table>
      </div>
      <div class="column" >
        <?php
// Check if user is logged in using the session variable
      if (!isset($_SESSION['u_id'])) {
        echo "<form action=\"signin.php\" method=\"POST\">
          <label class=\"label\">Email<span class=\"has-text-danger\"></span></label>
          <input name=\"email\" class=\"input\" type=\"text\" placeholder=\"abc@gmail.com\">
          <br><br>
          <label class=\"label\">Password<span class=\"has-text-danger\"></span></label>
              <input name=\"pass\" class=\"input\" type=\"password\" placeholder=\"abc@gmail.com\">
          <br><br>
          <button class=\"button is-link\" name=\"login\">Submit</button>
        </form>";
        }
        if(isset($_SESSION['u_id'])){
          echo "<label class=\"label\">&nbsp;Payment screenshot</label>
          <div id=\"ss\">

            </div>
          ";
        }
        ?>

      </div>
      </div>
    </div>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <a href="https://facebook.com/pubgtournaments2018" class="button is-medium">
                    <span class="icon">
                        <i class="fab fa-facebook"></i>
                    </span>
                </a>
                <a href="https://instagram.com/pubgtournaments2018" class="button is-medium">
                    <span class="icon">
                        <i class="fab fa-instagram"></i>
                    </span>
                </a>
            </p>
            <a href="https://bulma.io">
                <img src="https://bulma.io/images/made-with-bulma--semiblack.png" alt="Made with Bulma" width="128" height="24">
            </a>
            <br>
            <p>
                <a href="registrations.php">View Registrations</a>
            </p>
            <p>
                <a href="logout.php">Logout</a>
            </p>
        </div>
    </footer>

</body>

    <script>
    function getTable(){
      var isSquad=document.forms["dateIp"]["squad"].value;
          var dte=document.forms["dateIp"]["dated"].value;
          var mm=dte.substring(5,7);
          var dd=dte.substring(8);
          var yy=dte.substring(2,4);
          dte=dd+"-"+mm+"-"+yy;
          var d="Reg_Data/"+dte+"_"+isSquad+".csv";
          console.log(d);
          parseData(d);
    }
    function parseData(csv){
       Papa.parse(csv, {
           download: true,
           complete: function(results) {
           createTable(results.data);
           }
          });
        }
    function createTable(data){
      console.log(data);
      res="";
      for (row=0; row < data.length-1; row++){
        res+="<tr>";
        for (col=0; col < data[row].length; col++){
            if(row==0)
            res+="<th><h3>"+data[row][col]+"</h3></th>";
            else {
              if(col==data[row].length-1){
                res+='<td><h3><button class="button is-link" onClick="showImage(\'' + data[row][col] + '\')" /> Payment</button></h3></td>';
            }
            else {
                res+="<td><h3>"+data[row][col]+"</h3></td>";
              }
            }
        }
        res+="</tr>";
    }
    var el=$("#tableAppend")
    el.empty();
    $("#tableAppend").append(res);
}
function showImage(img) {
  //console.log(img);
  var res="<img src="+img+">";
  var el=$("#ss");
  //el.empty();
  $('#ss').append(res);
}
    </script>

<script src="js/jquery.min.js"></script>
<script src="js/papaparse.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
</html>
