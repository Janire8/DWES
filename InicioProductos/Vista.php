<?php
class Vista
{
    public function inicioHTML()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
    <?php
    }

    public function mostrarProductos($productos)
    {
    ?>

        <body>
            <?php foreach ($productos as $producto) { ?>

                <div class="card" style="width: 18rem;">
                    <img src="<?php $producto["imagen"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" <?php $producto["nombre"] ?>></h5>
                        <p class="card-text" <?php $producto["descripcion"] ?>></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            <?php } ?>
        </body>

        </html>

<?php
    }
}
?>