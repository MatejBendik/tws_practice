<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>task01</title>
  </head>
  <body>
<?php 

$people = array(
    "Juraj Veľký" => 20,
    "Peter Dobrosrdečný" => 50,
    "Jana Malá" => 35,
    "Juraj Pohodlný" => 33,
    "Štefan Nafuknutý" => 22
);

?>

<table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">Meno Priezvisko</th>
      <th scope="col">Vek</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($people as $key=>$row) {
        echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $row . "</td>";
        echo "</tr>";
}
?>
  </tbody>
</table>  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>



