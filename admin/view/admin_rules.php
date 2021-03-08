<?php

//TITRE DE LA PAGE (SEO)
$title = 'LES BANNIS - Gestion des règles';
//CSS PRINCIPAL DE LA PAGE
$css = '../css/admin_rules.css';
//CSS RESPONSIVE DE LA PAGE
$css_responsive = '../css/admin_rules_responsive.css';

//CONNEXION BDD
require('../../fonctions/db_connect.php');
$bdd = db_connect();
//REQUETE
require('../fonctions/requests.php');
$rules_progression = request_rules_progression($bdd);
$rules_constructions = request_rules_constructions($bdd);
$rules_compagnons = request_rules_compagnons($bdd);
$rules_economy = request_rules_economy($bdd);
$rules_rank = request_rules_rank($bdd);

?>

<?php ob_start(); ?>

<p id="return" class="uppercase"><a href="../index_admin.php" id="return_a" class="red">Retour vers accueil admin</a></p>

<?php $content = ob_get_clean(); ?>

<div id="content" class="center">

  <h1 class="white center uppercase shadow-red my-5">gestion des règles</h1>

  <div class="block-rules mt-5">

    <h2 class="white center uppercase red">Progression</h2>

    <?php
          
      while ($progression = $rules_progression->fetch())
      {
        echo('<div class="rule">
                <p class="center white" >' . $progression['rule'] . '</p>
                <form action="#" method="post" class="my-0 mx-3">
                  <input type="text" name="base" class="hidden btn-base" value="progression" required>
                  <input type="text" name="id" class="hidden btn-id" value="' . $progression['id'] . '" required>
                  <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-rule">
                </form>
              </div>'
            );
      }

    ?>

    <form action="../fonctions/post_rule.php" method="post" class="mt-2">
      <input type="text" name="rule" class="input-rule" required>
      <input type="text" name="base" class="hidden input-base" value="progression" required>
      <br>
      <input type="submit" value="AJOUTER" class="input-submit btn btn-danger mt-2">
    </form>

  </div>

  <div class="block-rules">

    <h2 class="white center uppercase red">Constructions</h2>
    
    <?php
          
      while ($construction = $rules_constructions->fetch())
      {
        echo('<div class="rule">
                <p class="center white" >' . $construction['rule'] . '</p>
                <form action="#" method="post" class="my-0 mx-3">
                  <input type="text" name="base" class="hidden btn-base" value="construction" required>
                  <input type="text" name="id" class="hidden btn-id" value="' . $construction['id'] . '" required>
                  <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-rule">
                </form>
              </div>'
            );
      }

    ?>

    <form action="../fonctions/post_rule.php" method="post" class="mt-2">
      <input type="text" name="rule" class="input-rule" required>
      <input type="text" name="base" class="hidden input-base" value="construction" required>
      <br>
      <input type="submit" value="AJOUTER" class="input-submit btn btn-danger mt-2">
    </form>

  </div>

  <div class="block-rules">

    <h2 class="white center uppercase red">Thrall & Animaux</h2>
    
    <?php
          
      while ($compagnon = $rules_compagnons->fetch())
      {
        echo('<div class="rule">
                <p class="center white" >' . $compagnon['rule'] . '</p>
                <form action="#" method="post" class="my-0 mx-3">
                  <input type="text" name="base" class="hidden btn-base" value="compagnon" required>
                  <input type="text" name="id" class="hidden btn-id" value="' . $compagnon['id'] . '" required>
                  <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-rule">
                </form>
              </div>'
            );
      }

    ?>

    <form action="../fonctions/post_rule.php" method="post" class="mt-2">
      <input type="text" name="rule" class="input-rule" required>
      <input type="text" name="base" class="hidden input-base" value="compagnon" required>
      <br>
      <input type="submit" value="AJOUTER" class="input-submit btn btn-danger mt-2">
    </form>

  </div>

  <div class="block-rules">

    <h2 class="white center uppercase red">Economy</h2>
    
    <?php
          
      while ($economy = $rules_economy->fetch())
      {
        echo('<div class="rule">
                <p class="center white" >' . $economy['rule'] . '</p>
                <form action="#" method="post" class="my-0 mx-3">
                  <input type="text" name="base" class="hidden btn-base" value="economy" required>
                  <input type="text" name="id" class="hidden btn-id" value="' . $economy['id'] . '" required>
                  <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-rule">
                </form>
              </div>'
            );
      }

    ?>

    <form action="../fonctions/post_rule.php" method="post" class="mt-2">
      <input type="text" name="rule" class="input-rule" required>
      <input type="text" name="base" class="hidden input-base" value="economy" required>
      <br>
      <input type="submit" value="AJOUTER" class="input-submit btn btn-danger mt-2">
    </form>

  </div>

  <div class="block-rules">

    <h2 class="white center uppercase red">Rank</h2>
    
    <?php
          
      while ($rank = $rules_rank->fetch())
      {
        echo('<div class="rule">
                <p class="center white" >' . $rank['rule'] . '</p>
                <form action="#" method="post" class="my-0 mx-3">
                  <input type="text" name="base" class="hidden btn-base" value="rank" required>
                  <input type="text" name="id" class="hidden btn-id" value="' . $rank['id'] . '" required>
                  <input type="submit" value="Supprimer" class="btn btn-outline-danger btn-rule">
                </form>
              </div>'
            );
      }

    ?>

    <form action="../fonctions/post_rule.php" method="post" class="mt-2">
      <input type="text" name="rule" class="input-rule" required>
      <input type="text" name="base" class="hidden input-base" value="rank" required>
      <br>
      <input type="submit" value="AJOUTER" class="input-submit btn btn-danger mt-2">
    </form>

  </div>

</div>

<script src="../js/rules.js"></script>

<?php require('../template/template_admin.php'); ?>