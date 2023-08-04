<?php
require_once 'config/database.php';
require_once 'config/functions.php';

getPuResults();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>First Trial</title>
    <style>
        body {
            background: #ccc;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="fw-bold text-dark fs-3  text-center my-5">Polling Units Result details</h3>
            <div class="col-md-10">
                <table class="table table-striped text-center px-3 rounded mb-5">
                    <thead class="rounded">
                        <tr class="p-3">
                            <th scope="col">#</th>
                            <th scope="col">PU_num</th>
                            <th scope="col">PU_name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) : ?>
                            <tr class="p-3">
                                <td><?php echo $item['uniqueid']; ?></td>
                                <td><?php echo $item['polling_unit_number']; ?></td>
                                <td><?php echo $item['polling_unit_name']; ?></td>
                                <td><a href="details.php?id=<?php echo $item['uniqueid']; ?>" class="btn btn-success">details</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</body>

</html>