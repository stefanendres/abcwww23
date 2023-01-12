<?php $globals = $site->children()->findBy('intendedTemplate', 'globals'); ?>
<footer>
    <nav>
        <?php foreach ($globals->legal_menu()->toPages() as $menu_item): ?>
            <a class="menu-link<?php e($menu_item->isOpen(), ' active'); ?>" href="<?= $menu_item->url() ?>">
                <?= $menu_item->title() ?>
            </a>
        <?php endforeach ?>
    </nav>
</footer>