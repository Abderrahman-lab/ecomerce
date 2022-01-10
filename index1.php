<?php
//require('../config/commande.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form methode="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom de Produit</label>
    <input type="text" class="form-control" name="nom" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
    <input type="text" class="form-control" name="img" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" required> </textarea>
  </div>
  
  <button type="submit"  name="valider" class="btn btn-primary mt-3">Submit</button>
</form>

      </div></div></div>
</body>
</html>

<?php
  require('../config/commande.php');
 
    if(isset($_POST['valider']))
    {
        if(isset($_POST['nom']) AND isset($_POST['img']) AND isset($_POST['prix']) AND isset($_POST['desc']))
        {
            if(!empty($_POST['nom']) AND !empty($_POST['image']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
            {
                $nom = htmlspecialchars(($_POST['nom']));
                $image = htmlspecialchars(($_POST['img']));
                $prix = htmlspecialchars(($_POST['prix'])); 
                $desc = htmlspecialchars(($_POST['desc'])); 
                try{
                    ajouter($nom,$img,$prix,$desc);

                }catch(Exception $e)
                {
                    $e->getMessage();
                }
            }
        }
    }
?>
