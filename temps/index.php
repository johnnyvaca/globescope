<?php
require_once "model.php";
?>
<!-- SELECT TIPO DE EQUIPO -->

<div class="form-group">
    <label for="tipo_equipo" class="col-sm-2 control-label">Tipo Equipo:</label>
    <div class="col-sm-10">
        <div class="input-group input-group-sm">
            <select id="tipo_equipo" name="tipo_equipo" class="form-control">

                <option value="-Todos-">-Todos-</option>
                <option value="DE ESCRITORIO">DE ESCRITORIO</option>
                <option value="LAPTOP">LAPTOP</option>
                <option value="THIN CLIENT">THIN CLIENT</option>

            </select>
        </div>
    </div>
</div>

<!-- SELECT MARCA -->

<div class="form-group">
    <label for="marca_eq" class="col-sm-2 control-label">Marca:</label>
    <div class="col-sm-10">
        <div class="input-group input-group-sm">
            <select id="marca_eq" name="marca_eq" class="form-control">

                <option value="-Todas-">-Todas-</option>
                <option value="3COM">3COM</option>
                <option value="ACER">ACER</option>
                <option value="ACTEK">ACTEK</option>
                <option value="ADATA">ADATA</option>
                <option value="BENQ">BENQ</option>
                <option value="BROTHER">BROTHER</option>
                <option value="CANON">CANON</option>
                <option value="CNET">CNET</option>
                <option value="COMPAQ">COMPAQ</option>
                <option value="DELL">DELL</option>
                <option value="EME">EME</option>
                <option value="EPSON">EPSON</option>
                <option value="GENERICO">GENERICO</option>
                <option value="HP">HP</option>
                <option value="IBM">IBM</option>
                <option value="IUSACELL">IUSACELL</option>
                <option value="KODAK">KODAK</option>
                <option value="KONICA MINOLTA">KONICA MINOLTA</option>
                <option value="LENOVO">LENOVO</option>
                <option value="LEXMARK">LEXMARK</option>
                <option value="LG">LG</option>
                <option value="MANHATTAN">MANHATTAN</option>
                <option value="MARKVISION">MARKVISION</option>
                <option value="MICROSOFT">MICROSOFT</option>
                <option value="MICROTEK">MICROTEK</option>
                <option value="MOTOROLA">MOTOROLA</option>
                <option value="OLIVETTI">OLIVETTI</option>
                <option value="PERFECT CHOICE">PERFECT CHOICE</option>
                <option value="PRINTAFORM">PRINTAFORM</option>
                <option value="PROTEUS">PROTEUS</option>
                <option value="SAMSUNG">SAMSUNG</option>
                <option value="SEAGATE">SEAGATE</option>
                <option value="SHARP">SHARP</option>
                <option value="SOLA BASIC">SOLA BASIC</option>
                <option value="SONY">SONY</option>
                <option value="TDE">TDE</option>
                <option value="TOSHIBA">TOSHIBA</option>
                <option value="VIEWSONIC">VIEWSONIC</option>
                <option value="VOLTELECT">VOLTELECT</option>
                <option value="XEROX">XEROX</option>

            </select>
        </div>
    </div>
</div>


<!-- AQUI IMPIRMO LA TABLA -->

<div id="tablaEq" class="form-group" style="display:none;" >

    <div  class="col-md-6 col-md-offset-3"  style="overflow-y:scroll; height: 350px; width: 830px;">

        <!--MOSTRAR TODOS LOS EQUIPOS EN LA TABLA-->
        <!-- CONSULTA -->



        <table id="teq">
            <thead>
            <tr>
                <th id = "nce">N° Control</th>
                <th id = "nie">N° Inventario</th>
                <th id = "te">Tipo Equipo</th>
                <th id = "me">Marca</th>
                <th id = "nse">N° Serie</th>
                <th id = "ae">Área</th>
                <th id = "acce">Acción</th>
            </tr>
            </thead>





                <tbody class="contenidobusqueda">

                <?php
                foreach ($images as $i => $image) {
                    if ($i % 2 == 0) {
                        ?>
                        <tr class="bg-success">
                        <?php
                    } else {
                        ?>
                        <tr class="bg-danger">
                        <?php
                    }
                    ?>

                    <td><img src="images/128-128/" alt="image"></td>
                    <td class="classPseudo"><b><span>Pseudo</span></b><br><br><span><?= $image['Pseudo'] ?></span></td>
                    <td><b><span>Pays</span></b><br><br><span><?= $image['Pays'] ?></span></td>
                    <td><b><span>Slogan</span></b><br><br><span><?= $image['Slogan'] ?></span></td>
                    <td class="classDroit"><b><span>Droit</span></b><br><br><span><?= $image['Droit'] ?></span></td>
                    <td>
                        <br>
                        <br>
                        <span><b>Modifier</b></span>
                        <input type="checkbox" aria-label="helo" value="<?= $image['IDPlace'] ?>" name="arrayModify[]">
                    </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>

        </table>

    </div>

    <?
    echo $mensaje;
    ?>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $(document).ready(function($) {
        $('table').show();
        $('#tipo_equipo').change(function() {
            $('table').show();
            var selection = $(this).val();
            if (selection === '-Todos-') {
                $('tr').show();
            }
            else {
                var dataset = $('#teq .contenidobusqueda').find('tr');
                // show all rows first
                dataset.show();
            }
            // filter the rows that should be hidden
            dataset.filter(function(index, item) {
                return $(item).find('#third-child').text().split(',').indexOf(selection) === -1;
            }).hide();
        });
    });

    // FUNCION PARA FILTRAR POR SELECT MARCA
    $(document).ready(function($) {
        $('table').show();
        $('#marca_eq').change(function() {
            $('table').show();
            var selection = $(this).val();
            if (selection === '-Todas-') {
                $('tr').show();
            }
            else {
                var dataset = $('#teq .contenidobusqueda').find('tr');
                // show all rows first
                dataset.show();
            }
            // filter the rows that should be hidden
            dataset.filter(function(index, item) {
                return $(item).find('#fourth-child').text().split(',').indexOf(selection) === -1;
            }).hide();
        });
    });
</script>