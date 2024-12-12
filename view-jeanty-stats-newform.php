<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newJeantyStatsModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newJeantyStatsModal" tabindex="-1" aria-labelledby="newJeantyStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newJeantyStatsModalLabel">New stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="jsDate" class="form-label">Date (YYYY-MM-DD)</label>
            <input type="text" class="form-control" id="jsDate" name="jsDate">
          </div>
           <div class="mb-3">
            <label for="jsOpp" class="form-label">Opponent</label>
            <input type="text" class="form-control" id="jsOpp" name="jsOpp">
          </div> 
          <div class="mb-3">
            <label for="jsRushAtt" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="jsRushAtt" name="jsRushAtt">
          </div> 
          <div class="mb-3">
            <label for="jsRushYds" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="jsRushYds" name="jsRushYds">
          </div>
          <div class="mb-3">
            <label for="jsRushAvg" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="jsRushAvg" name="jsRushAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="jsRushTDs" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="jsRushTDs" name="jsRushTDs">
          </div>
          <div class="mb-3">
            <label for="jsRec" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="jsRec" name="jsRec">
          </div> 
          <div class="mb-3">
            <label for="jsRecYds" class="form-label">Receiving Yards</label>
            <input type="number" class="form-control" id="jsRecYds" name="jsRecYds">
          </div>
          <div class="mb-3">
            <label for="jsRecAvg" class="form-label">Average Yards per Catch</label>
            <input type="number" class="form-control" id="jsRecAvg" name="jsRecAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="jsRecTDs" class="form-label">Receiving TDs</label>
            <input type="number" class="form-control" id="jsRecTDs" name="jsRecTDs">
          </div>
          <div class="mb-3">
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
