<h2>Production</h2>
<table class='table'>
	<thead>
		<tr>
			<th>Recipe Name</th>
			<th>Description</th>
			<th>Ingredients ( In Stock / Required )</th>
			<th>Can Produce?</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($recipes as $recipe) { ?>
		<tr>
		<?php
			echo "<th>" . $recipe['code'] . "</th>";
			echo "<td>" . $recipe['description'] . "</td>";
			echo "<td>";
			echo "<ul>";
			foreach ($recipe['ingredients'] as $ingredient) {
				echo "<li>" . $ingredient['ingredient'] . " ( " . $ingredient['amt_in_stock'] . " / " . $ingredient['amount'] . " )</li>";
			}
			echo "</ul>";
			echo "</td>";

			$can_produce = ($recipe['can_produce'] ? "Yes" : "No");
			echo "<td>$can_produce</td>";

			if ($recipe['can_produce']) {
				echo "<td><a type='button' class='btn btn-primary' href='/production/create/" . $recipe['prod_link'] . "'>Create</a></td>";
			} else {
				echo "<td></td>";
			}
		 ?>

		</tr>
		<?php } ?>
	</tbody>
</table>
