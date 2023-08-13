<form method="post" action="?action=update&controller=lop">
    <input type="hidden" value="<?php echo $first['ma']?>" name="ma_lop">
    <label for="ten_lop">ten lop</label>
    <input type="text" name="ten_lop" value="<?php echo $first['ten']?>">
    <button>Sua lop</button>
</form>