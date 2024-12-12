<?php
function selectHunterStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GLID, GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs, GLDefTack, GLDefInt, GLDefPBU FROM GameLog WHERE GLHeismanID=1");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertHunterStats($hsDate, $hsOpp, $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRushTDs, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs, GLDefTack, GLDefInt, GLDefPBU) VALUES (1,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiiiiiiiiii", $hsDate, $hsOpp, $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRushTDs, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateHunterStats($hsRushAtt, $hsRushYds, $hsRushAvg, $hsRushTDs, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU, $hsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE GameLog SET GLRushAtt=?, GLRushYds=?, GLRushAvg=?, GLRushTDs=?, GLRec=?, GLRecYds=?, GLRecAvg=?, GLRecTDs=?, GLDefTack=?, GLDefInt=?, GLDefPBU=? WHERE GLID=?");
        $stmt->bind_param("iiiiiiiiiiii", $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRushTDs, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU, $hsGLID); 
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
        $stmt = $conn->prepare("DELETE FROM GameLog WHERE GLID=?");
        $stmt->bind_param("i",$hsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectHunterTotalStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SUM(GLRushAtt) AS TotalHRushAtt, SUM(GLRushYds) AS TotalHRushYds, ROUND(SUM(GLRushYds)/SUM(GLRushAtt),1) AS TotalHRushAvg, SUM(GLRushTDs) AS TotalHRushTDs, SUM(GLRec) AS TotalHRec, SUM(GLRecYds) AS TotalHRecYds, ROUND(SUM(GLRecYds)/SUM(GLRec),1) AS TotalHRecAvg, SUM(GLRecTDs) AS TotalHRecTDs, SUM(GLDefTack) AS TotalHDefTack, SUM(GLDefInt) AS TotalHDefInt, SUM(GLDefPBU) AS TotalHDefPBU FROM GameLog WHERE GLHeismanID=1");
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
