<?php
require_once 'config/database.php';
require_once 'config/functions.php';

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    getPuDetails();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Details</title>
    <style>
        body {
            background: #ccc;
        }

        p {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

            <h4 class="text-success fs-5 text-center my-5">Result details for
                <?php echo $data[6]; ?> </h4>
            <div class="col-md-10 mt-4">
                <table class="table text-center px-3 rounded">
                    <thead class="rounded">
                        <tr class="p-3">
                            <th scope="col">#</th>
                            <th scope="col">PU_ID</th>
                            <th scope="col">WARD_ID</th>
                            <th scope="col">LGA_ID</th>
                            <th scope="col">UW_ID</th>
                            <th scope="col">PU_NUM</th>
                            <th scope="col">PU_NAME</th>
                            <th scope="col">PU_DESCRIPTION</th>
                            <th scope="col">LAT</th>
                            <th scope="col">LONG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="p-3 text-center">
                            <td>
                                <p><?php echo $data[0]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[1]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[2]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[3]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[4]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[5]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[6]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[7]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[8]; ?></p>
                            </td>
                            <td>
                                <p><?php echo $data[9]; ?></p>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>