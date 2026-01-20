<?php
require_once 'db.php';
require_once 'lib.php';

DB::fetchAll("select * from notice order by date desc");
back('내림차순 완료!');