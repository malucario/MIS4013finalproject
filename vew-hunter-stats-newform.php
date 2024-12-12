<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newHunterStatsModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newHunterStatsModal" tabindex="-1" aria-labelledby="newHunterStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newHunterStatsModalLabel">New stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="hsDate" class="form-label">Date (YYYY-MM-DD)</label>
            <input type="text" class="form-control" id="hsDate" name="hsDate">
          </div>
           <div class="mb-3">
            <label for="hsOpp" class="form-label">Opponent</label>
            <input type="text" class="form-control" id="hsOpp" name="hsOPpp">
          </div> 
          <div class="mb-3">
            <label for="hsRushAtt" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="hsRushAtt" name="hsRushAtt">
          </div> 
          <div class="mb-3">
            <label for="hsRushYds" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="hsRushYds" name="hsRushYds">
          </div>
          <div class="mb-3">
            <label for="hsRushAvg" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="hsRushAvg" name="hsRushAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="hsRushTDs" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="hsRushTDs" name="hsRushTDs">
          </div>
          <div class="mb-3">
            <label for="hsRec" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="hsRec" name="hsRec">
          </div> 
          <div class="mb-3">
            <label for="hsRecYds" class="form-label">Receiving Yards</label>
            <input type="number" class="form-control" id="hsRecYds" name="hsRecYds">
          </div>
          <div class="mb-3">
            <label for="hsRecAvg" class="form-label">Average Yards per Catch</label>
            <input type="number" class="form-control" id="hsRecAvg" name="hsRecAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="hsRecTDs" class="form-label">Receiving TDs</label>
            <input type="number" class="form-control" id="hsRecTDs" name="hsRecTDs">
          </div>
          <div class="mb-3">
            <label for="hsDefTack" class="form-label">Tackles</label>
            <input type="number" class="form-control" id="hsDefTack" name="hsDefTack">
          </div>
          <div class="mb-3">
            <label for="hsDefInt" class="form-label">Interceptions</label>
            <input type="number" class="form-control" id="hsDefInt" name="hsDefInt">
          </div> 
          <div class="mb-3">
            <label for="hsDefPBU" class="form-label">Pass Breakups</label>
            <input type="number" class="form-control" id="hsDefPBU" name="hdDefPBU">
          </div>
          <div class="mb-3">
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
