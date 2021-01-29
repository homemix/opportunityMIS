<!DOCTYPE html>
<html>

<head>
    <title>Opportunity MIS |Edit Opportunity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
<div>
    <?= $this->include('common/nav_menu') ?>
</div>
<div class="container mt-5">
    <form method="post" id="update_user" name="update_user"
          action="<?= site_url('/update_opportunity') ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
        </div>

        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" class="form-control" value="<?php echo $user_obj['amount']; ?>">
        </div>
        <div class="form-group">
            <label>Stage</label>
            <select name="stage" class="form-control" aria-label="Default select example">
                <option selected>Select Proposal Stage</option>
                <option value="Discovery">Discovery</option>
                <option value="Funding">Funding</option>
                <option value="Creating">Creating</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Save Data</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#update_user").length > 0) {
        $("#update_user").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    maxlength: 60,
                    email: true,
                },
            },
            messages: {
                name: {
                    required: "Name is required.",
                },
                email: {
                    required: "Email is required.",
                    email: "It does not seem to be a valid email.",
                    maxlength: "The email should be or equal to 60 chars.",
                },
            },
        })
    }
</script>
</body>

</html>
