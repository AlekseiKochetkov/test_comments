<?php

$commetMAX = 5;//Ограничение по вложенности
$counter = -1;//Счетчик вложенности
$commentId = array();//id комментариев. надо для бд
$commentId[0] = 0;
?>
<div id="Comment">
    <?php
    WHILE ($counter <= $commetMAX) {
        $counter++;
        $commentInfo = array();
        $commentInfo = getComments($commentId, $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI']);

        if (count($commentInfo) == 0) {
            break;
        }

        $commentId = array();
        for ($i = 0; $i < count($commentInfo); $i++) {

            $commentId[$i] = $commentInfo[$i]['id'];    //запоминаем id родителей
            ?>

            <div id="CommentView_Parent<?php print $commentInfo[$i]['id']; ?>">
                <div style="padding-left:<?php print (25 * $counter) ?>px;">
                    <div class="Message">
                        <?php
                        print $commentInfo[$i]['message'];
                        ?>
                    </div>
                    <div class="User">
                        <div class="Name">
                            <?php
                            print "<b>{$commentInfo[$i]['user']}</b><br />{$commentInfo[$i]['date']}";
                            ?>
                        </div>
                        <div>
                            <br/>
                            <a href="#" title="Ответить на комментарий"
                               onclick="Comment_View('<?php print $commentInfo[$i]['id']; ?>');return false;">Ответить</a>
                            <a href="commentDel.php?id=<?=$commentInfo[$i]['id']?>">Удалить</a>
                        </div>
                    </div>

                    <div id="CommentView_Form<?php print $commentInfo[$i]['id']; ?>"
                         style="padding-top:5px;clear:left;"></div>

                </div>

                <div id="CommentView_Child<?php print $commentInfo[$i]['id']; ?>"></div>
            </div>
            <?php
            //JAVA SCRIPT функция переносит вложенный комментарий его родителю
            if ($counter <> 0) {
                print "<script type=\"text/javascript\">Comment_MoveChild(\"{$commentInfo[$i]['parentId']}\",\"{$commentInfo[$i]['id']}\");</script>";
            }
        }
    }
    ?>
    <br/>
    <div class="">
        <div style="text-align: center;"><a href="#" onclick="Comment_View('0');return false;">Добавить
                комментарий</a></div>
    </div>
    <!--Контейнер для вставки в него формы добавления комментариев при клике на ссылку "Добавить комментарий"-->
    <div id="CommentView_Form0"></div>
</div>
