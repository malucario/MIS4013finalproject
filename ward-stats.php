<?php
require_once("util-db.php");
require_once("model-ward-stats.php");
$pageTitle = "Cam Ward Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertWardStats($_POST['wsDate'], $_POST['wsOpp'], $_POST['wsPassComps'], $_POST['wsPassAtt'], $_POST['wsCompPct'], $_POST['wsPassYds'], $_POST['wsPassTDs'], $_POST['wsPassInts'], $_POST['wsPassRate'], $_POST['wsRushAtt'], $_POST['wsRushYds'], $_POST['wsRushAvg'], $_POST['wsRushTDs'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteWardStats($_POST['wsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateWardStats($_POST['wsPassComps'], $_POST['wsPassAtt'], $_POST['wsCompPct'], $_POST['wsPassYds'], $_POST['wsPassTDs'], $_POST['wsPassInts'], $_POST['wsPassRate'], $_POST['wsRushAtt'], $_POST['wsRushYds'], $_POST['wsRushAvg'], $_POST['wsRushTDs'], $_POST['wsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$wgamelogs = selectWardStats();
$wtotals = selectWardTotalStats();
include "view-ward-stats.php";
Include "view-footer.php";
?>
