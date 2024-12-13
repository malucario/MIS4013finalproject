<?php
function selectWardStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GLID, GLDate, GLOpponent, GLPassComps, GLPassAtt, GLCompPct, GLPassYds, GLPassTDs, GLPassInts, GLPassRate, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs FROM GameLog WHERE GLHeismanID=4");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertWardStats($wsDate, $wsOpp, $wsPassComps, $wsPassAtt, $wsCompPct, $wsPassYds, $wsPassTDs, $wsPassInts, $wsPassRate, $wsRushAtt, $wsRushYds, $wsRushAvg, $wsRushTDs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLPassComps, GLPassAtt, GLCompPct, GLPassYds, GLPassTDs, GLPassInts, GLPassRate, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs) VALUES (4,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiiiiiiiiii", $wsDate, $wsOpp, $wsPassComps, $wsPassAtt, $wsCompPct, $wsPassYds, $wsPassTDs, $wsPassInts, $wsPassRate, $wsRushAtt, $wsRushYds, $wsRushAvg, $wsRushTDs); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateWardStats($wsPassComps, $wsPassAtt, $wsCompPct, $wsPassYds, $wsPassTDs, $wsPassInts, $wsPassRate, $wsRushAtt, $wsRushYds, $wsRushAvg, $wsRushTDs, $wsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE GameLog SET GLPassComps=?, GLPassAtt=?, GLCompPct=?, GLCompPct=?, GLPassTDs=?, GLPassInts=?, GLPassRate=?, GLRushAtt=?, GLRushYds=?, GLRushAvg=?, GLRushTDs=? WHERE GLID=?");
        $stmt->bind_param("iiiiiiiiiiii", $wsPassComps, $wsPassAtt, $wsPassYds, $wsCompPct, $wsPassTDs, $wsPassInts, $wsPassRate, $wsRushAtt, $wsRushYds, $wsRushAvg, $wsRushTDs, $wsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteWardStats($wsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM GameLog WHERE GLID=?");
        $stmt->bind_param("i",$wsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectWardTotalStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SUM(GLPassComps) AS TotalWPassComps, SUM(GLPassAtt) AS TotalWPassAtt, ROUND((SUM(GLPassComps)/SUM(GLPassAtt))*100) AS TotalWCompPct, SUM(GLPassYds) AS TotalWPassYds, SUM(GLPassTDs) AS TotalWPassTDs, SUM(GLPassInts) AS TotalWPassInts, ROUND(AVG(GLPassRate),1) AS TotalWPassRate, SUM(GLRushAtt) AS TotalWRushAtt, SUM(GLRushYds) AS TotalWRushYds, ROUND(SUM(GLRushYds)/SUM(GLRushAtt),1) AS TotalWRushAvg, SUM(GLRushTDs) AS TotalWRushTDs FROM GameLog WHERE GLHeismanID=4");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
