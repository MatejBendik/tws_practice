<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<div class="container">
    <div class="row">
        <div class="col col-lg-12">
            <form action="task04.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Xiaomi Redmi 7A 32GB" name="list[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Xiaomi Redmi 7A 32GB - 99.9 eur
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Samsung Galaxy A40"  name="list[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Samsung Galaxy A40 - 248 eur
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HUAWEI Mate 20 Pro" name="list[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    HUAWEI Mate 20 Pro - 500 eur
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="iPhone Xr 64GB" name="list[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    iPhone Xr 64GB - 700 eur
                </label>
                </div>
        </div>
        <div class="row">
            <div class="col col-lg-12">
                <button type="submit" class="btn btn-success">Odosli udaje</button>        
            </div>
        </div>
        </form>
    </div>

    <div class="row text-center">
        <div class="col col-lg-12">
            <p>Vas nakup:</p>
            <?php 
                if(isset($_POST["list"])){
                    $listName = $_POST["list"];
                    foreach($listName as $list){
                        echo  $list . ", ";
                    }
                } else{
                    echo "<p> Nevybrali ste si nic. </p>";
                }
            
            ?>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>