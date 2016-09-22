<?php
echo "<form action = 'page2.php' method = 'get'>";
echo "Enter your first name<input type = 'text' name = 'fred'><br />";
echo "Enter your last name<input type = 'text' name = 'tim'><br />";
echo "<input type = 'checkbox' name = 'val[]' value = 'hello'>Hello&nbsp";
echo "<input type = 'checkbox' name = 'val[]' value = 'goodbye'>Goodbye&nbsp";
echo "<input type = 'submit'>";
echo "</form>";
?>
