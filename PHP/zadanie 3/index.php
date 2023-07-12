<?php
require_once ('RankingTable.php');

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);

$table->segregation();

echo $table->playerRank(2);

