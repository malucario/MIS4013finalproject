<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGabrielStatsModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newGabrielStatsModal" tabindex="-1" aria-labelledby="newGabrielStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newGabrielStatsModalLabel">New stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="gsDate" class="form-label">Date (YYYY-MM-DD)</label>
            <input type="text" class="form-control" id="gsDate" name="gsDate">
          </div>
           <div class="mb-3">
            <label for="gsOpp" class="form-label">Opponent</label>
            <input type="text" class="form-control" id="gsOpp" name="gsOpp">
          </div>
          <div class="mb-3">
            <label for="gsPassComp" class="form-label">Passing Completions</label>
            <input type="number" class="form-control" id="gsPassComp" name="gsPassComp">
          </div> 
          <div class="mb-3">
            <label for="gsPassAtt" class="form-label">Passing Attempts</label>
            <input type="number" class="form-control" id="gsPassAtt" name="gsPassAtt">
          </div>
          <div class="mb-3">
            <label for="gsCompPct" class="form-label">Completion %</label>
            <input type="number" class="form-control" id="gsCompPct" name="gsCompPct" step="0.1">
          </div>
          <div class="mb-3">
            <label for="gsPassYds" class="form-label">Passing Yards</label>
            <input type="number" class="form-control" id="gsPassYds" name="gsPassYds">
          </div>
          <div class="mb-3">
            <label for="gsPassInt" class="form-label">Passing Interceptions</label>
            <input type="number" class="form-control" id="gsPassInt" name="gsPassInt">
          </div>
          <div class="mb-3">
            <label for="gsPassRate" class="form-label">Passer Rating</label>
            <input type="number" class="form-control" id="gsPassRate" name="gsPassRate" step="0.1">
          </div>
          <div class="mb-3">
            <label for="gsRushAtt" class="form-label">Rush Attempts</label>
            <input type="number" class="form-control" id="gsRushAtt" name="gsRushAtt">
          </div> 
          <div class="mb-3">
            <label for="gsRushYds" class="form-label">Rush Yards</label>
            <input type="number" class="form-control" id="gsRushYds" name="gsRushYds">
          </div>
          <div class="mb-3">
            <label for="gsRushAvg" class="form-label">Average Yards per Carry</label>
            <input type="number" class="form-control" id="gsRushAvg" name="gsRushAvg" step="0.1">
          </div>
          <div class="mb-3">
            <label for="gsRushTDs" class="form-label">Rush TDs</label>
            <input type="number" class="form-control" id="gsRushTDs" name="gsRushTDs">
          </div>
          <div class="mb-3">
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
