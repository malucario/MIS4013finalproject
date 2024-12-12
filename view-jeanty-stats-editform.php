<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editJeantyStatsModal<?php echo $jgamelog['GLID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editJeantyStatsModal<?php echo $jgamelog['GLID'];?>" tabindex="-1" aria-labelledby="editJeantyStatsModalLabel<?php echo $jgamelog['GLID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editJeantyStatsModalLabel<?php echo $jgamelog['GLID'];?>">Edit stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
           <div class="mb-3">
            <label for="jsRushAtt<?php echo $jgamelog['GLRushAtt'];?>" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="jsRushAtt<?php echo $jgamelog['GLRushAtt'];?>" name="jsRushAtt" value="<?php echo $jgamelog['GLRushAtt'];?>">
          </div> 
          <div class="mb-3">
            <label for="jsRushYds<?php echo $jgamelog['GLRushYds'];?>" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="jsRushYds<?php echo $jgamelog['GLRushYds'];?>" name="jsRushYds" value="<?php echo $jgamelog['GLRushYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="jsRushAvg<?php echo $jgamelog['GLRushAvg'];?>" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="jsRushAvg<?php echo $jgamelog['GLRushAvg'];?>" name="jsRushAvg" value="<?php echo $jgamelog['GLRushAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="jsRushTDs<?php echo $jgamelog['GLRushTDs'];?>" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="jsRushTDs<?php echo $jgamelog['GLRushTDs'];?>" name="jsRushTDs" value="<?php echo $jgamelog['GLRushTDs'];?>">
          </div>
          <div class="mb-3">
            <label for="jsRec<?php echo $jgamelog['GLRec'];?>" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="jsRec<?php echo $jgamelog['GLRec'];?>" name="jsRec" value="<?php echo $jgamelog['GLRec'];?>">
          </div> 
          <div class="mb-3">
            <label for="jsRecYds<?php echo $jgamelog['GLRecYds'];?>" class="form-label">Receiving Yards</label>
            <input type="number" class="form-control" id="jsRecYds<?php echo $jgamelog['GLRecYds'];?>" name="jsRecYds" value="<?php echo $jgamelog['GLRecYds'];?>">
          </div> 
          <div class="mb-3">
            <label for="jsRecAvg<?php echo $jgamelog['GLRecAvg'];?>" class="form-label">Average Yards per Catch</label>
            <input type="number" class="form-control" id="jsRecAvg<?php echo $jgamelog['GLRecAvg'];?>" name="jsRecAvg" value="<?php echo $jgamelog['GLRecAvg'];?>" step="0.1">
          </div>
           <div class="mb-3">
            <label for="jsRecTDs<?php echo $jgamelog['GLRecTDs'];?>" class="form-label">Receiving TDs</label>
            <input type="number" class="form-control" id="jsRecTDs<?php echo $jgamelog['GLRecTDs'];?>" name="jsRecTDs" value="<?php echo $jgamelog['GLRecTDs'];?>">
          </div>
          <input type="hidden" name="jsGLID" value="<?php echo $jgamelog['GLID'];?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
