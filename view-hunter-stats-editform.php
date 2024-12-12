<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editHunterStatsModal<?php echo $hgamelog['GLID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editHunterStatsModal<?php echo $hgamelog['GLID'];?>" tabindex="-1" aria-labelledby="editHunterStatsModalLabel<?php echo $hgamelog['GLID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editJeantyStatsModalLabel<?php echo $hgamelog['GLID'];?>">Edit stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
           <div class="mb-3">
            <label for="hsRushAtt<?php echo $hgamelog['GLRushAtt'];?>" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="hsRushAtt<?php echo $hgamelog['GLRushAtt'];?>" name="hsRushAtt" value="<?php echo $hgamelog['GLRushAtt'];?>">
          </div> 
          <div class="mb-3">
            <label for="hsRushYds<?php echo $hgamelog['GLRushYds'];?>" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="hsRushYds<?php echo $hgamelog['GLRushYds'];?>" name="hsRushYds" value="<?php echo $hgamelog['GLRushYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="hsRushAvg<?php echo $hgamelog['GLRushAvg'];?>" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="hsRushAvg<?php echo $hgamelog['GLRushAvg'];?>" name="hsRushAvg" value="<?php echo $hgamelog['GLRushAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="hsRushTDs<?php echo $hgamelog['GLRushTDs'];?>" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="hsRushTDs<?php echo $hgamelog['GLRushTDs'];?>" name="hsRushTDs" value="<?php echo $hgamelog['GLRushTDs'];?>">
          </div>
          <div class="mb-3">
            <label for="hsRec<?php echo $hgamelog['GLRec'];?>" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="hsRec<?php echo $hgamelog['GLRec'];?>" name="hsRec" value="<?php echo $hgamelog['GLRec'];?>">
          </div> 
          <div class="mb-3">
            <label for="hsRecYds<?php echo $hgamelog['GLRecYds'];?>" class="form-label">Receiving Yards</label>
            <input type="number" class="form-control" id="hsRecYds<?php echo $hgamelog['GLRecYds'];?>" name="hsRecYds" value="<?php echo $hgamelog['GLRecYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="hsRecAvg<?php echo $hgamelog['GLRecAvg'];?>" class="form-label">Average Yards per Catch</label>
            <input type="number" class="form-control" id="hsRecAvg<?php echo $hgamelog['GLRecAvg'];?>" name="hsRecAvg" value="<?php echo $hgamelog['GLRecAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="hsRecTDs<?php echo $hgamelog['GLRecTDs'];?>" class="form-label">Receiving TDs</label>
            <input type="number" class="form-control" id="hsRecTDs<?php echo $hgamelog['GLRecTDs'];?>" name="hsRecTDs" value="<?php echo $hgamelog['GLRecTDs'];?>">
          </div>
          <div class="mb-3">
            <label for="hsDefTack<?php echo $hgamelog['GLDefTack'];?>" class="form-label">Tackles</label>
            <input type="number" class="form-control" id="hsDefTack<?php echo $hgamelog['GLDefTack'];?>" name="hsDefTack" value="<?php echo $hgamelog['GLDefTack'];?>">
          </div> 
          <div class="mb-3">
            <label for="hsDefInt<?php echo $hgamelog['GLDefInt'];?>" class="form-label">Interceptions</label>
            <input type="number" class="form-control" id="hsDefInt<?php echo $hgamelog['GLDefInt'];?>" name="hsDefInt" value="<?php echo $hgamelog['GLDefInt'];?>">
          </div>
           <div class="mb-3">
            <label for="hsDefPBU<?php echo $hgamelog['GLDefPBU'];?>" class="form-label">Pass Breakups</label>
            <input type="number" class="form-control" id="hsDefPBU<?php echo $hgamelog['GLDefPBU'];?>" name="hsDefPBU" value="<?php echo $hgamelog['GLDefPBU'];?>">
          </div>
          <input type="hidden" name="hsGLID" value="<?php echo $hgamelog['GLID'];?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
