<?php
    include_once("./templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>
    <main id="post-container-unique">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis harum accusamus. Quod dolore magnam pariatur nesciunt obcaecati doloribus dolor unde, veniam neque saepe repellendus laudantium ex ullam, cum maxime.
            Omnis sequi placeat nemo ut repellendus, quaerat possimus ipsum qui natus? Dolores voluptates inventore ipsum maxime obcaecati quod dicta officia suscipit accusantium? Quo, optio. Ex ab nulla sit esse voluptates?
            Eum quos perspiciatis illo non itaque inventore accusantium, labore nemo rem, voluptate esse nostrum? Quod hic facilis tenetur incidunt qui. A facere sapiente unde sequi fugit. Esse sunt sint autem.
            Velit ipsa a voluptatem deserunt quasi architecto, culpa fugit fugiat repudiandae officiis eligendi nesciunt nisi praesentium porro ex atque, laborum ratione minima. Illo corrupti ab labore exercitationem eius porro quo.
            Quae, quaerat eos dolore iste sit veniam quia expedita architecto quasi perferendis a soluta animi? Totam repudiandae dolores illo distinctio maiores. Ab unde provident nesciunt, atque voluptatibus ducimus sapiente ipsa.
            </p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis harum accusamus. Quod dolore magnam pariatur nesciunt obcaecati doloribus dolor unde, veniam neque saepe repellendus laudantium ex ullam, cum maxime.
            Omnis sequi placeat nemo ut repellendus, quaerat possimus ipsum qui natus? Dolores voluptates inventore ipsum maxime obcaecati quod dicta officia suscipit accusantium? Quo, optio. Ex ab nulla sit esse voluptates?
            </p>
        </div>
        <aside class="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?=$category?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("./templates/footer.php"); 
?>