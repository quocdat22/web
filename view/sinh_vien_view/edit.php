<form method="post" action="?action=update&controller=sinh_vien">
    <input type="hidden" value="<?php echo $first['ma']?>" name="ma">
    <label for="ten_sinh_vien">ten sinh_vien</label>
    <input type="text" name="ten" value="<?php echo $first['ten']?>">
    <br>
    <select name="lop">
        <?php foreach ($dsL as $l) { ?>
            <option value="<?php echo $l['ma'];?>" <?php if($l['ma'] === $first['lop']) echo "selected"?>>
                <?php echo $l['ten'];?>
            </option>
        <?php } ?>
    </select>
    <button>Sua sinh_vien</button>
</form>