<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>demo</title>
    </head>
    <body>
        <form action="/index.php?/construct" method="post">
        <span>raido_type</span><input type="radio" id = 'r_e_type' class = 'e_c_name' value = 'r_e'/><br>
        <span>num&nbsp; &nbsp; &nbsp;</span><input type="text" id = 'r_e_num' class = 'e_c_number'/><br>
        <span>action</span>
        <select  id = 'r_e_action' class = 'e_c_action' name = 'r_action_opt'>
            <option  value = '1'>relate_1</option>
            <option  value = '2'>relate_2</option>
        </select>
        <input type="submit"/>
        </form>
    </body>
</html>



