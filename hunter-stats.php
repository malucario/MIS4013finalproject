<?php
require_once("util-db.php");
require_once("model-hunter-stats.php");
$pageTitle = "Travis Hunter Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertHunterStats($_POST['hsDate'], $_POST['hsOpp'], $_POST['hsRushAtt'], $_POST['hsRushYds'], $_POST['hsRushAvg'], $_POST['hsRushTDs'], $_POST['hsRec'], $_POST['hsRecYds'], $_POST['hsRecAvg'], $_POST['hsRecTDs'], $_POST['hsDefTack'], $_POST['hsDefInt'], $_POST['hsDefPBU'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteHunterStats($_POST['hsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateHunterStats($_POST['hsRushAtt'], $_POST['hsRushYds'], $_POST['hsRushAvg'], $_POST['hsRushTDs'], $_POST['hsRec'], $_POST['hsRecYds'], $_POST['hsRecAvg'], $_POST['hsRecTDs'], $_POST['hsDefTack'], $_POST['hsDefInt'], $_POST['hsDefPBU'], $_POST['hsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$hgamelogs = selectHunterStats();
$htotals = selectHunterTotalStats();
include "view-hunter-stats.php";
Include "view-footer.php";
?>
