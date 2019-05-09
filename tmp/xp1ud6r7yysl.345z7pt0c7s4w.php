<h2>Current DB listing:</h2>

<table>
	<tr>
		<th>Name</th><th>Colour</th>
	</tr>
	<?php foreach (($dbData?:[]) as $record): ?>
		<tr>
			<td><?= trim($record['lat']) ?></td>
			<td><?= trim($record['lng']) ?></td>
			<td><?= trim($record['location']) ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<p><a href="<?= $BASE ?>/simpleform">Add another record</a></p>
<p><a href="<?= $BASE ?>/editView">Delete records</a></p>
