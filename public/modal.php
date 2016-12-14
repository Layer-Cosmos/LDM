<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 11/12/2016
 * Time: 21:47
 */
$_GET['id'] = 2;
foreach($db->prepare('SELECT * FROM article WHERE id = ?', array($_GET['id'])) as $modal): ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?= $modal->titre; ?></h4>
                </div>
                <div class="modal-body">
                    <img src="images/<?= $modal->image; ?>" width="400px" style="border-radius: 4px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal -->
