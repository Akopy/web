<html>
	<body>
		<?php
			$arr = [[0,0,0,0,0,0,0,0,0,0],
					[0,0,0,0,0,0,0,0,0,0],
					[0,0,0,0,0,0,0,0,0,0],
					[0,0,0,0,0,0,0,0,0,0],
					[0,0,0,0,0,0,0,0,0,0]];
			echo '<table border="1" width="10">
					<tr>';
			for ($i = 0; $i<5; $i++) {
				for ($j=0; $j<10; $j++) { 
					$arr[$i][$j] = rand (0, 100);
					echo '<th>'.$arr[$i][$j].'</th>';
				}
				echo '</tr>';
			}
			echo '</table>';
		?>
	</body>
</html>