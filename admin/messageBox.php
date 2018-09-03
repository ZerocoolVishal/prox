<!DOCTYPE html>
<html lang="en">

<?php include "../components/head.php"?>

<?php 
    require "../api/dbConnect.php";
    $result = $conn->query("SELECT * FROM `prox_request`");
?>
<body>
    <div class="py-5 bg-light">
        <div class="container">
            <h1>Message Box <span class="badge badge-success"> <?php echo $result->num_rows?> </span></h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">email</th>
                    <th scope="col">message</th>
                    <th scope="col">time</th>
                    </tr>
                </thead>
                <tbody id="message_list">
                    <?php 
                        if($result->num_rows > 0) {
                            $i = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <th scope=\"row\">$i</th>
                                <td>".$row['email']."</td>
                                <td>".$row['message']."</td>
                                <td>".$row['timestamp']."</td>
                                </tr>";
                                $i += 1;
                            }
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>