<?php
for ($i = 1; $i <= 50; $i++) {
	echo $i;
	if ($i % 3 == 0 || preg_match('/3/', $i)) {
		echo 'プロサー';
	}
	echo '<br>';
}
?>
