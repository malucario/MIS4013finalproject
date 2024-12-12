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

function insertHunterStats($hsDate, $hsOpp, $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO GameLog (GLHeismanID, GLDate, GLOpponent, GLRushAtt, GLRushYds, GLRushAvg, GLRushTDs, GLRec, GLRecYds, GLRecAvg, GLRecTDs, GLDefTack, GLDefInt, GLDefPBU) VALUES (1,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiiiiiiiiii", $hsDate, $hsOpp, $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU); 
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateHunterStats($hsRushAtt, $hsRushYds, $hsRushAvg, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU, $hsGLID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE GameLog SET GLRushAtt=?, GLRushYds=?, GLRushAvg=?, GLRushTDs=?, GLRec=?, GLRecYds=?, GLRecAvg=?, GLRecTDs=?, GLDefTack=?, GLDefInt=?, GLDefPBU==? WHERE GLID=?");
        $stmt->bind_param("iiiiiiiiiii", $hsRushAtt, $hsRushYds, $hsRushAvg, $hsRec, $hsRecYds, $hsRecAvg, $hsRecTDs, $hsDefTack, $hsDefInt, $hsDefPBU, $hsGLID); 
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
