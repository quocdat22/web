<h1>Sua sinh vien</h1>
<a href="?action=index&controller=sinhvien">Quay lai</a>
<form action="?action=update&controller=sinhvien" method="post">
    <input type="hidden" name="ma" value="<?php echo $first->get_ma() ?>">
    <label for="ten">Ten</label>
    <input type="text" name="ten" value="<?php echo $first->get_ten() ?>">
    <label for="ten">ho</label>
    <input type="text" name="ho" value="<?php echo $first->get_ho() ?>">
    <select name="lop">
        <?php foreach($dsLop as $r): ?>
            <option value="<?php echo $r->get_ma() ?>"
            <?php if($first->get_lop() == $r->get_ma()) echo "selected"?>
            >
                <?php echo $r->get_ten() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Sua</button>
</form>