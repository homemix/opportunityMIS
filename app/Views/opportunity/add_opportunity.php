<!DOCTYPE html>
<html>

<head>
    <title>Opportunity MIS |Create Opportunity</title>
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
    <form method="post" id="add_opportunity" name="add_opportunity"
          action="<?= site_url('/submit_form_opportunity') ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Amount</label>
            <input type="text" name="amount" class="form-control">
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
            <button type="submit" class="btn btn-primary btn-block">Add Data</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#add_opportunity").length > 0) {
        $("#add_opportunity").validate({
            rules: {
                name: {
                    required: true,
                },
                Amount: {
                    required: true,
                },
                stage: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Name is required.",
                },
                Amount: {
                    required: "Amount is required.",
                },
                stage: {
                    required: "Stage is required",
                },
            },
        })
    }
</script>
</body>

</html>