<h2 class=panel-title>VALIDER UN DOCUMENT ADMINISTRATIF :</h2>
</div>
<div class="panel-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vacataire</th>
                <th scope="col"><span class='glyphicon glyphicon-link'></span>Lien</th>
                <th scope="col">Valider</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $documents = ValidateDocuments_M::listDocuments();
            $i = 0;
            foreach($documents as $document)
            {
                $i++;?>
                <tr><td><?php echo $i;?>;
                </td><td><?php echo $document['User'];?>
                </td><td><a href="./fichiers/<?php echo $document['Filename'];?>" download="test"><?php echo $document['Filename'];?></a>
                </td></tr><?php
            }
            ?>
        </tbody>
    </table>
