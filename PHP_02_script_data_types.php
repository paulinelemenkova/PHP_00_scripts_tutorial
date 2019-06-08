<html>
    <body>
        <?php
            # Statements are expressions terminated by semicolons;
            echo "Hello PHP! I am Polina.";
            echo "Hello Polina, I am PHP. Let us practice data types";
            
            # Assignments;
            $greeting = "Welcome to PHP!";
            print $greeting;
            
            # Conditions;
            if (3 == 2 + 1)
            print("Moscow is a capital of Russia, Paris is a capital of France.<br>");
            if (3 == 2 + 1) {
                print("Moscow is a capital of Russia");
                
                print("Paris is a capital of France.<br>");
            }

            # Practicing data types;
            # Integers;
            $int_var = 12345;
            $another_int = -12345 + 12345;
            print("$int_var + $another_int<br>");
    
            # Doubles;
            $many = 2.2888800;
            $many_2 = 2.2111200;
            $few = $many + $many_2;
            print("$many + $many_2 = $few <br>");
    
            # Booleans;
            if (TRUE)
                print("This will always print<br>");
            else
                print("This will never print<br>");

            # Interpreting other types as Booleans;
            $true_num = 3 + 0.14159;
            $true_str = "Tried and true";
            $true_array[49] = "An array element";
            $false_array = array();
            $false_null = NULL;
            $false_num = 999 - 999;
            $false_str = "";
            print("$true_num, $true_str, $true_array[49], $false_array, $false_null, $false_num,  $false_str<br>");

            # NULL is a special type (case insensitive: NULL, null) that only has one value: NULL;
            $my_var = NULL;
            $my_var1 = null;
            print("$my_var, $my_var1<br>");
        ?>
    </body>
</html>
