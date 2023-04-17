<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section class="hv-100">
        <div class="container">
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
        </div>
        <div class="container justify-content-center">
            <ul>
                <li><a class="nav-link" href="{{ route('produk') }}">Product Management</a></li>
                <li><a class="nav-link" href="{{ route('stok') }}">Stock Management</a></li>
                <li><a class="nav-link" href="{{ route('kasir-data') }}">Management Kasir</a></li>
                <li> <a class="nav-link" href="{{ route('adminLogout') }}">Logout</a></li>
            </ul>
        </div>
    </section>
</body>

</html>
