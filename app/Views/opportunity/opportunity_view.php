<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Opportunity MIS | Opportunity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div>
    <h2 style="text-align: center">Opportunity MIS | All Opportunities</h2>
</div>
<div>
    <?= $this->include('common/nav_menu') ?>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/opportunity_form') ?>" class="btn btn-success mb-2">Add Opportunity</a>
    </div>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
    <div class="mt-3">
        <table class="table table-bordered" id="opportunity-list">
            <thead>
            <tr>
                <th>Account Id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Stage</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($opportunities): ?>
                <?php foreach($opportunities as $opportunity): ?>
                    <tr>
                        <td><?php echo $opportunity['id']; ?></td>
                        <td><?php echo $opportunity['name']; ?></td>
                        <td><?php echo $opportunity['amount']; ?></td>
                        <td><?php echo $opportunity['stage']; ?></td>
                        <td>
                            <a href="<?php echo base_url('edit_opportunity/'.$opportunity['id']);?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo base_url('delete_opportunity/'.$opportunity['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#opportunity-list').DataTable();
    } );
</script>
</body>
</html>
