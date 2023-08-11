<h1>Danh sach SV</h1>

<table border="1" width="100%">
    <tr>
        <th>Ma</th>
        <th>Ten</th>
    </tr>
    <?php foreach($result as $r){ ?>
        <tr>
            <td><?php echo $r['ma'] ?></td>
            <td><?php echo $r['ten'] ?></td>
        </tr>
    <?php } ?>
</table>