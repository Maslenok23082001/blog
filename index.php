<?php
require_once "include/database.php";
require_once "app/header.php";
$result = $base->query("SELECT * FROM `categories_blog`");
$result_blog = $base->query("SELECT * FROM `blogs` ORDER BY `id` DESC");
$result_blog_cat = $base->query("SELECT * FROM `categories_blog`");
$comment_result = $base->query("SELECT * FROM `comments_blog` ORDER BY `id` DESC");

?>
    <div id="main_menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <?php
            $n=0;
                while($row = $result->fetch_assoc()){

                $arr1[$n]=$row['title'];
                $n++;
                echo "<li><a href='#'>".$row['title']."</a></li>";
            }
            ?>
        </ul>
    </div>
    <content>
        <div id="new_blogs">
            <h1>Мой блог</h1>
            <hr>
            <div id="blogs">

                <?php

                while($row = $result_blog->fetch_assoc()){
                    for ($i=0; $i < count($arr1); $i++) {

                        if ($row['category_id']==$i){

                                echo "<div class='blog' style='width:700px; margin-left:100px; background-color:#999999;'>
                                       <p class='tit'><a href='pages/article.php?".$row['id']."'>".$row['title']."</a></p>
                                      <p class='cat'><a href='#' style='color:red; font-size:14px; padding:1px 3px;'>".$arr1[$i]."</a></p>
                                      <div>".$row['text']."</div>
                                   </div>";
                         }
                    }
                }
                ?>

            </div>
            <div id="comments">

                <h3>Комментарии</h3>
                <?php while ($comment=$comment_result->fetch_assoc()): ?>
                <div class="comment" style="border-radius: 10px; margin-bottom: 3px;">
                    <p class="com_tit"><?=$comment['author']?></p>
                    <p><?=$comment['text']?></p>
                    <hr>
                </div>
                <?php endwhile;?>
            </div>
        </div>

    </content>



<?php
require_once "app/footer.php";
?>