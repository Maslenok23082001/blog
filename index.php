<?php
require_once "app/header.php";
?>
    <div id="main_menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/">Главная</a></li>
            <li><a href="/">Главная</a></li>
        </ul>
    </div>
    <content>
        <div id="new_blogs">
            <h1>Мой блог</h1>
            <div id="blogs">
                <div class="blog">
                    <p><a href="#">название поста</a></p>
                    <p><a href="#">категория</a></p>
                    <div>текст поста</div>
                </div>
            </div>
            <div id="comments">
                <h3>Комментарии</h3>
                <div class="comment">
                    <p>автор комментария</p>
                    <p>текст комментария</p>
                </div>
            </div>
        </div>

    </content>



<?php
require_once "app/footer.php";
?>