<div class="row">
  <div class="col">
    <h1><strong>Cam Ward Stats</strong></h1>
  </div>
  <div class="col-auto">
<?php
  Include "view-ward-stats-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <h4>Game Log</h4>
      <p>If you notice anything off with out lows, please update/correct them.</p>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Opponent</th>
        <th>Comp</th>
        <th>PassAtt</th>
        <th>CompPct</th>
        <th>PassYds</th>
        <th>PassTDs</th>
        <th>PassInt</th>
        <th>RushRate</th>
        <th>RushAtt</th>
        <th>RushYds</th>
        <th>RushAvg</th>
        <th>RushTD</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($wgamelog=$wgamelogs->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $wgamelog['GLID']; ?></td>
    <td><?php echo $wgamelog['GLDate']; ?></td>
    <td><?php echo $wgamelog['GLOpponent']; ?></td>
    <td><?php echo $wgamelog['GLPassComps']; ?></td>
    <td><?php echo $wgamelog['GLPassAtt']; ?></td>
    <td><?php echo $wgamelog['GLCompPct']; ?></td>
    <td><?php echo $wgamelog['GLPassYds']; ?></td>
    <td><?php echo $wgamelog['GLPassTDs']; ?></td>
    <td><?php echo $wgamelog['GLPassInts']; ?></td>
    <td><?php echo $wgamelog['GLPassRate']; ?></td>
    <td><?php echo $wgamelog['GLRushAtt']; ?></td>
    <td><?php echo $wgamelog['GLRushYds']; ?></td>
    <td><?php echo $wgamelog['GLRushAvg']; ?></td>
    <td><?php echo $wgamelog['GLRushTDs']; ?></td>
    <td>
<?php
Include "view-ward-stats-editform.php";
?>
    </td>
    <td>
      <form method="post" action="">
        <input type="hidden" name="wsGLID" value="<?php echo $wgamelog['GLID']; ?>">
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
        <th>Comp</th>
        <th>PassAtt</th>
        <th>CompPct</th>
        <th>PassYds</th>
        <th>PassTDs</th>
        <th>PassInt</th>
        <th>RushRate</th>
        <th>RushAtt</th>
        <th>RushYds</th>
        <th>RushAvg</th>
        <th>RushTD</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($wtotal=$wtotals->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $wtotal['TotalGPassComps']; ?></td>
    <td><?php echo $wtotal['TotalGPassAtt']; ?></td>
    <td><?php echo $wtotal['TotalGCompPct']; ?></td>
    <td><?php echo $wtotal['TotalGPassYds']; ?></td>
    <td><?php echo $wtotal['TotalGPassTDs']; ?></td>
    <td><?php echo $wtotal['TotalGPassInts']; ?></td>
    <td><?php echo $wtotal['TotalGPassRate']; ?></td>
    <td><?php echo $wtotal['TotalGRushAtt']; ?></td>
    <td><?php echo $wtotal['TotalGRushYds']; ?></td>
    <td><?php echo $wtotal['TotalGRushAvg']; ?></td>
    <td><?php echo $wtotal['TotalGRushTDs']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
