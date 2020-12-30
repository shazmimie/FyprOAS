<?php include 'header.php'; ?>
<?php CheckRole(COORDINATOR) ?>
<?php

if (isset($_GET['U_id']) && isset($_GET['a'])) {
    $U_id = $_GET["U_id"];
    $approve = $_GET["a"];
    if ($approve == 0 or $approve == 1) {
        $strSQL = "UPDATE application SET A_status=$approve WHERE U_id=$U_id";
        $result = mysqli_query($link, $strSQL);
    }
}
$query = "SELECT * FROM application WHERE Role = '" . STUDENT . "'" or die(mysqli_connect_error());
$result = mysqli_query($link, $query);

?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Approve Student Request</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                   
                <tfoot>
                    <tr>
                        <div><th> Name</th>
                        <th>Id</th>
                        <th>SV Name</th>
                          <th>FYP Title</th>
                        <th></th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php while ($result && $row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row["U_name"] ?></td>
                            <td><?php echo $row["U_id"] ?></td>
                            <td><?php echo $row["L_name"] ?></td>
                            <td><?php echo $row["A_title"] ?></td>
                            <td>
                                <?php if (isset($row["A_status"]) && (int)$row["A_status"] === 0) { ?>
                                    <button class="btn btn-primary" onclick="window.location.href = 'approvestudent.php?id=<?php echo $row["U_id"] ?>&a=1';">Approve</button>
                                <?php
                                } elseif ((int)$row["A_status"] === 1) { ?>
                                    <button class="btn btn-warning" onclick="window.location.href = 'approvestudent.php?id=<?php echo $row["U_id"] ?>&a=0';">Reject</button>

                                <?php } else { ?>
                                    <button class="btn btn-primary" onclick="window.location.href = 'approvestudent.php?id=<?php echo $row["U_id"] ?>&a=1';">Approve</button>
                                    <button class="btn btn-warning" onclick="window.location.href = 'approvestudent.php?id=<?php echo $row["U_id"] ?>&a=0';">Reject</button>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<?php include '../footer.php'; ?>