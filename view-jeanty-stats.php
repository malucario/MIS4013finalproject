<div class="row">
  <div class="col">
    <h1><strong>Ashton Jeanty Stats</strong></h1>
  </div>
  <div class="col-auto">
<?php
  Include "view-jeanty-stats-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <h4>Game Log</h4>
      <p>If you notice anything off with out logs, please update/correct them.</p>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Opponent</th>
        <th>RushAtt</th>
        <th>RushYds</th>
        <th>RushAvg</th>
        <th>RushTD</th>
        <th>Rec</th>
        <th>RecYds</th>
        <th>RecAvg</th>
        <th>RecTD</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($jgamelog=$jgamelogs->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $jgamelog['GLID']; ?></td>
    <td><?php echo $jgamelog['GLDate']; ?></td>
    <td><?php echo $jgamelog['GLOpponent']; ?></td>
    <td><?php echo $jgamelog['GLRushAtt']; ?></td>
    <td><?php echo $jgamelog['GLRushYds']; ?></td>
    <td><?php echo $jgamelog['GLRushAvg']; ?></td>
    <td><?php echo $jgamelog['GLRushTDs']; ?></td>
    <td><?php echo $jgamelog['GLRec']; ?></td>
    <td><?php echo $jgamelog['GLRecYds']; ?></td>
    <td><?php echo $jgamelog['GLRecAvg']; ?></td>
    <td><?php echo $jgamelog['GLRecTDs']; ?></td>
    <td>
<?php
Include "view-jeanty-stats-editform.php";
?>
    </td>
    <td>
      <form method="post" action="">
        <input type="hidden" name="ajGLID" value="<?php echo $jgamelog['GLID']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete these stats?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg>
        </button>
      </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>


<div class="table-responsive">
  <table class="table">
    <thead>
      <h4>Total Stats</h4>
      <tr>
        <th>RushAtt</th>
        <th>RushYds</th>
        <th>RushAvg</th>
        <th>RushTD</th>
        <th>Rec</th>
        <th>RecYds</th>
        <th>RecAvg</th>
        <th>RecTD</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($jtotal=$jtotals->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $jtotal['TotalJRushAtt']; ?></td>
    <td><?php echo $jtotal['TotalJRushYds']; ?></td>
    <td><?php echo $jtotal['TotalJRushAvg']; ?></td>
    <td><?php echo $jtotal['TotalJRushTDs']; ?></td>
    <td><?php echo $jtotal['TotalJRec']; ?></td>
    <td><?php echo $jtotal['TotalJRecYds']; ?></td>
    <td><?php echo $jtotal['TotalJRecAvg']; ?></td>
    <td><?php echo $jtotal['TotalJRecTDs']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
