<?php 
$q6=(int)$_GET['q6'];
$q7=(int)$_GET['q7'];
$q8=(int)$_GET['q8'];
$p=($q6*$q7)+(($q6/2.0)*$q8);
?>
<input type="text" class="form-control" id="price2" name="price2" required  value="<?php echo $p;?>">