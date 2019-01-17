<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>
            </th>
        </tr>
        <?php foreach($products as $item) :?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->getCate()->cate_name ?></td>
                <td>
                    <a href="<?= $baseUrl . "product-remove?id=" . $item->id?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>