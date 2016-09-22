<?php
echo "<form action='page2.php' method='get'>";
echo "enter your first name<input type='text' name='box1'><br />";
echo "enter your last name<input type='text' name='box2'><br />";
echo "<input type = 'checkbox' name = 'val[]' value = 'hello'>Hello&nbsp";
echo "<input type = 'checkbox' name = 'val[]' value = 'goodbye'>Bye&nbsp";
echo "<select name ='orange'>";
echo "<option 'fred'>Fred</option>";
echo "<option 'wilma'>Wilme</option>";
echo "<option 'barney'>Barney</option>";
echo "<option 'betty'>Betty</option>";
echo "<option 'ivan'>Ivan</option>";
echo "</select>";
echo "<input type='submit'>";
echo "</form>";
?>
