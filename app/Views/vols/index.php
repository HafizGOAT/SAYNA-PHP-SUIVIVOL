<?php
   include('../app/Views/header.php');

?>

<div class="row">
   <div class="container">
      <a href="">Pays</a>
      <a href="index.php?controller = ">Aeroports</a>
      <h1>Aeroports</h1>
      <table class="table table-bordered table-striped">
         <thead>
             <tr>
                 <td>Nom Aeroports</td>
                 <td>Ville</td>
                 <td>Pays_id</td>
                 <td>ACTIONS</td>
             </tr>
         </thead>
         <tbody>
            <?php
               foreach($aeroports as $p){
                  echo '<tr>';
                  echo '<td>',$p['name'],'</td>';
                  echo '<td>',$p['ville'],'</td>';
                  echo '<td>',$p['pays_id'],'</td>';
                  echo '<td>';
                  $url = '.?controller=Pays&action=edit.';
                  $label = '<i class="fas fa-pen"></i>';
                  $type = 'info';
                  include('../app/Views/compnents/bouton.php');

                  $url = '.?controller=Pays&action=edit.';
                  $label = '<i class="fas fa-trash"></i>';
                  $type = 'danger';
                  include('../app/Views/compnents/bouton.php');
                  echo '</td>';
                  echo '</tr>';
               }
            ?>
         </tbody>
      </table>
   </div>
</div>
<?php
   include('../app/Views/footer.php');
?>

