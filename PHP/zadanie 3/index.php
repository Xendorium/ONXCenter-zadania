<?php
require_once ('RankingTable.php');

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));

echo $table->competitors[2];
