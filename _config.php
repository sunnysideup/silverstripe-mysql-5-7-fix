<?php

// see: https://dev.mysql.com/doc/refman/8.0/en/sql-mode.html#sqlmode_ansi
// and: https://dev.mysql.com/doc/refman/5.6/en/sql-mode.html#sqlmode_only_full_group_by
// we take the standard ANSI settings, 
// and apply all of them individually, 
// EXCEPT only_full_group_by as this is causing issues in mysql 5.7+

SilverStripe\ORM\DB::query("SET SESSION sql_mode='REAL_AS_FLOAT,PIPES_AS_CONCAT,ANSI_QUOTES,IGNORE_SPACE';");
