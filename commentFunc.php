<?php
function addComment($parentId, $user, $email, $message, $host, $url)
{
    $db = mysql_connect("localhost", "root", "");
    mysql_select_db("test");
    mysql_query('SET NAMES CP1251');
    
    $query = "	INSERT INTO `comments`
				VALUES (NULL,'{$parentId}','{$user}','{$email}','{$message}','{$host}','{$url}',NOW())";
    $result = mysql_query($query);
    mysql_close($db);
    return $result;
}



function getComments($commentId, $host, $url)
{
    $db = mysql_connect("localhost", "root", "");
    mysql_select_db("test");
    mysql_query('SET NAMES CP1251');

    $host = str_replace("www.", "", mysql_real_escape_string($host));
    $url = mysql_real_escape_string($url);

    $query = " and (";
    for ($i = 0; $i < count($commentId); $i++) {
        $commentId[$i] = intval($commentId[$i]);
        if ($i == 0) {
            $query .= " `parentId`='{$commentId[$i]}' ";
        } else {
            $query .= " or `parentId`='{$commentId[$i]}' ";
        }
    }
    $query .= " )";

    $query = "Select * 	From 	`comments`
			Where 	`host` LIKE '%{$host}' and 
					`url`='{$url}'
					$query
			Order by `date` DESC";

    $result = mysql_query($query);
    $result_row = array();
    $ii = -1;
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
        $ii++;
        $result_row[$ii]['id'] = $row['id'];
        $result_row[$ii]['parentId'] = $row['parentId'];
        $result_row[$ii]['user'] = $row['user'];
        $result_row[$ii]['email'] = $row['email'];
        $result_row[$ii]['message'] = $row['message'];
        $result_row[$ii]['date'] = $row['date'];
    }

    mysql_close($db);
    return $result_row;
}

?>