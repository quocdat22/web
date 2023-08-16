<h1>DS lop</h1>

<a href="?action=create">Them lop</a>

<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <th>Sua</th>
        <th>Xoa</th>
    </tr>
    <?php foreach($arr as $r): ?>
        <tr>
            <td><?php echo '#'. $r->get_ma() ?></td>
            <td><?php echo $r->get_ho_ten()?></td>
            <td><a href="?action=edit&ma=<?php echo $r->get_ma() ?>">Sua</a></td>
            <td><a href="?action=delete&ma=<?php echo $r->get_ma() ?>">Xoa</a></td>
        </tr>

    <?php endforeach; ?>
</table>