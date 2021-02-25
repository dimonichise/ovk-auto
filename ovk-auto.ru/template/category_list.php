<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Категории</h4>
    <ul class="list cat-list">

        <!-- Список категорий -->
        <?php 
            $categories = get_category();
            foreach ($categories as $category): ?>
                <li>
                    <a href="<?php echo $category['url'] ?>" class="d-flex">
                        <p><?php echo $category['categories']; ?></p>
                        <p></p>
                    </a>
                </li>
        <?php endforeach; ?>
        <!-- Конец списка котегорий -->


    </ul>
</aside>