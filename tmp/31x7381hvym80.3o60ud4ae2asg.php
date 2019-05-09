<h2>Edit DB listing:</h2>

<form id="form1" name="form1" method="post" action="<?= $BASE ?>/editView">
	<select name="toDelete" size="10">
		<?php foreach (($dbData?:[]) as $record): ?>
			<option value="<?= $record['id'] ?>">
				<?= $record['name'] ?>: <?= $record['colour'].PHP_EOL ?>
			</option>
		<?php endforeach; ?>
	</select>

	<p><input type="submit" name="delete" value="Delete" /></p>
</form>
<hr />
<p><a href="<?= $BASE ?>/dataView">Table view</a></p>
