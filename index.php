<?php
namespace Radouane\Eligibility;
// Importation du fichier Router.php
require_once("./Router.php");

// Route pour le fichier index.php dans le répertoire src
Router::get('/test', '/src/index.php');

// Route pour le fichier get_ville_byCode.php
Router::get('/get_ville_byCode.php', function() {
    require_once './src/get_ville_byCode.php';
});

// Route pour le fichier Listes_Adress.php en méthode POST
Router::post('/Listes_Adress.php', function() {
    // Récupérer les données envoyées depuis le formulaire
    $codePostal = $_POST['codePostal'];
    $nomVoie = $_POST['nomVoie'];
    $numVoie = $_POST['numVoie'];
});

// Route pour le fichier eligible.php en méthode GET
Router::get('/src/eligible.php', function() {
    // Récupérer les données depuis $_GET
    $ndi = $_GET['ndi'] ?? '';
    $ndi_status = $_GET['ndi_status'] ?? '';
    $idtown = $_GET['idtown'] ?? '';
    $street = $_GET['street'] ?? '';
    $number = $_GET['number'] ?? '';
    $zip = $_GET['zip'] ?? '';
    $city = $_GET['city'] ?? '';
    $latitude = $_GET['latitude'] ?? '';
    $longitude = $_GET['longitude'] ?? '';
    $hexacle = $_GET['hexacle'] ?? '';
    // Inclure le fichier HTML avec les données
    include './src/check_eligible_ByAdress.php';
    include './src/check_eligible_ByNDI.php';
});


// Dispatch the request to the appropriate route
Router::dispatch();
?>
