<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="../menu/css/style.css" rel="stylesheet" type="text/css">
    <title>Koolisöökla</title>
</head>
<h1 class="bg-secondary text-white">Koolisöökla</h1>
<body>
<div class="container-fluid text-center">
<div class="row">
<div class="col">
<div id="accordion">
    <div class="card m-3">
    <div class="card-header alert-dark">
        <a  data-toggle="collapse" href="#praed" data-parent="#accordion"><h5>Praed<i class="fas fa-utensils"></i></h5>
        </a>
    </div>
    <div id="praed" class="collapse">
        <ul class="list-group">
            <li class="list-group-item">
                <p class="mb-1">Sealiha kooreses kastmes<i class="fas fa-pig"></i>
                <span class="small text-secondary">sealiha lisand, salat, leib</span><br>
                    <span  class="badge badge-info">2.65&euro;</span>
                    <span class="badge badge-success">2.25&euro;</span>
                </p>
            </li>
            <li class="list-group-item">
                <p class="mb-0"> Praetud kana
                    <span class="small text-secondary">praetud kana lisand, salat, leib</span><br>
                    <span class="badge badge-info">2.50€</span>
                    <span class="badge badge-success">2.13€</span>
                </p>
            </li>

        </ul>
    </div>
    </div>
</div>
</div>
</div>
</div>
        <div class="card m-3">
            <div class="card-header alert-dark">
                <a href="#supid" data-parent="#accordion" data-toggle="collapse" >
                    <h5>Supid <i class="fas fa-utensil-spoon"></i></h5>
                </a>
            </div>
            <?php
            echo '
            <div id="supid" class="collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="mb-0">Rassolnik <br>
                            <span class="small text-secondary">supp, hapukoor, leib</span><br>
                            <span class="badge badge-info">1.10€</span>
                            <span class="badge badge-success">0.94€</span>
                        </p>
                    </li>
                </ul>
            </div>';
?>
        </div>




</body>
</html>';
?>