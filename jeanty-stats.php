<?php
require_once("util-db.php");
require_once("model-jeanty-stats.php");
$pageTitle = "Ashton Jeanty Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertJeantyStats($_POST['ajDate'], $_POST['ajOpp'], $_POST['ajRushAtt'], $_POST['ajRushYds'], $_POST['ajRushAvg'], $_POST['ajRushTDs'], $_POST['ajRec'], $_POST['ajRecYds'], $_POST['ajRecAvg'], $_POST['ajRecTDs'], $_POST['ajDefTack'], $_POST['ajDefInt'], $_POST['ajDefPBU'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteJeantyStats($_POST['ajGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateJeantyStats($_POST['ajRushAtt'], $_POST['ajRushYds'], $_POST['ajRushAvg'], $_POST['ajRushTDs'], $_POST['ajRec'], $_POST['ajRecYds'], $_POST['ajRecAvg'], $_POST['ajRecTDs'], $_POST['ajDefTack'], $_POST['ajDefInt'], $_POST['ajDefPBU'], $_POST['ajGLID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$hgamelogs = selectJeantyStats();
$htotals = selectJeantyTotalStats();
include "view-jeanty-stats.php";
Include "view-footer.php";
?>
