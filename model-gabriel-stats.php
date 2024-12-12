<?php
function selectGabrielStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GLID, GLDate, GLOpponent, GLPassComps, GLPassAtt, GLCompPct, GLPassYds, GLPassTDs, GLPassInts, GLPassRate, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs FROM GameLog WHERE GLHeismanID=3");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGabrielStats($gsDate, $gsOpp, $gsPassComps, $gsPassAtt, $gsCompPct, $gsPassYds, $gsPassTDs, $gsPassInt, $gsPassRate, $gsRushAtt, $gsRushYds, $gsRushAvg, $gsRushTDs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLPassComps, GLPassAtt, GLCompPct, GLPassYds, GLPassTDs, GLPassInts, GLPassRate, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, ) VALUES (3,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiiiiiiiiii", $gsDate, $gsOpp, $gsPassComps, $gsPassAtt, $gsCompPct, $gsPassYds, $gsPassTDs, $gsPassInt, $gsPassRate, $gsRushAtt, $gsRushYds, $gsRushAvg, $gsRushTDs); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGabrielStats($gsPassComps, $gsPassAtt, $gsCompPct, $gsPassYds, $gsPassTDs, $gsPassInt, $gsPassRate, $gsRushAtt, $gsRushYds, $gsRushAvg, $gsRushTDs, $gsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE GameLog SET GLPassComps=?, GLPassAtt=?, GLCompPct=?, GLCompPct, GLPassTDs=?, GLPassInts=?, GLPassRate=?, GLRushAtt=?, GLRushYds=?, GLRushAvg=?, GLRushTDs=? WHERE GLID=?");
        $stmt->bind_param("iiiiiiiiiiii", $gsPassComps, $gsPassAtt, $gsPassYds, $gsCompPct, $gsPassTDs, $gsPassInt, $gsPassRate, $gsRushAtt, $gsRushYds, $gsRushAvg, $gsRushTDs, $gsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGabrielStats($gsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM GameLog WHERE GLID=?");
        $stmt->bind_param("i",$gsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGabrielTotalStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SUM(GLPassComps) AS TotalGPassComps, SUM(GLPassAtt) AS TotalGPassAtt, ROUND((SUM(GLPassComps)/SUM(GLPassAtt))*100) AS TotalGCompPct, SUM(GLPassYds) AS TotalGPassYds, SUM(GLPassTDs) AS TotalGPassTDs, SUM(GLPassInts) AS TotalGPassInt, AVG(GLPassRate) AS TotalGPassRate, SUM(GLRushAtt) AS TotalGRushAtt, SUM(GLRushYds) AS TotalGRushYds, ROUND(SUM(GLRushYds)/SUM(GLRushAtt),1) AS TotalGRushAvg, SUM(GLRushTDs) AS TotalGRushTDs FROM GameLog WHERE GLHeismanID=3");
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
