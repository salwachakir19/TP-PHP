
<?php

require_once "06-connexion.php";

$sql = "SELECT * FROM products WHERE price>300";

$statement = $pdo->query($sql);

$products = $statement->fetchAll(
    PDO::FETCH_ASSOC
);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Gestion des produits</title>

</head>

<body>

    <h1>Liste des produits</h1>

    <?php

    if (count($products) > 0) {

    ?>

        <table border="1">

            <tr>

                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total stock</th>

            </tr>

            <?php

            foreach ($products as $product) {

                $totalStock = $product["price"] * $product["quantity"];

            ?>

                <tr>

                    <td>
                        <?php
                        echo htmlspecialchars($product["name"]);
                        ?>
                    </td>

                    <td>
                        <?php
                        echo $product["price"];
                        ?> DH
                    </td>

                    <td>
                        <?php
                        echo $product["quantity"];
                        ?>
                    </td>

                    <td>
                        <?php
                        echo $totalStock;
                        ?> DH
                    </td>

                </tr>

            <?php

            }

            ?>

        </table>

    <?php

    } else {

        echo "<p>Aucun produit trouvé.</p>";

    }

    ?>

</body>

</html>
