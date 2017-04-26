<?php
require_once "../include/database.php";
require_once "../app/header.php";
require_once "../include/arr.php";

$result = $base->query("SELECT * FROM `blogs` WHERE `category_id`='".$_GET['id']."'");

?>
    <div id="main_menu">
        <ul>
            <li><a href="/">Главная</a></li>
        </ul>
    </div>
    <content>
        <h1><?=$arr1[$_GET['id']]?></h1>
        <div id="new_blogs">
            <?php while ($row=$result->fetch_assoc()): ?>
                <h1><a href="article.php?id_article=<?=$row['id']?>&cat=<?=$row['category_id']?>"><?=$row['title']?></a></h1>
                <hr>

                <div><?=$row['text']?></div>
                <br>

            <?php
            endwhile;?>

        </div>

    </content>



<?php
require_once "../app/footer.php";
?>