<form action="?action=update" method="post">
    <input type="hidden" name="ma" value="<?php echo $first['ma']?>">
    <label for="ten">Ten Cu</label>
    <input type="text" name="ten" disabled value="<?php echo $first['ten']?>">
    <br><br>
    <label for="tenMoi">Ten Moi</label>
    <input type="text" name="tenMoi">
    <button>Sua</button>
</form>

