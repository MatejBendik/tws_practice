<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>task03</title>
  </head>
  <body>

<div class="container">

<div class="row d-flex justify-content-center ">
    <div class="col col-lg-4 ">
<form action="task03.php" method="post">
  <div class="mb-3"
    <label for="name" class="form-label">Meno:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Priezvisko</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="mb-3">
    <label for="adresa" class="form-label">Adresa</label>
    <input type="text" class="form-control" id="address" name="address" required>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Laptop" name="products[]" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Laptop
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Monitor" name="products[]" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Monitor
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="PC" name="products[]" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    PC
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="SSD Disk" name="products[]" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    SSD Disk
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Procesor" name="products[]" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Procesor
</label>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-primary">Odoslať objednávku</button>

</div>
</form>
    </div>
</div>

<?php 

$userName = $_POST['name'];
$userLastname = $_POST['lastname'];
$userAddress = $_POST['address'];



?>

<div class="row">
    <div class="col col-lg-5">
        <h2>Vaša objednávka</h2>
        <p>Meno: <?php echo $userName ?></p>
        <p>Priezvisko: <?php echo $userLastname ?></p>
        <p>Adresa: <?php echo $userAddress ?></p>
        <p>Vybrali ste si:</p>
<?php if (isset($_POST['products'])) {
    $productName = $_POST['products'];
    foreach ($productName as $products){
        echo "<li>" . $products . "</li>";
    }
} else {
    echo "Zatiaľ ste si nevybrali žiadny produkt :(";
}

?>
    </div>

</div>

</div>  


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>



