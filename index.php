<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Bienvenue sur ma page web</h1>

    <?php
    // Connexion à la base de données
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=nom_de_ta_bdd', 'nom_utilisateur', 'mot_de_passe');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        exit();
    }

    // Insertion de données (exemple)
    $sql = "INSERT INTO ta_table (colonne1, colonne2) VALUES (:valeur1, :valeur2)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['valeur1' => 'exemple1', 'valeur2' => 'exemple2']);

    // Récupération et affichage des données
    $sql = "SELECT * FROM ta_table";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<p>' . $row['colonne1'] . ' ' . $row['colonne2'] . '</p>';
    }
    ?>

</body>
</html>



