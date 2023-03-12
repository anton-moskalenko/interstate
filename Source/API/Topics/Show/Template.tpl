<style>
    #table-road
    {
        width: 100%;
        border-collapse: collapse;
    }
</style>

<table id="table-road">
    <?php foreach($collection as $entity): ?>
        <tr>
            <td><?php echo $entity->getTitle(); ?></td>
            <td style="text-align: right;">
                <a href="javascript:void(0)" onclick="API.Topics.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
                <a href="javascript:void(0)" onclick="API.Topics.remove('<?php echo $entity->getKey(); ?>');">Remove</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
