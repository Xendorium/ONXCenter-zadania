<?php
require_once ('RankingTable.php');

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 3);
$table->recordResult('Jan', 7);
$table->recordResult('Maks', 10);
$table->recordResult('Monika', 10);

echo $table->playerRank(1);

