<?php
function selectHunterStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs, GLDefTack, GLDefInt, GLDefPBU FROM GameLog WHERE GLHeismanID=1");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

//Working here!!!
function insertHunterStats($hsHID, $hsDate, $hsOpp, $, ) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLPassComps, GLPassAtt, GLCompPct, GLPassYds, GLPassTDs, GLPassInts, GLPassRate, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs, GLDefTack, GLDefInt, GLDefPBU) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("iiiidd", $stID, $stPID, $stPA, $stAB, $stOPS, $stEV); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateHunterStats($stPA, $stAB, $stOPS, $stEV, $hsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Stats SET PA=?, AB=?, OPS=?, ExitVelo=? WHERE StatsID=?");
        $stmt->bind_param("iiddi", $stPA, $stAB, $stOPS, $stEV, $stID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteHunterStats($hsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Stats WHERE GLID=?");
        $stmt->bind_param("i",$hsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
