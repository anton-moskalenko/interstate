<style>
    .topic-block
    {
        border: gray 1px solid;
        margin-bottom: 5px;
        padding: 5px;
        border-radius: 5px;
    }
</style>

<?php foreach($collection as $entity): ?>
    <div class="topic-block">
        <h3><?php echo $entity->getTitle(); ?></h3>
        <hr/>
        <?php echo $entity->getUid(); ?> / <?php echo $entity->getTags(); ?>
        <hr/>
        <?php echo $entity->getProgram(); ?>
    </div>
<?php endforeach; ?>

