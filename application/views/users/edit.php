<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Edit Admin</h6>
    </div>
    <div class="card-body">

    <form action="<?= base_url('users/update/' . $user->id) ?>" method="post">
        <label class="form-label" >Username:</label>
        <input class="form-control" type="text" name="username" value="<?= $user->username ?>" required><br>

        <label class="form-label" >Password:</label>
        <input class="form-control" type="password" name="password" value="<?= $user->password ?>" required><br>

        <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
    </form>

    </div>
</div>
</div>