<?php
$error = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        require "formdb.php";
        $username = trim($_POST['username']);
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM gebruikers WHERE username = '" . $username . "'AND password = '" . $password . "'";

        if ($result = $conn->query($sql)) {
            $aantal = $result->num_rows;
            if ($aantal == 1) {
                $user = $result->fetch_row();
                session_start();
                // $_SESSION['user'] = $user[1];
                $_SESSION['ingelogd'] = true;
                header("Location: ingelogddb.php");
            } else {
                $error = "Username or password incorrect.";
                echo
                '<script language="javascript">;
                 alert("Username or password incorrect.");
                 window.location.replace("index.php");
                </script>';
                
            }
        }
    }
    else {
        $error = "Username en password zijn verplicht.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Enes Can">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Restaurant Jamie Oliver</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="#section1">Het Restaurant
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#section2">In de pers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#section3">Onze klanten</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-user"></i> Inloggen</a>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
            <h1 class="font-weight-light">Restaurant Jamie Oliver</h1>
            <p class="lead">Homepagina van het restaurant!</p>
        </div>
        </div>
    </div>
    </header>

    <!-- Page Content -->
    <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
  <h1>Het Restaurant</h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam pariatur blanditiis explicabo architecto recusandae mollitia maxime, fuga vel voluptate optio nemo dolores tenetur reiciendis obcaecati modi quidem dicta. Iure ea rem aspernatur porro similique ipsa esse deleniti minus non, ipsum, corrupti nesciunt. Veritatis recusandae exercitationem consequuntur minima provident odio explicabo est rem ipsum eaque cum nulla repellendus, deserunt minus alias itaque maiores hic neque. Beatae quae id consequatur inventore asperiores porro saepe consectetur voluptatem, reprehenderit quam soluta recusandae eum voluptates quo labore qui quos nam tempora incidunt? Autem aperiam sed reprehenderit magni ratione vel quaerat sint repudiandae omnis eum id non exercitationem officia accusantium repellat libero reiciendis nemo, provident iure? Ipsum ut asperiores consequatur, debitis quia explicabo repellat quam eum voluptate odit nulla sunt. Atque quo animi aperiam.</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor optio explicabo quia, voluptatem recusandae quidem cum deleniti a, vitae dicta officia sed esse nobis vero! Dolor iusto corporis quis voluptates voluptatibus officia ipsa labore qui dolorum voluptate vero pariatur, saepe sunt, magnam non rerum reprehenderit ut necessitatibus atque. Esse illo, optio quae ullam repudiandae eveniet ipsam ad dolorum, hic porro vel, ratione consectetur accusantium!</p>
</div>
<div id="section2" class="container-fluid bg-light" style="padding-top:70px;padding-bottom:70px">
  <h1>In de pers</h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum repellendus voluptates, debitis praesentium quam iure! Cupiditate odit reprehenderit rerum ea asperiores sint a, ipsum eum rem neque quaerat non. Laborum odio, voluptates ex saepe voluptatem beatae perferendis vitae nulla magnam qui quisquam et quaerat ullam. Alias ab quidem consectetur ipsam expedita incidunt eum accusantium quam quod, obcaecati labore, repudiandae facere quae quia suscipit! Iste?</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio repellendus libero temporibus praesentium officia sequi, nihil nemo, vel ea totam, ex facere enim eum nostrum adipisci quos esse odio nisi sed facilis non minima! Unde facilis dicta, pariatur laboriosam ut eos! Quis corrupti corporis assumenda veniam.</p>
</div>
<div id="section3" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
  <h1>Onze klanten</h1>
  <p>Hieronder kunt u recencies van onze klanten bekijken!</p>
  <table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Bericht</th>
    </tr>


    <?php
    require "formdb.php";
    $sql = "SELECT id, naam, bericht FROM form";
    // mysqli_query($conn, $form);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["naam"] . "</td><td>"
                . $row["bericht"] . "</td></tr>";
        }
        echo "</table>";
    } else {echo "0 results";}
    $conn->close();
    ?>
    </table>
</div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Inloggen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <form action="/examples/actions/confirmation.php" method="post"> -->
                    <form method="post">
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" placeholder="Gebruikersnaam" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" placeholder="Wachtwoord" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
