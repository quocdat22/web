<form method="post" action="?action=store&controller=sinh_vien">
    <label for="ten_sinh_vien">ten sinh_vien</label>
    <input type="text" name="ten_sinh_vien"> <br>
    <select name="lop">
        <?php foreach ($dsL as $l) { ?>
            <option value="<?php echo $l['ma'];?>"><?php echo $l['ten'];?></option>
        <?php } ?>
    </select>
    <button>Them sinh_vien</button>
</form>