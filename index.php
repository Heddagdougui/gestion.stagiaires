<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('index1.php');
        include_once 'index2.php';

        $sqlState= $pdo->query('SELECT * FROM stagaires');
        $stagaires= $sqlState->fetchAll(PDO::FETCH_ASSOC);
        //echo "<pre>";
        //print_r($stagaires);
        //echo "</pre>";
    ?>
    <div class="container my-4">
        <a href="index3.php" class="btn btn-success link float-end">Ajouter</a>
    </div>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOM</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($stagaires as $stagaire)
        echo " 
            <tr>
                <td>" .$stagaire['id']. "</td>
                <td>" .$stagaire['nom']. "</td>
                <td>" .$stagaire['prenom']. "</td>
                <td>" .$stagaire['age']. "ans</td>
                <td>
                    <form method='post'>
                        <input class='btn btn-primary btn-sm' type='submit' name='modifier' value='Modifier'>
                        <input class='btn btn-danger btn-sm' type='submit' name='supprimer' value='Supprimer'>
                    </form>
                </td>
            </tr> " ;
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>