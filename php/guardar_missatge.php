<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $missatge = htmlspecialchars($_POST["missatge"]);
    
    $data = "Nom: $nom\nEmail: $email\nMissatge: $missatge\n--------------------------\n";
    
    file_put_contents("../data/missatges.txt", $data, FILE_APPEND);
    
    echo "<script>alert('Missatge enviat correctament!'); window.location.href='../pagines/contacte.html';</script>";
} else {
    echo "<script>alert('Error en l'enviament del missatge.'); window.location.href='../pagines/contacte.html';</script>";
}
?>
