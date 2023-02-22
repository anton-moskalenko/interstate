<style>
    .edit-ta
    {
        width: 90%;
        height: 200px;
    }
</style>
<div id="point-edit">
    <a href="javascript:void(0)" onclick="Interstate.Points.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <hr/>
    <table style="width: 100%;">
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr><td>Title</td><td><input type="text" name="title" value="<?php echo $entity->getTitle(); ?>"/></td></tr>
        <tr><td>Tags</td><td><input type="text" name="tags" value="<?php echo $entity->getTags(); ?>"/></td></tr>
        <tr><td>Program</td><td><textarea class="edit-ta" name="program"><?php echo $entity->getProgram(); ?></textarea></td></tr>
        <tr><td>Data</td><td><textarea class="edit-ta" name="data"><?php echo $entity->getData(); ?></textarea></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Interstate.Points.save('<?php echo $entity->getKey(); ?>');">Save</a>
</div>