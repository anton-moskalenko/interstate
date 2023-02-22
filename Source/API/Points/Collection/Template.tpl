<style>
    .table-tickets td
    {
        /*width: 12%;*/
    }
</style>
<hr/>
<a href="javascript:void(0)" onclick="Interstate.Points.create();">Create new point</a>
<table style="width: 100%;" class="table-tickets">
    <tr>
        <th>Title</th>
        <th>Tags</th>
        <th style="text-align: right;">Actions</th>
    </tr>
    <?php foreach($collection as $entity): ?>
    <tr>
        <td><?php echo $entity->getTitle(); ?></td>
        <td><?php echo $entity->getTags(); ?></td>
        <td style="text-align: right;">
            <a href="javascript:void(0)" onclick="Interstate.Points.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
            <a href="javascript:void(0)" onclick="Interstate.Points.remove('<?php echo $entity->getKey(); ?>');">Remove</a> &diams;
            <a href="javascript:void(0)" onclick="Interstate.Points.show('<?php echo $entity->getKey(); ?>');">Show</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
