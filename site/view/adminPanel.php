<?php
ob_start();
$title = "admin";
?>

    <h1>PAGE ADMIN</h1>
    <table>
        <thead>
        <th>Psuedo</th>
        </thead>
        <tbody>
        <?php
        foreach ($images as $image) {
            ?>
            <tr>
                <td><?=$image['Pseudo']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>