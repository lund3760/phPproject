
<?php $curpage = basename($_SERVER['PHP_SELF']); ?>

<ul>
	<li><a href="page1.php" <?php if($curpage == 'page1.php') {echo 'class="active"'; } ?>>Page 1</a></li>
    <li><a href="page2.php" <?php if($curpage == 'page2.php') {echo 'class="active"'; } ?>>Page 2</a></li>
    <li><a href="page3.php" <?php if($curpage == 'page3.php') {echo 'class="active"'; } ?>>Page 3</a></li>
</ul>

<?php 
//	$curpage = 'page1.php';
//	if($curpage == 'p1.php') { echo 'class="active"';}
?>