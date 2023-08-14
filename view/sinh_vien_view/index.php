<?php include 'view/menu.php'; ?>
<h1>Danh sach sinh vien</h1>

<a href="?action=create&controller=sinh_vien">Them sinh_vien</a>
<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <th>Lop</th>
        <th>Sua</th>
        <th>Xoa</th>
    </tr>
    <?php foreach ($result as $r) {?>
        <tr>
            <td><?php echo $r['ma']?></td>
            <td><?php echo $r['ten']?></td>
            <td><?php echo $r['ten_lop']?></td>
            <td><a href="?action=edit&controller=sinh_vien&ma=<?php echo $r['ma']?>">Sua</a></td>
            <td><a href="?action=delete&controller=sinh_vien&ma=<?php echo $r['ma']?>">Xoa</a></td>

        </tr>
        
    <?php } ?>
</table>