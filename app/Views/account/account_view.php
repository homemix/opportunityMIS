<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Opportunity MIS | Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div>
    <h2 style="text-align: center">Opportunity MIS | All Accounts</h2>
</div>
<div>
    <?= $this->include('common/nav_menu') ?>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/account_form') ?>" class="btn btn-success mb-2">Add Account</a>
    </div>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
    <div class="mt-3">
        <table class="table table-bordered" id="accounts-list">
            <thead>
            <tr>
                <th>Account Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($accounts): ?>
                <?php foreach($accounts as $account): ?>
                    <tr>
                        <td><?php echo $account['id']; ?></td>
                        <td><?php echo $account['name']; ?></td>
                        <td><?php echo $account['address']; ?></td>
                        <td><?php echo $account['phone']; ?></td>
                        <td>
                            <a href="<?php echo base_url('edit_account/'.$account['id']);?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo base_url('delete_account/'.$account['id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
        $('#accounts-list').DataTable();
    } );
</script>
</body>
</html>
