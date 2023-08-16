<h1>DS sinh vien</h1>

<a href="?action=create&controller=sinhvien">Them sinhvien</a>

<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <th>Lop</th>
        <th>Sua</th>
        <th>Xoa</th>
    </tr>
    <?php foreach($arr as $r): ?>
        <tr>
            <td><?php echo '#'. $r->get_ma() ?></td>
            <td><?php echo $r->get_ho_ten()?></td>
            <td><?php echo $r->get_ten_lop()?></td>
            <td><a href="?action=edit&controller=sinhvien&ma=<?php echo $r->get_ma() ?>">Sua</a></td>
            <td><a href="?action=delete&controller=sinhvien&ma=<?php echo $r->get_ma() ?>">Xoa</a></td>
        </tr>

    <?php endforeach; ?>
</table>