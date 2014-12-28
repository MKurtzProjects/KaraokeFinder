<?php foreach ($events_info as $events_item): ?>

    <h2><?php echo $events_item['title'] ?></h2>
    <div class="main">
        <?php echo $events_item['description'] ?>
    </div>
    <p><a href="events/<?php echo $events_item['slug'] ?>">View article</a></p>

<?php endforeach ?>