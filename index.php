<?php

$ase230_students=[
];

$i=0;
foreach($ase230_students as $member){
	echo '<h1>'.$member['name'].'</h1>';
	echo '<a href="detail.php?id='.$i.'&name='.$member['name'].'">View details</a>';
	$i++;
}
echo '<hr />';

$i=0;
foreach($ase230_students as $member){
	?>
	<h1><?= $i ?>. <?= $member['name'] ?></h1>
	<a href="detail.php?id=<?= $i ?>&name=<?= $member['name'] ?>">View details</a>
	<?php
	$i++;
}