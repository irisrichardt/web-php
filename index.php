<?php
    include_once("./templates/header.php");
?>
    <main>
        <div id="title-container">
            <h1>PHP Web</h1>
            <p>Site sobre programação web com PHP</p>
        </div>
        <div id="post-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?=$BASE_URL?>img/<?=$post['img']?>" alt="<?=$post['title']?>" id="img_<?=$post['id']?>">
                    <h2 class="post-title">
                        <a href="<?=$BASE_URL?>post.php?id=<?=$post['id']?>"?><?=$post['title']?></a>
                    </h2>
                    <p class="post-description"><?=$post['description']?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#"><?=$tag?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("./templates/footer.php");
?>