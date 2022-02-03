<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/all.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <div class="row">
                <a href="" class="navbar-brand">LoGo</a>
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">String</a> </li>
                    <li><a href="" class="nav-link">Series</a> </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center font-weight-bolder bg-danger text-white">String Word count</div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label " >Your String</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required name="string"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Total world</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($result['word']) ? $result['word'] :''; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Total Character</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($result['character']) ? $result['character'] :''; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jquery-3.6.0.js"></script>
</body>
</html>
