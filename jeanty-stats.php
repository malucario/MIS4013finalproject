<?php
require_once("util-db.php");
require_once("model-jeanty-stats.php");
$pageTitle = "Ashton Jeanty Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertJeantyStats($_POST['jsDate'], $_POST['jsOpp'], $_POST['jsRushAtt'], $_POST['jsRushYds'], $_POST['jsRushAvg'], $_POST['jsRushTDs'], $_POST['jsRec'], $_POST['jsRecYds'], $_POST['jsRecAvg'], $_POST['jsRecTDs'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteJeantyStats($_POST['jsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateJeantyStats($_POST['jsRushAtt'], $_POST['jsRushYds'], $_POST['jsRushAvg'], $_POST['jsRushTDs'], $_POST['jsRec'], $_POST['jsRecYds'], $_POST['jsRecAvg'], $_POST['jsRecTDs'], $_POST['jsGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$jgamelogs = selectJeantyStats();
$jtotals = selectJeantyTotalStats();
include "view-jeanty-stats.php";
Include "view-footer.php";
?>
