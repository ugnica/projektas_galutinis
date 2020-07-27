<?php
    if(!empty($_POST)) {

        define("DB_SERVER", "localhost");
        define("DB_USER","root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "hipokrate");

        $name = trim(htmlspecialchars($_POST['name']));
        $email = trim(htmlspecialchars($_POST['email']));
        $procedurospavadinimas = trim(htmlspecialchars($_POST['procedurospavadinimas']));
        $phone = trim(htmlspecialchars($_POST['phone']));
        $date = trim(htmlspecialchars($_POST['date']));
        $time = trim(htmlspecialchars($_POST['time']));
        $message = trim(htmlspecialchars($_POST['message']));


        $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if($mysqli->connect_error) {
                echo "Atsiprašome, bet svetainė susidūrė su problema. \n";
                echo 'Klaida: ' . $mysqli->connect_error . '\n';
                exit();
        }

        mysqli_query($mysqli, "INSERT INTO registracijos (name, email, proceduros_pavadinimas, tel, date, time, zinute) VALUES('$name', '$email', '$procedurospavadinimas', '$phone', '$date', '$time', '$message')");

        echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime');</script>";
    }
