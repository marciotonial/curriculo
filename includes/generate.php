<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $experiences = $_POST['experience'];
    $descriptions = $_POST['description'];
    $educations = $_POST['education'];
    $years = $_POST['year'];
    $skills = htmlspecialchars($_POST['skills']);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currículo de <?php echo $name; ?></title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Currículo de <?php echo $name; ?></h1>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Telefone:</strong> <?php echo $phone; ?></p>
            <p><strong>Endereço:</strong> <?php echo $address; ?></p>
            
            <h2>Experiências</h2>
            <?php
            foreach ($experiences as $index => $experience) {
                echo '<div class="experience">';
                echo '<h3>' . htmlspecialchars($experience) . '</h3>';
                echo '<p>' . htmlspecialchars($descriptions[$index]) . '</p>';
                echo '</div>';
            }
            ?>

            <h2>Formação</h2>
            <?php
            foreach ($educations as $index => $education) {
                echo '<div class="education">';
                echo '<h3>' . htmlspecialchars($education) . '</h3>';
                echo '<p>Ano de Conclusão: ' . htmlspecialchars($years[$index]) . '</p>';
                echo '</div>';
            }
            ?>

            <h2>Habilidades</h2>
            <p><?php echo nl2br($skills); ?></p>
        </div>
    </body>
    </html>
    <?php
} else {
    header('Location: ../index.php');
}
?>
