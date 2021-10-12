<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Films!</h1>

<div class="container">

<form action="index.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Input name of film</label>
    <input type="text" class="form-control" id="userInput" name="userInput" placeholder="Borat 2">
  </div>
<button type="submit" class="btn btn-primary" id="submit">Sign in</button>
</form>

<?php 

$films = array(
    "Kastanek",
    "Karel",
    "Terc",
    "Lajna",
    "Duna"
);

$lists = array (
    0 => "Na místě brutální vraždy se najde figurka z kaštanů a na základě téhle stopy pak dvojice detektivů pátrá po vrahovi, který má prsty ve zmizení dcery známé političky.",
    1 => "Celovečerní dokumentární film Karel přináší ojedinělý pohled do soukromí a do duše Karla Gotta. Renomovaná režisérka Olga Malířová Špátová natáčela s Karlem Gottem",
    2 => "Skupina Moskvanů stráví nějaký čas v bývalém astrofyzikálním komplexu na Altaji, aby si do elitně přepychového života přinesla díky účinkům kosmického záření věčné mládí a štěstí.",
    3 => "Elitní hokejový kouč Luboš Hrouzek, olympijský vítěz z Nagana a bývalý hráč NHL, má před rozvodem s manželkou Helenou a hlavně se rozchází také se svým klubem HC Slavia Praha. ",
    4 => "Kultovní sci-fi dílo vypráví o mocenských bojích uvnitř galaktického Impéria, v nichž jde o ovládnutí planety Arrakis: zdroje vzácného koření - melanže"
);

$rating = array (
    0 => "81",
    1 => "79",
    2 => "62",
    3 => "80",
    4 => "84",
);

$userInput = $_POST['userInput'];

if(in_array($userInput,$films)){
    if(array_keys($films, $userInput)){
        $indexOfValue = array_search($userInput,$films);
        echo $userInput . "<br>";
        echo $lists[$indexOfValue] . "<br>";
        echo $rating[$indexOfValue] . "<br>";
    }
} else {
    echo "This film don't exist in our database";
}



?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

