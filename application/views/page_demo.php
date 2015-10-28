<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>demo</title>
    </head>
    <body>
        <form action="/index.php?/construct" method="post">
            <span>raido_type</span><input type="radio" id = 'r_e_type' class = 'e_c_name' value = 'radio' name= 'type'/><br>
            <span>num&nbsp; </span><input type="text" id = 'r_e_num' class = 'e_c_number' name = 'num'/><br>
            <span>action</span>
            <select  id = 'r_e_action' class = 'e_c_action' name = 'action'>
                <option  value = '1'>relate_1</option>
                <option  value = '2'>relate_2</option>
            </select>
            <input type="submit"/>
        </form>
    </body>
</html>



