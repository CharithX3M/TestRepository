<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form-elements.css">
  <link rel="stylesheet" href="css/table.css">
  <title>Reports</title>
</head>
<body>
  <header>
  <div class="container"><h1><a href="home.html" id="title">NOTE|SPACE</a></h1></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="status.html">Statistics</a></li>
        <li><a href="advertise.html">Advertising</a></li>
        <li><a href="admin.html">Settings</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  </header>

<div class="container" id="main" style="position: relative;min-width: 1000px;">
  <div id="areaToPrint">
    <h3>Monthly Advertisment Report</h3>
      <table id="customers">
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
      </tr>
    </table>
  </div>

<button onclick="printDiv();">Print Report</button>
</div>
<script>
    function printDiv() {
        var divToPrint = document.getElementById('areaToPrint');
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
   }
</script>



<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
