<?php
// Include headers, if needed (optional).
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>12-Team Bracket</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin: 0;
      background: #f4f4f4;
    }

    .bracket {
      display: grid;
      grid-template-columns: repeat(5, 200px);
      grid-gap: 20px;
      padding: 20px;
      overflow-x: auto;
    }

    .match {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 80px;
      background: #fff;
      border: 2px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
    }

    .match.winner {
      background: #8bc34a;
      color: #fff;
      font-weight: bold;
    }

    .column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    h1 {
      margin-top: 20px;
      color: #333;
    }
  </style>
</head>
<body>
  <h1>Interactive 12-Team Bracket</h1>
  <div class="bracket" id="bracket">
    <!-- Bracket structure will be generated dynamically -->
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const bracketContainer = document.getElementById('bracket');

      // Define initial teams
      const teams = [
        "Oregon", "Georgia", "Boise St.", "Arizona St.",
        "Texas", "Penn St.", "Notre Dame", "Ohio St.",
        "Tennessee", "Indiana", "SMU", "Clemson"
      ];

      // Structure the bracket rounds
      const rounds = [
        { matches: [null, null, null, null] }, // Round 1: 4 byes
        { matches: [null, null, null, null] }, // Quarterfinals
        { matches: [null, null] },             // Semifinals
        { matches: [null] }                    // Finals
      ];

      // Helper: Create a match element
      function createMatch(team1, team2, round, index) {
        const match = document.createElement('div');
        match.classList.add('match');
        match.dataset.round = round;
        match.dataset.index = index;

        if (team1 && team2) {
          match.innerHTML = `<div>${team1}</div><div>${team2}</div>`;
          match.addEventListener('click', () => {
            const winner = prompt(`Who won this match?\n1: ${team1}\n2: ${team2}`);
            if (winner === '1' || winner === '2') {
              const winningTeam = winner === '1' ? team1 : team2;
              match.textContent = winningTeam;
              match.classList.add('winner');
              advanceTeam(round, index, winningTeam);
            }
          });
        } else {
          match.textContent = "TBD";
        }

        return match;
      }

      // Advance the winning team
      function advanceTeam(round, index, team) {
        if (rounds[round + 1]) {
          const nextMatchIndex = Math.floor(index / 2);
          rounds[round + 1].matches[nextMatchIndex] = team;
          renderBracket();
        }
      }

      // Render the bracket
      function renderBracket() {
        bracketContainer.innerHTML = '';
        rounds.forEach((round, roundIndex) => {
          const column = document.createElement('div');
          column.classList.add('column');
          round.matches.forEach((match, matchIndex) => {
            const team1 = match || (teams[matchIndex * 2] || "TBD");
            const team2 = match || (teams[matchIndex * 2 + 1] || "TBD");
            const matchElement = createMatch(team1, team2, roundIndex, matchIndex);
            column.appendChild(matchElement);
          });
          bracketContainer.appendChild(column);
        });
      }

      // Initialize the bracket
      renderBracket();
    });
  </script>
</body>
</html>
<?php
// Include footers, if needed (optional).
?>
