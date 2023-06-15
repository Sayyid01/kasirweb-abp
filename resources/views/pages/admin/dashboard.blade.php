<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="skin.css">
    <title>Dashboard</title>
</head>

<style>
    h1,
    h2 {
        text-align: center;
        color: #030303;
        margin: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: 100;
        font-size: 70px;
        text-transform: uppercase;

    }

    .container {
        background-color: azure;
        padding: 20px;
        border-radius: 30px;
        border-color: #020202
    }

    .colom {
        text-align: center;

        color: #020202;
        margin: 20px;
        font-family: 'Roboto', sans-serif;
        padding: 20px;
        border-radius: 30px;
        border-color: #020202;
        background-color: rgb(227, 228, 228);
    }

    body {
        background-color: azure;
    }

    .p-3 {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: large;
    }
</style>

<body>

    <div class="container ">
        <h1>Welcome Admin</h1>
        <h2>

            <body onload="showTime()">

                <script type="text/javascript">
                    function showTime() {
                        var date = new Date(); //Get current date and time
                        var hours = date.getHours(); //Get hours from current date and time
                        var minutes = date.getMinutes(); //Get minutes from current date and time
                        var seconds = date.getSeconds(); //Get seconds from current date and time
                        var ampm = hours >= 12 ? 'PM' : 'AM'; //Set AM or PM based on hours

                        hours = hours % 12; //Convert hours from 24-hour format to 12-hour format
                        hours = hours ? hours : 12; //Set 12 as the default value for hours if hours is 0

                        //Add leading zeros to minutes and seconds if they are less than 10
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        seconds = seconds < 10 ? '0' + seconds : seconds;

                        //Get the element with id="clock" from HTML document and set its innerHTML to the current time
                        document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

                        //Call the showTime function every second to update the clock
                        setTimeout(showTime, 1000);
                    }
                </script>

                <!-- Create a div element with id="clock" to display the clock -->
                <div id="clock"></div>

            </body>
        </h2>
    </div> <br>
    <div class="colom">
        <div class="row g-2">
            <div class="col-6">
                <div class="p-3">
                    <a class="nav-link" href="{{ route('produk') }}">Product Management</a>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <a class="nav-link" href="{{ route('stok') }}">Stock Management</a>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <a class="nav-link" href="{{ route('kasir-data') }}">Management Kasir</a>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <a class="nav-link" href="{{ route('adminLogout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
