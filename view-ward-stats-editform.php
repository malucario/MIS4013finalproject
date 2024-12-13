<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editWardStatsModal<?php echo $wgamelog['GLID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editWardStatsModal<?php echo $wgamelog['GLID'];?>" tabindex="-1" aria-labelledby="editWardStatsModalLabel<?php echo $wgamelog['GLID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editWardStatsModalLabel<?php echo $wgamelog['GLID'];?>">Edit stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="wsPassComps<?php echo $wgamelog['GLPassComps'];?>" class="form-label">Passing Completions</label>
            <input type="number" class="form-control" id="wsPassComps<?php echo $wgamelog['GLPassComps'];?>" name="wsPassComps" value="<?php echo $wgamelog['GLPassComps'];?>">
          </div> 
          <div class="mb-3">
            <label for="wsPassAtt<?php echo $wgamelog['GLPassAtt'];?>" class="form-label">Passing Attempts</label>
            <input type="number" class="form-control" id="wsPassAtt<?php echo $wgamelog['GLPassAtt'];?>" name="wsPassAtt" value="<?php echo $wgamelog['GLPassAtt'];?>">
          </div> 
          <div class="mb-3">
            <label for="wsCompPct<?php echo $wgamelog['GLCompPct'];?>" class="form-label">Completion %</label>
            <input type="number" class="form-control" id="wsCompPct<?php echo $wgamelog['GLCompPct'];?>" name="wsCompPct" value="<?php echo $wgamelog['GLCompPct'];?>" step="0.1">
          </div>
          <div class="mb-3">
            <label for="wsPassYds<?php echo $wgamelog['GLPassYds'];?>" class="form-label">Passing Yards</label>
            <input type="number" class="form-control" id="wsPassYds<?php echo $wgamelog['GLPassYds'];?>" name="wsPassYds" value="<?php echo $wgamelog['GLPassYds'];?>">
          </div> 
           <div class="mb-3">
            <label for="wsPassTDs<?php echo $wgamelog['GLPassTDs'];?>" class="form-label">Passing TDs</label>
            <input type="number" class="form-control" id="wsPassTDs<?php echo $wgamelog['GLPassTDs'];?>" name="wsPassTDs" value="<?php echo $wgamelog['GLPassTDs'];?>">
          </div>
          <div class="mb-3">
            <label for="wsPassInts<?php echo $wgamelog['GLPassInts'];?>" class="form-label">Passing Interceptions</label>
            <input type="number" class="form-control" id="wsPassInts<?php echo $wgamelog['GLPassInts'];?>" name="wsPassInts" value="<?php echo $wgamelog['GLPassInts'];?>">
          </div>
          <div class="mb-3">
            <label for="wsPassRate<?php echo $wgamelog['GLPassRate'];?>" class="form-label">Passer Rating</label>
            <input type="number" class="form-control" id="wsPassRate<?php echo $wgamelog['GLPassRate'];?>" name="wsPassRate" value="<?php echo $wgamelog['GLPassRate'];?>" step="0.1">
          </div>
          <div class="mb-3">
            <label for="wsRushAtt<?php echo $wgamelog['GLRushAtt'];?>" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="wsRushAtt<?php echo $wgamelog['GLRushAtt'];?>" name="wsRushAtt" value="<?php echo $wgamelog['GLRushAtt'];?>">
          </div> 
          <div class="mb-3">
            <label for="wsRushYds<?php echo $wgamelog['GLRushYds'];?>" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="wsRushYds<?php echo $wgamelog['GLRushYds'];?>" name="wsRushYds" value="<?php echo $wgamelog['GLRushYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="wsRushAvg<?php echo $wgamelog['GLRushAvg'];?>" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="wsRushAvg<?php echo $wgamelog['GLRushAvg'];?>" name="wsRushAvg" value="<?php echo $wgamelog['GLRushAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="wsRushTDs<?php echo $wgamelog['GLRushTDs'];?>" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="wsRushTDs<?php echo $wgamelog['GLRushTDs'];?>" name="wsRushTDs" value="<?php echo $wgamelog['GLRushTDs'];?>">
          </div>
          <input type="hidden" name="wsGLID" value="<?php echo $wgamelog['GLID'];?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
