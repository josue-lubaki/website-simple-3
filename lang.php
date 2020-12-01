<?PHP
session_start();
if ($_SESSION["lang"] == "Fr")
    $_SESSION["lang"] ="En";
else
    $_SESSION["lang"] = "Fr";

header("location: index.php");
?>
