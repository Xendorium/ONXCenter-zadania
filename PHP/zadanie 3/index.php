<?php
require_once ('RankingTable.php');

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Jan', 7);
$table->recordResult('Maks', 10);
$table->recordResult('Monika', 13);

//$table->segregation();

echo $table->playerRank(3);

