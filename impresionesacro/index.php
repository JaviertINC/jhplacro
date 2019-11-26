<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php $page_name = 'Inicio'; ?>
<?php include "blocks/config.php"; ?>
<?php include "blocks/header.php"; ?>
<div class="container">

    <div class="row">
        <div class="col-12 col-md-6">
            <p>Izquierda</p>
        </div>
        <div class="col-12 col-md-6">
            <p>Derecha</p>
        </div>
    </div>

</div>
<?php include "blocks/footer.php"; ?>
<?php }else{
    Header('location: 404');
}?>
