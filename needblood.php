<?php
ob_start();
session_start();
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="indexstyle.css">
    
    <style>
        body {
            background-color: #ffccff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #content {
            margin: 0;
            padding: 0 7%;
            text-align: center;
        }

        #select-container {
            background-color: rgba(255, 204, 204, 0.5);
            overflow: auto;
            width: 100%;
            padding: 5px;
        }

        #txtHint {
            padding: 5% 0;
            width: 100%;
            overflow: auto;
        }

        select {
            padding: 10px;
            font-size: 16px;
        }
    </style>

    <script>
        function showUser(selectedBloodGroup) {
            var xmlhttp;

            if (selectedBloodGroup == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "getdata.php?blood_group=" + selectedBloodGroup, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>

  <header>
    <div class="main-nav">
      <a href="index.html" class="logo">
        Haemoglobal
        <img src="logo.png" alt="Logo">
    </a>
      <ul>
        <li><a href="index.html">about us</a></li>
        <li><a href="donor.php">register as donor</a></li>
        <li><a href="needblood.php">need blood</a></li>
      </ul>
    </div>
  </header>

  <br>
  <br>
  <br>
    <div id="content">
        <div id="select-container">
            <form>
                <select name="blood_group" onchange="showUser(this.value)" id="sel">
                    <option value="">Select Blood Group</option>
                    <option value="A pos">A+</option>
                    <option value="A neg">A-</option>
                    <option value="B pos">B+</option>
                    <option value="B neg">B-</option>
                    <option value="O pos">O+</option>
                    <option value="O neg">O-</option>
                    <option value="AB pos">AB+</option>
                    <option value="AB neg">AB-</option>
                </select>
            </form>
        </div>
        <div id="txtHint"></div>
    </div>

</body>

</html>
