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
        <h2>Magazines</h2>
        <?php
       $this->table->set_heading('Publication','Issue','Date');
       echo $this->table->generate($magazines);
        ?>
    </body>
</html>
