<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ajouter</title>
</head>
<style>

</style>
<body>
    <?php
        require_once ('index1.php');
        include_once 'index2.php';
    ?>

<div class="container">
    <?php
        if(isset($_POST['ajouter'])){
            $nom=htmlspecialchars( $_POST['nom']);
            $prenom=htmlspecialchars($_POST['prenom']) ;
            $age=htmlspecialchars ($_POST['age']);

            
            if(!empty($nom) && !empty($prenom) && !empty($age)){
                $sqlState= $pdo->prepare('INSERT INTO stagaires VALUES(null, ?, ?, ?)');
                $sqlState->execute([$nom,$prenom,$age]);
                header('Location: index.php');
            }else{
                ?>
                    <div class="alert alert-danger" role="alert">
                        tous les champs obligatoire!!!
                    </div>
                <?php
            }
        }
    ?>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom...">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom" placeholder="Prenom...">
        </div>
        <div class="mb-3 ">
            <label  class="form-label">Age:</label>
            <input type="number" class="form-control" name="age" placeholder="Age..."> 
        </div>
        <button type="submit" class="btn btn-primary" name="ajouter">Ajouter Stagiaire</button>
        </form>
</div>


</body>
</html>