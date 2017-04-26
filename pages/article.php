<?php
require_once "../include/database.php";
require_once "../app/header.php";


$result = $base->query("SELECT * FROM `blogs` WHERE `id`='".$_GET['id_article']."'");

?>
    <div id="main_menu">
        <ul>
            <li><a href="/">Главная</a></li>
        </ul>
    </div>
    <content>
        <div id="new_blogs">
            <?php while ($row=$result->fetch_assoc()): ?>
            <h1><?=$row['title']?></h1>
            <hr>


                    <p class='tit'></p>
                    <p class='cat'><a href='#' style='color:red; font-size:14px; padding:1px 3px;'><?=$_GET['cat']?></a></p>
                    <div><?=$row['text']?></div>

            <?php
            endwhile;?>
            <div id="comments">

                <h3>Комментарии</h3>
                <?php
                $result_b = $base->query("SELECT * FROM `blogs` WHERE `id`='".$_GET['id_article']."'");
                while($row=$result_b->fetch_assoc()){
                    if()
                    $comment_result = $base->query("SELECT * FROM `comments_blog` WHERE `post_id`='".$row['id']."'");

                    while ($comment=$comment_result->fetch_assoc()){

                        echo "
                            <div class='comment'>
                                <p class='com_tit'>".$comment['author']."</p>
                                <p>".$comment['text']."</p>
                            </div>
                        ";
                    }
                    }


               ?>
            </div>
        </div>

    </content>



<?php
require_once "../app/footer.php";
?>