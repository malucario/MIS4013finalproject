<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editGabrielStatsModal<?php echo $ggamelog['GLID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editGabrielStatsModal<?php echo $ggamelog['GLID'];?>" tabindex="-1" aria-labelledby="editGabrielStatsModalLabel<?php echo $ggamelog['GLID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editGabrielStatsModalLabel<?php echo $ggamelog['GLID'];?>">Edit stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="gsPassComps<?php echo $ggamelog['GLPassComps'];?>" class="form-label">Passing Completions</label>
            <input type="number" class="form-control" id="gsPass<?php echo $ggamelog['GLPassComps'];?>" name="gsPassComps" value="<?php echo $ggamelog['GLPass'];?>">
          </div> 
          <div class="mb-3">
            <label for="gsPassYds<?php echo $ggamelog['GLPassYds'];?>" class="form-label">Passing Attempts</label>
            <input type="number" class="form-control" id="gsPassYds<?php echo $ggamelog['GLPassYds'];?>" name="gsPassYds" value="<?php echo $ggamelog['GLPassYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="gsCompPct<?php echo $ggamelog['GLCompPct'];?>" class="form-label">Completion %</label>
            <input type="number" class="form-control" id="gsCompPct<?php echo $ggamelog['GLCompPct'];?>" name="gsCompPct" value="<?php echo $ggamelog['GLCompPct'];?>" step="0.1">
          </div>
          <div class="mb-3">
            <label for="gsPassYds<?php echo $ggamelog['GLPassYds'];?>" class="form-label">Passing Yards</label>
            <input type="number" class="form-control" id="gsPassYds<?php echo $ggamelog['GLPassYds'];?>" name="gsPassYds" value="<?php echo $ggamelog['GLPassYds'];?>">
          </div> 
           <div class="mb-3">
            <label for="gsPassTDs<?php echo $ggamelog['GLPassTDs'];?>" class="form-label">Passing TDs</label>
            <input type="number" class="form-control" id="gsPassTDs<?php echo $ggamelog['GLPassTDs'];?>" name="gsPassTDs" value="<?php echo $ggamelog['GLPassTDs'];?>">
          </div>
          <div class="mb-3">
            <label for="gsPassInts<?php echo $ggamelog['GLPassInts'];?>" class="form-label">Passing Interceptions</label>
            <input type="number" class="form-control" id="gsPassInts<?php echo $ggamelog['GLPassInts'];?>" name="gsPassInts" value="<?php echo $ggamelog['GLPassInts'];?>">
          </div>
          <div class="mb-3">
            <label for="gsPassRate<?php echo $ggamelog['GLPassRate'];?>" class="form-label">Passer Rating</label>
            <input type="number" class="form-control" id="gsPassRate<?php echo $ggamelog['GLPassRate'];?>" name="gsPassRate" value="<?php echo $ggamelog['GLPassRate'];?>" step="0.1">
          </div>
          <div class="mb-3">
            <label for="gsRushAtt<?php echo $ggamelog['GLRushAtt'];?>" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="gsRushAtt<?php echo $ggamelog['GLRushAtt'];?>" name="gsRushAtt" value="<?php echo $ggamelog['GLRushAtt'];?>">
          </div> 
          <div class="mb-3">
            <label for="gsRushYds<?php echo $ggamelog['GLRushYds'];?>" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="gsRushYds<?php echo $ggamelog['GLRushYds'];?>" name="gsRushYds" value="<?php echo $ggamelog['GLRushYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="gsRushAvg<?php echo $ggamelog['GLRushAvg'];?>" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="gsRushAvg<?php echo $ggamelog['GLRushAvg'];?>" name="gsRushAvg" value="<?php echo $ggamelog['GLRushAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="gsRushTDs<?php echo $ggamelog['GLRushTDs'];?>" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="gsRushTDs<?php echo $ggamelog['GLRushTDs'];?>" name="gsRushTDs" value="<?php echo $ggamelog['GLRushTDs'];?>">
          </div>
          <input type="hidden" name="gsGLID" value="<?php echo $ggamelog['GLID'];?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
