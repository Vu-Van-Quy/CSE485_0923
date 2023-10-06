
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quán lý bênh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= DOMAIN."/controller/LopController.php"?>">Bác Sĩ</a>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center text-success text-uppercase my-3">Danh Sách Bệnh Nhân</h3>
    </div>

    <a href="./view/add.php" class="btn btn-success m-3">Thêm Bệnh Nhân</a>
    <table class="table m-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Bênh Nhân</th>
                <th scope="col">Ngày Khám</th>
                <th scope="col">Triệu Chứng</th>
                <th scope="col">id Bác Sĩ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

            </tr>
            <?php
                foreach($bns as $bn){
            ?>
            <tr>
                <th scope="row"><?= $bn->getId(); ?></th>
                <td><?= $bn->gettenBenhNhan(); ?></td>
                <td><?= $bn->getngayKham(); ?></td>
                <td><?= $bn->gettrieuChung(); ?></td>
                <td><?= $bn->getidBacsi(); ?></td>
                <td><a href="./view/edit.php?id=<?=$bn->getId()?>"><i class="bi bi-pencil-square"></i></a></td>
                <td>
                    <a href=""  data-bs-toggle="modal" data-bs-target="#a<?= $bn->getId() ?>"><i class="bi bi-trash3"></i></a>
                    
                    <div class="modal fade" id="a<?=$bn->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa bệnh nhân</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn chắc chắn xóa bệnh nhân id: <?= $bn->getId()  ?>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <a href="<?= DOMAIN .'/controller/deleteController.php?action=delete&id='.$bn->getId() ?>" class="btn btn-success">OK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </td>
            </tr>
            <?php
                }
            ?>
        </thead>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>