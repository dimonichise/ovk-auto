<aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Поиск'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Поиск'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Поиск</button>
                        </form>
                    </aside>

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