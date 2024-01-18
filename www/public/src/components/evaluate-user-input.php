<?php
/*
    Evaluiere die vom Benutzer eingegebenen und in $_SESSION gespeicherten Werte
    und bereite daraus die Variablen für den Feedback-Text vor.

    Gehe von Frage zu Frage, berechne jeweils aus den Benutzereingaben die erreichten
    "Gesunheitspunkte". Bilde die Summe aus den Gesundheitspunkten und beurteile
    anhand von Schwellenwerten, ob der Benutzer "ungesund", "einigermassen gesund" 
    oder "sehr gesund" lebt.
*/
include "questions.php";
$totalPoints = 0;

// DEVONLY
// prettyPrint($_SESSION);

foreach (QUESTIONS as $i => $data) { // In $data kommen die Originaldaten einer Frage.
    // Hole die Benutzereingaben aus der Session.
    $questionKey = $data["id"];

    if (isset($_SESSION[$questionKey])) {
        $userPost = $_SESSION[$questionKey];
    }

    // Je nach Fragetyp: Bestimme den vom Benutzer gewählten Antwort-Wert.
    $value = 0;
points
    switch($data["type"]) {
        case "range": // ----------------------------------------
            $value = $userPost["range-slider"];
            break;
    
        case "radio": // ----------------------------------------
            if ($userPost["single-choice"] === $data["healthy-value"]) $value = 1;
            else $value = 0;
            break;

        case "checkbox": // -------------------------------------
            $value = countSelectedCheckboxes($userPost);
            break;

        case "number": // ---------------------------------------
            $value = $userPost["times-per-day"];
            break;

    }

    // Berechne die Punkte aus dem Antwort-Wert $value.
    $points = pointsInRange($data, $value);

    // Addiere die Punkte zum Punktetotal.
    // Damit lässt sich ein Maximum von 33 Punkten erreichen.
    $totalPoints = $totalPoints + $points; // dasselbe wie: $totalPoints += $points;

    // DEVONLY
    echo "<p>$questionKey: points = $points (\$value=$value)</p>";
}

// Bestimme die Anzahl der gewählten Checkboxen.
function countSelectedCheckboxes($userPost) {
    $needle = "chbox-";
    $counter = 0;

    foreach($userPost as $key => $value) {
        if (str_contains($key, $needle)) $counter++;
    }

    return $counter;
}

// Berechne die Punkte aus gegebenem Wert und vorbestimmten Wertebereich. 
function pointsInRange($data, $value) {
    $healthyRange = $data["healthy-range"]; // Bsp. array(7, 10)
    $healthyPoints = $data["healthy-points"]; // Bsp. 3

    if ($healthyRange[0] <= $value && $value <= $healthyRange[1]) {
        return $healthyPoints;
    }
    else return 0;
}

?>