<?php
require('../config/commande.php');
$produits=afficher();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexecom.css"><!---CSS----->
    <title>Document</title>
</head>
<body>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form methode="POST">


      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identifiant de produit</label>
    <input type="number" class="form-control" name="idprodiut" required>
  </div>

 
  
  <button type="submit"  name="valider" class="btn btn-primary">Suprimer le produit</button>
</form>

      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($produits as $produit): ?> 
      <div class="col">
          <div class="card shadow-sm">
            <img src="<?= $produit->img ?>">
            <h2><?= $produit->id?></h2>
            <div class="card-body">
            </div>
          </div>
        </div>
        <?php endforeach; ?>
         
      </div>
    
    </div></div>
</body>
</html>

<?php
    if(isset($_POST['valider']))
    {
        if (isset($_POST['idpro']))
        {
            if(!empty($_POST['id']))
            {
                $idpro = htmlspecialchars(($_POST['id']));
                
                try{
                  suprimer($id);

                }catch(Exception $e)
                {
                    $e->getMessage();
                }
            }
        }
    }
?>
