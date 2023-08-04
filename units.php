<?php
require_once 'config/database.php';
require_once 'config/functions.php';
$Pu = [];

if (isset($_POST['submit'])) {

    $select = filter_input(INPUT_POST, 'select', FILTER_SANITIZE_SPECIAL_CHARS);
    function getPuFromLga()
    {
        global $conn;
        global $Pu;
        global $select;

        $sql = "SELECT * FROM `polling_unit` WHERE `lga_id` = '$select'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $Pu =  mysqli_fetch_all($result, MYSQLI_ASSOC) ?? null;
        } else {

            die("connection error") . mysqli_connect_error($conn);
        }
    }

    getPuFromLga();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Units sum</title>
    <style>
    body {
        background: #ccc;
    }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h5 class="lead my-4 text-center">Select LGA to view PU total</h5>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <select class="form-select" aria-label="Default select example" name="select">
                        <option selected>Select LGA below</option>
                        <option value="1">Aniocha North</option>
                        <option value="2">Aniocha - South</option>
                        <option value="5">Ethiope East</option>
                        <option value="6">Ethiope West</option>
                        <option value="7">Ika North - East</option>
                        <option value="8">Ika - South</option>
                        <option value="9">Isoko North</option>
                        <option value="10">Isoko South</option>
                        <option value="11">Ndokwa East</option>
                        <option value="12">Ndokwa West</option>
                        <option value="13">Okpe</option>
                        <option value="14">Oshimili - North</option>
                        <option value="15">Oshimili - South</option>
                        <option value="16">Patani</option>
                        <option value="17">Sapele</option>
                        <option value="18">UduPatani</option>
                        <option value="19">Ughelli North</option>
                        <option value="20">Ughelli South</option>
                        <option value="21">Ukwuani</option>
                        <option value="22">Uvwie</option>
                        <option value="31">Bomadi</option>
                        <option value="32">Burutu</option>
                        <option value="33">Warri North</option>
                        <option value="34">Warri South</option>
                        <option value="35">Warri South West</option>
                    </select>
                    <input type="submit" value="submit" class="btn btn-primary mt-2" name="submit">
                </form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-10">
                <table class="table table-striped text-center px-3 rounded mb-5">
                    <thead class="rounded">
                        <tr class="p-3">
                            <th scope="col">#</th>
                            <th scope="col">LGA_ID</th>
                            <th scope="col">PU_name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($Pu as $item) : ?>
                        <tr class="p-3">
                            <td><?php echo $item['uniqueid']; ?></td>
                            <td><?php echo $item['lga_id']; ?></td>
                            <td><?php echo $item['polling_unit_name']; ?></td>
                            <td><a href="details.php?id=<?php echo $item['uniqueid']; ?>"
                                    class="btn btn-success">details</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>