<?php
require_once ('RankingTable.php');

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 3);
$table->recordResult('Jan', 4);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 9);

$table->segregation();

echo $table->playerRank(1);

