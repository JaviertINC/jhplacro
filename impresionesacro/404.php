<?php if($opn_token = "NtRgedkbibvTWo3cMkerX4hkdRYw7b3c"){?>
<?php $page_name = 'Inicio'; ?>
<?php include "blocks/config.php"; ?>
<?php include "blocks/header.php"; ?>
<body id="cuabo">
<div class="container">

    <div class="card">
        <div class="card-header">
            ERROR 404
        </div>
        <div class="card-body">
            Ocurrió un error en su petición, por favor, intente de nuevo.
        </div>
    </div>

</div>
</body>
<?php include "blocks/footer.php"; ?>
<?php }else{
    Header('location: 404');
}?>
