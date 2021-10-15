<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>task02</title>
  </head>
  <body>
<?php 

$vegetables = array(
    "kapusta",
    "uhorka",
    "paradajka",
    "paprika",
    "reďkovka",
    "mrkva",
    "brokolica"
);

$fruits = array(
    "jablko",
    "hruška",
    "pomaranč",
    "banán",
    "kiwi",
    "malina",
    "limetka"
);

$userInput = $_POST["userInput"];

?>

<div class="container">
<div class="row ">
    <div class="col col-lg-12 text-center">
        <h2>Zistenie plodiny</h2>
        <img src="img/fruits_vegetables.jpg" alt="fruits_vegetables" title="fruits_vegetables">
        <p>Zadaj názov plodiny</p>
        <form action="task02.php" method="post" >
            <div class="d-flex justify-content-center ">
                <div class="form-group col-lg-4 ">
                    <input type="text" name="userInput" placeholder="Zadaj plodinu">
                </div>
            </div>
                <button type="submit" class="btn btn-success">Odoslať</button>
        </form>
        <?php 
        
            if (in_array($userInput, $vegetables)) {
                echo "<p>$userInput je zelenina</p>";
            } elseif(in_array($userInput, $fruits)){
                echo "<p>$userInput je ovocie</p>";
            } else{
                echo "<p>Nepoznám plodinu</p>";
            }
        
        ?>
    </div>
</div>


</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>



