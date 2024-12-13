<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newWardStatsModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newWardStatsModal" tabindex="-1" aria-labelledby="newWardStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newWardStatsModalLabel">New stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="wsDate" class="form-label">Date (YYYY-MM-DD)</label>
            <input type="text" class="form-control" id="wsDate" name="wsDate">
          </div>
           <div class="mb-3">
            <label for="wsOpp" class="form-label">Opponent</label>
            <input type="text" class="form-control" id="wsOpp" name="wsOpp">
          </div>
          <div class="mb-3">
            <label for="wsPassComps" class="form-label">Passing Completions</label>
            <input type="number" class="form-control" id="wsPassComps" name="wsPassComps">
          </div> 
          <div class="mb-3">
            <label for="wsPassAtt" class="form-label">Passing Attempts</label>
            <input type="number" class="form-control" id="wsPassAtt" name="wsPassAtt">
          </div>
          <div class="mb-3">
            <label for="wsCompPct" class="form-label">Completion %</label>
            <input type="number" class="form-control" id="wsCompPct" name="wsCompPct" step="0.1">
          </div>
          <div class="mb-3">
            <label for="wsPassYds" class="form-label">Passing Yards</label>
            <input type="number" class="form-control" id="wsPassYds" name="wsPassYds">
          </div>
          <div class="mb-3">
            <label for="wsPassTDs" class="form-label">Passing TDs</label>
            <input type="number" class="form-control" id="wsPassTDs" name="wsPassTDs">
          </div>
          <div class="mb-3">
            <label for="wsPassInts" class="form-label">Passing Interceptions</label>
            <input type="number" class="form-control" id="wsPassInts" name="wsPassInts">
          </div>
          <div class="mb-3">
            <label for="wsPassRate" class="form-label">Passer Rating</label>
            <input type="number" class="form-control" id="wsPassRate" name="wsPassRate" step="0.1">
          </div>
          <div class="mb-3">
            <label for="wsRushAtt" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="wsRushAtt" name="wsRushAtt">
          </div> 
          <div class="mb-3">
            <label for="wsRushYds" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="wsRushYds" name="wsRushYds">
          </div>
          <div class="mb-3">
            <label for="wsRushAvg" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="wsRushAvg" name="wsRushAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="wsRushTDs" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="wsRushTDs" name="wsRushTDs">
          </div>
          <div class="mb-3">
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
