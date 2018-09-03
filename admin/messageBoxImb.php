<?php 
    require "../api/dbConnect.php";
    $result = $conn->query("SELECT * FROM `prox_request`");
?>
<div>
    <h1>Message Box <span class="badge badge-success"> <?php echo $result->num_rows?> </span></h1>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">email</th>
            <th scope="col">message</th>
            <th scope="col">time</th>
            <th scope="col"></th>
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
                        <td>
                            <button class='btn btn-danger btn-sm' onclick='deleteMessage(".$row['id'].")'>
                                <i class=\"far fa-trash-alt\"></i>
                            </button>
                        </td>
                        </tr>";
                        $i += 1;
                    }
                }
            ?>
        </tbody>
    </table>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script>
        function deleteMessage(messageId) {
            $.get("../api/removeMessage.php", {
                id : messageId
            },(data, status) => {
                document.location.reload(true)
            })
        }
    </script>
</div>