<div id="point-show">
    <h1><?php echo $entity->getTitle(); ?></h1>
    <?php echo $entity->getKey(); ?> - <?php echo $entity->getTags(); ?>
    <hr/>
    <?php echo $entity->getData(); ?>
    <hr/>
    <?php echo $entity->getProgramParse(); ?>
</div>