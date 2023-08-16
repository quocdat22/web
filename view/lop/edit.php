<h1>Sua lop</h1>
<a href="?action=index">Quay lai</a>
<form action="?action=update" method="post">
    <input type="hidden" name="ma" value="<?php echo $first->get_ma() ?>">
    <label for="ten">Ten</label>
    <input type="text" name="ten" value="<?php echo $first->get_ten() ?>">
    <label for="ten">ho</label>
    <input type="text" name="ho" value="<?php echo $first->get_ho() ?>">
    <button>Sua</button>
</form>