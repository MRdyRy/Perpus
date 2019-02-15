<?php
function getTableData($tableName, $page = 1, $limit = 20)
{
    $dataTable = array();
    $startRow = ($page - 1) * $limit;
    $query = mysql_query('SELECT * FROM `'.$tableName.'` LIMIT '.$startRow.', '.$limit);
 
    while ($data = mysql_fetch_assoc($query))
        array_push($dataTable, $data);
 
    return $dataTable;
}


function showPagination($tableName, $limit = 20)
{
    $countTotalRow = mysql_query('SELECT COUNT(*) AS total FROM `'.$tableName.'`');
    $queryResult = mysql_fetch_assoc($countTotalRow);
    $totalRow = $queryResult['total'];
 
    $totalPage = ceil($totalRow / $limit);
 
    $page = 1;
	echo '<ul class="pagination pagination-sm" style="float:right;margin-top:-5px;"><li><a href="#"><strong>Halaman</strong></a></li>';
    while ($page <= $totalPage)
    {	
	
        echo '<li><a href="?hal=kelolauser&page='.$page.'&perPage='.$limit.'">'.$page.'</a></li>';
        
        $page++;
    }
	echo '</ul>';
}