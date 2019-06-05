<?php

function getDBConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$database = "Gamedag";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}


function getGame($id){
    $conn = getDBConnection();
    $query = $conn->prepare("SELECT * FROM games WHERE id=:id");
    $query->bindParam(":id", $id);
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function getGames(){
    $conn = getDBConnection();
    $query = $conn->prepare("SELECT * FROM games");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function createPlanningGames($data){
    echo "Data is opgeslagen";
    $conn = getDBConnection();
    $query = $conn->prepare("INSERT INTO planning (gamename, Tijd, explainer, players) VALUES (:gameName, :Tijd, :explainer, :players)");
    $query->bindParam(":gameName", $data['gamename']);
    $query->bindParam(":Tijd", $data['Tijd']);
    $query->bindParam(":explainer", $data['explainer']);
    $query->bindParam(":players", $data['players']);
    $query->execute();
}

function selectPlanning(){
    $conn = getDBConnection();
    $query = $conn->prepare("SELECT * FROM planning");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
    var_dump($result);
}

function deletePlanning($id){
    $conn = getDBConnection();
    $query = $conn->prepare("DELETE FROM planning WHERE id=:id");
    $query->bindParam(":id", $id);
    $query->execute();
}

function updatePlanning($data){
    $conn = getDBConnection();
    $query = $conn->prepare("UPDATE planning SET gameName = :gameName, Tijd = :Tijd, explainer = :explainer, players = :players WHERE id=:id");
    $query->execute($data);
}

function getGamegepland($id){
    $conn = getDBConnection();
    $query = $conn->prepare("SELECT * FROM planning WHERE id=:id");
    $query->bindParam(":id", $id);
    $query->execute();
    $result = $query->fetch();
    return $result;
}

