<?php 
include('../app/Views/header.php');
?> 
        
<div class="row">
    <h1>Liste des pays</h1>
</div>
<div class="row">
    <table class="table table-bordered table-stripped">
        <thead>
            <!-- Entêtes de table à ajouter ici si nécessaire -->
        </thead>
        <tbody>
            <?php
            foreach($pays as $p){
                echo '<tr>';
                echo '<td>', $p->name, '</td>';
                echo '<td>';
                // Affichage du bouton d'édition
                Kernel\Component::display('button', [
                    'url' => '.?controller=Pays&action=edit',
                    'type' => 'info',
                    'icon' => 'fas fa-pen',
                ]);

                // Affichage du bouton de suppression
                Kernel\Component::display('button', [
                    'url' => '.?controller=Pays&action=delete',
                    'type' => 'danger',
                    'icon' => 'fas fa-trash',
                ]);
                echo '</td>';
                echo'</tr>';
            }
            ?>
        </tbody>
    </table>         
</div>
<!-- /.row -->
<?php
include('../app/Views/footer.php');
?>
