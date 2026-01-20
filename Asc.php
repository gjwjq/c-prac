<?php
require_once 'db.php';
require_once 'lib.php';

DB::fetchAll("select * from notice order by date asc");
back('오름차순 완료!');