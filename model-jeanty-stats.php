<?php
function selectJeantyStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GLID, GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs FROM GameLog WHERE GLHeismanID=2");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertJeantyStats($jsDate, $jsOpp, $jsRushAtt, $jsRushYds, $jsRushAvg, $jsRushTDs, $jsRec, $jsRecYds, $jsRecAvg, $jsRecTDs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs) VALUES (2,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiiiiiii", $jsDate, $jsOpp, $jsRushAtt, $jsRushYds, $jsRushAvg, $jsRushTDs, $jsRec, $jsRecYds, $jsRecAvg, $jsRecTDs); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateJeantyStats($jsRushAtt, $jsRushYds, $jsRushAvg, $jsRushTDs, $jsRec, $jsRecYds, $jsRecAvg, $jsRecTDs, $jsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE GameLog SET GLRushAtt=?, GLRushYds=?, GLRushAvg=?, GLRushTDs=?, GLRec=?, GLRecYds=?, GLRecAvg=?, GLRecTDs=? WHERE GLID=?");
        $stmt->bind_param("iiiiiiiii", $jsRushAtt, $jsRushYds, $jsRushAvg, $jsRushTDs, $jsRec, $jsRecYds, $jsRecAvg, $jsRecTDs, $jsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteJeantyStats($jsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM GameLog WHERE GLID=?");
        $stmt->bind_param("i",$jsGLID); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectJeantyTotalStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SUM(GLRushAtt) AS TotalJRushAtt, SUM(GLRushYds) AS TotalJRushYds, ROUND(SUM(GLRushYds)/SUM(GLRushAtt),1) AS TotalJRushAvg, SUM(GLRushTDs) AS TotalJRushTDs, SUM(GLRec) AS TotalJRec, SUM(GLRecYds) AS TotalJRecYds, ROUND(SUM(GLRecYds)/SUM(GLRec),1) AS TotalJRecAvg, SUM(GLRecTDs) AS TotalJRecTDs FROM GameLog WHERE GLHeismanID=2");
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
