<div class="pagination">
    <?php if($pagination->hasPages()): ?>
        <?php if(!$pagination->isFirstPage()) : ?>
            <a class="first" href="<?php echo $pagination->firstPageUrl(); ?>">&lsaquo;&lsaquo;</a>
        <?php endif; ?>
        
        <?php if($pagination->hasPrevPage()): ?>
            <a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&lsaquo;</a>
        <?php endif ?>

        <span class="current">
            <?= $pagination->page() . ' / ' . $pagination->pages(); ?>
        </span>

        <?php if($pagination->hasNextPage()): ?>
            <a class="next" href="<?php echo $pagination->nextPageURL() ?>">&rsaquo;</a>
        <?php endif ?>

        <?php if(!$pagination->isLastPage()) : ?>
            <a class="last" href="<?php echo $pagination->lastPageUrl(); ?>">&rsaquo;&rsaquo;</a>
        <?php endif; ?>
    <?php endif; ?>
</div>