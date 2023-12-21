<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Noel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .navbar {
            background-color: #f13b3b;
            height: 130px;
            /*padding: 1rem 0;*/
            padding-top: 0rem; /* Augmenter l'épaisseur */
            padding-bottom: 0rem;
        }

        .titre {
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center; /* Centre horizontalement */
            align-items: center; /* Centre verticalement */
            height: 100%; /* Pour centrer verticalement */
            transition: background-color 0.3s;
        }

       
        .titre:hover {
            color: #ffecf3;
            background-color: #f13b3b;
            cursor: pointer;
        }

        .button.is-primary {
            border-radius: 25px;

        }

        .navbar-item, .navbar-link {
            color: #ffffff;
        }


        .button.is-danger.my-delete-button {
            background-color: #f13b3b !important;
            border-color: #f13b3b !important;
            border-radius: 25px;
        }

        .card {

            background-color: #ffffff; /* Rouge clair */
            border-radius: 25px;
            border-top-left-radius: 25px;
            margin-top: 30px;
            width: 100% !important;
        }

        body {
            background-color: #ffe9e9;

        }

        .columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px; /* Espace entre les éléments */
        }

        .field label,
        .field .control input,
        .field .control textarea  {
            border-radius: 25px;

        }
        footer.navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #f13b3b;
            padding-bottom: 80px;
        }

        .logo-image {
            width: 350px;
            height: 250px;
        }


    </style>
</head>
<body>
<?php

include("../src/View/Components/navbar.php");

include("../src/routeur.php");

include("../src/View/Components/footer.php");

?>
</body>
</html>