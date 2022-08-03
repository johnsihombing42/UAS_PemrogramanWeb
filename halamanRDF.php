<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UAS SW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .navbar-1-6.navbar-light .navbar-nav .nav-link {
            color: #ff7c57;
        }

        .navbar-1-6.navbar-light .navbar-nav .nav-link.active {
            font-weight: 500;
            color: #ff7c57;
        }

        .navbar-1-6 .btn-get-started {
            border-radius: 20px;
            padding: 12px 30px;
            font-weight: 500;
        }

        .navbar-1-6 .btn-get-started-blue {
            background-color: #ff7c57;
            transition: 0.3s;
        }

        .navbar-1-6 .btn-get-started-blue:hover {
            background-color: #ff7c57;
            transition: 0.3s;
        }

        .navbar-1-6 .btn-get-started-outline {
            border: 1px solid #ebebeb;
            color: #cacaca;
            transition: 0.3s;
            font-weight: 300;
        }

        .navbar-1-6 .btn-get-started-outline:hover {
            border: 1px solid #ff7c57;
            color: #ff7c57;
            transition: 0.3s;
            font-weight: 300;
        }
        </style>
        <nav class="navbar-1-6 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body border-bottom"
            style="font-family: Poppins, sans-serif">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                            fill="#5252FF" />
                        <path
                            d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                            fill="#5252FF" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-blue text-white" href="home.html">Home</a>
                    </div>


                    <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-blue text-white" href="dom/index.html">Search</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!--Awal Card Tabel -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Tabel Daftar Laptop
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr class="">
                            <th>Nama</th>
                            <th>Processor</th>
                            <th>Memory</th>
                            <th>Storage</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <?php require_once("../UAS_PW/endpoint/endpoint2.php"); ?>
                    <?php for ($i=0; $i<count($name); $i++) : ?>
                    <tr class="data-row">
                        <td><?= $name[$i]; ?></td>
                        <td><?= $processor[$i]; ?></td>
                        <td><?= $memory[$i]; ?></td>
                        <td><?= $storage[$i]; ?></td>
                        <td><?= $price[$i]; ?></td>
                    </tr>
                    <?php endfor; ?>
                </table>

            </div>
        </div>
    </div>
    <!--Akhir Card Tabel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>