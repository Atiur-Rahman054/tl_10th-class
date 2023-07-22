<?php
    include_once "inc/db.php";
    include_once "inc/header.php";
?>


<section class="mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2>All User Page</h2>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>created_at</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($datas as $data):?>
                    <tr>
                        <td><?= $data['id']?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td>
                            <?php if($data['image']){ ?>
                            <img src="profile/<?= $data['image'] ?>" alt="" width="60">
                            <?php
                                }else{
                                    echo "--";
                                }
                            ?>
                        </td>
                        <td>
                            <span class="badge bg-<?= $data['status'] == 1 ? "success" : "warning"?>">
                                <?= $data['status'] == 1 ? "Active" : "Deactive"?>
                            </span>
                        </td>
                        <td><?= $data['created_at'] ?></td>
                        <td>
                            <a href="single_user.php?id=<?= $data['id']?>" class="btn btn-sm btn-success">View</a>
                            <a href="user_edit.php?id=<?= $data['id']?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="delete_user.php?id=<?= $data['id']?>" class="btn btn-sm btn-danger">Delete</a>                       
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </section>

<?php
    include_once "inc/footer.php";
?>