<?php
// Process the search query
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Search: <input name="searchquery" type="text" size="80" maxlength="88">
</form>
<div>
	<?php echo $search_output; ?>
</div>