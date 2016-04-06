<?php
if($_GET['id']!="") {
    //Обработка данных формы. Замена HTML тегов на их сущности
    $id=$_GET['id'];

    delComment($id);
    header('Location: /test_comments/');

}
function delComment($id)
{
    $db = mysql_connect("localhost", "root", "");
    mysql_select_db("test");
    mysql_query('SET NAMES CP1251');
    $query = "DELETE FROM `comments` WHERE parentId=".$id;
    $result = mysql_query($query);
//    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
//        $delId = $row['id'];
//        $query1 = "DELETE * FROM 'comments' WHERE 'id'=$delId";
//    }
    $query = "DELETE FROM `comments` WHERE id=".$id;
    $result = mysql_query($query);
    mysql_close($db);
    return $result;
}

?>