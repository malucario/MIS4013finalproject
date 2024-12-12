<?php
require_once("util-db.php");
require_once("model-gabriel-stats.php");
$pageTitle = "Dillon Gabriel Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertGabrielStats($_POST['gsDate'], $_POST['gsOpp'], $_POST['gsPassComps'], $_POST['gsPassAtt'], $_POST['gsCompPct'], $_POST['gsPassYds'], $_POST['gsPassTDs'], $_POST['gsPassInts'], $_POST['gsPassRate'], $_POST['gsRushAtt'], $_POST['gsRushYds'], $_POST['gsRushAvg'], $_POST['gsRushTDs'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteGabrielStats($_POST['gsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateGabrielStats($_POST['gsPassComps'], $_POST['gsPassAtt'], $_POST['gsCompPct'], $_POST['gsPassYds'], $_POST['gsPassTDs'], $_POST['gsPassInts'], $_POST['gsPassRate'], $_POST['gsRushAtt'], $_POST['gsRushYds'], $_POST['gsRushAvg'], $_POST['gsRushTDs'], $_POST['gsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$ggamelogs = selectGabrielStats();
$gtotals = selectGabrielTotalStats();
include "view-gabriel-stats.php";
Include "view-footer.php";
?>
