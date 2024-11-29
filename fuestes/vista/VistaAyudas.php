<?php
namespace Vista;

require_once __DIR__ . '/Vista.php';

class VistaAyudas extends Vista
{
    public static function verAñadirMaterial()
    {
?>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h1>Gestor ayudas</h1>
                    <a href="formMaterial.html" class="btn btn-primary">Crear material</a>
                    <a href="formDonacion.html" class="btn btn-primary">Donar</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Material #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>21</td>
                                                <td>Material A</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Material B</td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>Material C</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Material Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2</td>
                                                <td>Material D</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Material E</td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>Material F</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Material Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>112</td>
                                                <td>Material G</td>
                                            </tr>
                                            <tr>
                                                <td>233</td>
                                                <td>Material H</td>
                                            </tr>
                                            <tr>
                                                <td>323</td>
                                                <td>Material Y</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>