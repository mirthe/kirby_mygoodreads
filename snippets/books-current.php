<?php include('getcurrentbooks.php'); ?>

<div class="masonry">
<?php $counter = 0;
foreach($rss->channel->item as $item):

    if ($counter == $limit) {break;} ?>

    <div class="block block--boek">
        <a href="https://www.goodreads.com/search?q=<?= $item->isbn ?>"
            title="<?= $item->author_name ?> - <?= $item->title ?>">
            <img class="block--img" width="300" height="450"
                src="<?= $item->book_large_image_url ?>" alt="">
        </a>
    </div>

<?php $counter++;
    endforeach ?>
</div>
