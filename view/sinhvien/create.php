<h1>them sinh vien</h1>
<a href="?action=index&controller=sinhvien">Quay lai ds sinh vien</a>
<br>
<form action="?action=store&controller=sinhvien" method="post">
    <label for="ho">ho</label>
    <input type="text" name="ho">
    <label for="ten">ten</label>
    <input type="text" name="ten">
    <label for="lop">Lop</label>
        
    <select name="lop">
        <?php foreach($dsLop as $r): ?>
            <option value="<?php echo $r->get_ma() ?>"><?php echo $r->get_ten() ?></option>
        <?php endforeach; ?>
    </select>
    <button>them sinh vien</button>
</form>