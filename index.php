<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Weather App</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/bootstrap-weather.min.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Custom Style for Night Theme -->
    <style>
        body {
            background-color: #121212; /* Dark background for night mode */
            color: #e0e0e0; /* Light gray text color for readability */
        }
        .card {
            background-color: #1e1e1e; /* Slightly lighter dark color for the card */
            color: #e0e0e0; /* Matching the text color */
            border-radius: 20px; /* Softer rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Stronger shadow for depth in dark mode */
        }
    </style>
</head>

<body>
    <!-- Start your project here-->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div id="weather-info">
                                <p>Loading...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js" defer></script>
</body>

</html>
