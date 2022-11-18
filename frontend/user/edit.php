<?php
include "../header.php";

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM user WHERE id=$id");
while($row = mysqli_fetch_array($query)){
?>
<body>
<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="../../proses/user/edit.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" maxlength=50 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Telp/No.HP</label>
                            <input type="text" class="form-control" name="nohp" value="<?= $row['nohp'] ?>" maxlength=13 required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Hak_Akses</label>
                            <select name="hak_akses" id="" class="form-select" required>
                                <option value="Admin" <?php if($row['hak_akses'] == "Admin"){echo "selected";}; ?>>Admin</option>
                                <option value="Manager" <?php if($row['hak_akses'] == "Manager"){echo "selected";}; ?>>Manager</option>
                                <option value="User" <?php if($row['hak_akses'] == "User"){echo "selected";}; ?>>User</option>
                            </select>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- / Content -->
<?php
}
include "../footer.php";
?>