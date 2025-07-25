<?php include('getbooks.php'); ?>
<?php $blockcount = 0; ?>

<div class="masonry">
<?php foreach($rss->channel->item as $item): ?>
    
<?php if (strlen($item->user_read_at)): ?>
<div class="block block--boek">
        
    <?php $blockcount++ ?>
    <a href="<?= $item->link ?>"><img class="block--img" src="<?= $item->book_large_image_url ?>" alt="Cover <?= $item->title ?> - <?= $item->author_name ?>"></a>
    
    <div class="block--body">
        <p><a href="<?= $item->link ?>"><?= $item->title ?></a> - <?= $item->author_name ?><br>
        <small><?= $item->book_published ?>
        <?php if($item->book->num_pages > 0): ?>
            &bull; <?= $item->book->num_pages ?> bladzijden
        <?php endif ?></small></p>

        <p>
        <?php if($item->user_shelves == 'currently-reading'): ?>
            <em><?= t('mirthe.mygoodreads.currently-reading') ?></em><br>

        <?php elseif($item->user_shelves == 'quit'): ?>
            <em><?= t('mirthe.mygoodreads.quit') ?></em><br>

        <?php elseif($item->user_shelves == 'want-to-continue'): ?>
            <em><?= t('mirthe.mygoodreads.want-to-continue') ?></em><br>

        <?php else: ?>

            <div class="nowrap">
                <?php $r = floatval($item->user_rating);
                for ($i = 1; $i <= $r; $i++) {
                    echo ' <i class="fa-solid fa-circle"></i>';
                }
                for ($j = $i; $j < 6; $j++) {
                    echo ' <i class="fa-regular fa-circle fffa-inactive"></i>';
                } ?>
            </div>

        <?php endif ?>
        </p>

        <p class="review"><?= $item->user_review ?></p>
    </div>

</div>
<?php endif ?>

<?php if ($blockcount == option('mirthe.mygoodreads.numberofblocks')) {break;} ?>

<?php endforeach ?>
</div>
