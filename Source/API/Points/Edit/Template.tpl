<div id="point-edit">
    <a href="javascript:void(0)" onclick="Interstate.Points.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <hr/>
    <table style="width: 100%;">
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr><td>Title</td><td><input type="text" name="title" value="<?php echo $entity->getTitle(); ?>"/></td></tr>
        <tr><td>Data</td><td><input type="text" name="data" value="<?php echo $entity->getData(); ?>"/></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Interstate.Points.save('<?php echo $entity->getKey(); ?>');">Save</a>
</div>