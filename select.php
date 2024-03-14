<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Examples</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
</head>
<body>

<div class="container mt-5">
    <?php
    $options = [
        "OPTION1",
        "OPTION2",
        "THIRDOPTION",
        "FOURTH OPTION",
        "THIS IS OPTION FIVE",
        "THIS IS OPTION 6",
    ];
    ?>

    <section>
        <h1>Select2</h1>
        <p>Enhanced Dropdowns</p>
        <select class="form-control select2" multiple="multiple">
            <?php foreach ($options as $option): ?>
                <option><?= $option ?></option>
            <?php endforeach; ?>
        </select>
    </section>

    <section class="mt-4">
        <h1>Chosen</h1>
        <p>Intuitive Select Boxes</p>
        <select class="form-control chosen-select" multiple>
            <?php foreach ($options as $option): ?>
                <option><?= $option ?></option>
            <?php endforeach; ?>
        </select>
    </section>
<br><hr><br>
<ul>
    <li>Both solutions address the issue.</li>
    <li>Merging parts of words no longer works (e.g., "thir opt" does not display "THIRD OPTION").</li>
    <li>Clicking outside before inserting the next tag is not necessary anymore.</li>
    <li>However, neither of them solves the problem of sorting already selected tags alphabetically.</li>
</ul>


</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<script>
    $('.select2').select2();
    $('.chosen-select').chosen();
</script>

</body>
</html>

