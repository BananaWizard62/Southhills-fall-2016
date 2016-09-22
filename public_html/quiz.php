<?php
echo "<form action='quiz2.php' method = 'get'>First Name<input type = 'text' name = 'first'><br />";
echo "Last Name<input type = 'text' name = 'last'><br />";
echo "Password <input type = 'password' name = 'password'><br />";
echo "Email <input type = 'text' name = 'email'><br />";
echo "Gender<br />Male<input type = 'radio' name = 'gender' value = 'Male'>";
echo "Female<input type = 'radio' name = 'gender' value = 'Female'>";
echo "<br />Lunch<br /><input type = 'checkbox' name = 'lunch[]' value = 'Pizza'>Pizza<br />";
echo "<input type = 'checkbox' name = 'lunch[]' value = 'Cheeseburger'>Cheeseburger<br />";
echo "<input type = 'checkbox' name = 'lunch[]' value = 'Salad'>Salad<br />";
echo "<input type = 'checkbox' name = 'lunch[]' value = 'Spaghetti'>Spaghetti<br />";
echo "<input type = 'checkbox' name = 'lunch[]' value = 'Hoagie'>Hoagie<br />";
echo "Payment Method<br /><select name ='payment'>";
echo "<option 'Cash'>Cash</option>";
echo "<option 'Check'>Check</option>";
echo "<option 'Visa'>Visa</option>";
echo "</select><br />";
echo "<input type = 'submit'>";
echo "</form>";
?>
