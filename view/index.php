<h1>Danh sach SV</h1>
<a href="?action=create">Them sv</a>
<a href="?action=create">Test sv</a>
<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <th>Sua</th>
        <th>Xoa</th>
    </tr>
    <?php foreach($result as $r){ ?>
        <tr>
            <td><?php echo $r['ma'] ?></td>
            <td><?php echo $r['ten'] ?></td>
            <td><a href="?action=edit&ma=<?php echo $r['ma']?>">Sua</a></td>
            <td><a href="?action=delete&ma=<?php echo $r['ma']?>">Xoa</a></td>
        </tr>
    <?php } ?>
</table>
