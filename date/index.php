<?php
require "app/init.php"
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <h1>Karel</h1>
        <div>
            <form>
                <fieldset>
                    <textarea name="commands" rows = "10"><</textarea>
                    <button>Proveď</button>
                </fieldset>
            </form>
            <div>
            <table>
            <?php
                require "app/gene-table.php";
                ?>
            </table>
                <h2>manual</h23>
            </div>
        </div>
    </main>
</body>
</html>