   


if($_SERVER['REQUEST_METHOD'] === 'POST') {

} 

if (($_POST["q1"]) < 0)
    {
      $ageErr = "Customers must be aged 16-90";
    } 
    else 
    {
      $rangeSlider = test_input($_POST["ageOutput"]);
    }












if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lösche alle Session Daten
    session_unset();
    // Zerstöre die Session
    session_destroy(); } 