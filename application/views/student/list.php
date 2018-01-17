<div class="row">
    <table class="table table-striped data-table">
        <thead>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th class="text-right">
                    <a class="btn btn-sm btn-success ajax-modal" data-href="student/form" data-toggle="modal" data-target="#myModal" href="javascript::"><i class="fa fa-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $key => $v): ?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $v->name ?></td>
                    <td><?php echo $v->fathers_name ?></td>
                    <td><?php echo $v->mothers_name ?></td>
                    <td class="text-right">
                        <a class="btn btn-sm btn-primary ajax-modal" href="javascript::" data-href="student/edit/<?php echo $v->id ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-sm btn-danger btn-delete" href="javascript::" data-href="student/delete/<?php echo $v->id ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
