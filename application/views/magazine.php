<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo html_escape($publication->publication_name);?>
        #<?php echo html_escape($issue->issue_id);?>
        <div id="dateDiv">
        <?php echo html_escape($issue->issue_date_publication);?>
        </div>
    </body>
</html>
