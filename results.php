<?php
require_once 'config/database.php';
require_once 'config/functions.php';

if (isset($_POST['submit'])) {
    $pu_id = filter_input(INPUT_POST, 'pu_id', FILTER_SANITIZE_SPECIAL_CHARS);
    $p_abb = filter_input(INPUT_POST, 'p_abb', FILTER_SANITIZE_SPECIAL_CHARS);
    $p_score = filter_input(INPUT_POST, 'p_score', FILTER_SANITIZE_SPECIAL_CHARS);
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $user_ip = filter_input(INPUT_POST, 'user_ip', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO `my_results`(`polling_unit_uniqueid`, `party_abbreviation`, `party_score`, `entered_by_user`, `user_ip_address`) VALUES ('$pu_id','$p_abb',' $p_score','$user','$user_ip ')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $msg =  "record successfully sent";
    } else {
        die("connection error") . mysqli_connect_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Results</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-dark fs-5 text-center my-5">Add New PU Record </h4>
            <h6 class="text-success fs-5 text-center my-5"><?php echo $msg ?? null ?> </h6>
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="pu_id" class="form-label">polling_unit_uniqueid</label>
                        <input type="text" class="form-control" id="pu_id" aria-describedby="pu_id" name="pu_id">
                    </div>
                    <div class="mb-3">
                        <label for="p_abb" class="form-label">party_abbreviation</label>
                        <input type="text" class="form-control" id="p_abb" aria-describedby="p_abb" name="p_abb">
                    </div>
                    <div class="mb-3">
                        <label for="p_score" class="form-label">party_score</label>
                        <input type="number" class="form-control" id="p_score" aria-describedby="p_score"
                            name="p_score">
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">entered_by_user</label>
                        <input type="text" class="form-control" id="user" aria-describedby="user" name="user">
                    </div>
                    <div class="mb-3">
                        <label for="user_ip" class="form-label">user_ip_address</label>
                        <input type="text" class="form-control" id="user_ip" aria-describedby="user_ip" name="user_ip">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>