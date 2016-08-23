<?php
include_once "Helper_page.php";
$result=$helper_page->read_page("count(*) as active","user","group by is_active order by is_active");
echo json_encode($result);
