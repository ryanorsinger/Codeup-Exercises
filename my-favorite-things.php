<?php
$contacts = [
        0 => ['name' => 'Jane', 'number' => '226-3232'],
        1 => ['name' => 'Bob', 'number' => '222-2222']
    ];

?>
<html>
    <head></head>
    <body>
        <h1>My Favorite Things:</h1>
        <table>
        <? foreach($contacts as $row): ?>
            <tr>
                <? foreach($row as $cell): ?>
                    <td><?= $cell; ?></td>
                <? endforeach; ?>
            </tr>
        <? endforeach; ?>
        </table>
    </body>
</html>
