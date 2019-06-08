<html>
<head>
<title>PHP Constants, Pauline Tutorial</title>
    <body>
        <?php
            # PHP constant() function
            # Constant cannot change during the script. Constant identifiers are always uppercase.
            # Unlike with variables, there is no need to write a dollar sign ($) before a constant. You can also use the function constant() to read a constant's value.
            # Constants may only be defined using define() function.
            # Once the constants have been set, may not be redefined or undefined.
            
            define("MINSIZE", 50);
            echo MINSIZE;
            echo constant("MINSIZE"); // same thing as the previous line
            
            // Valid constant names
            define("ONE", "first thing");
            define("TWO2", "second thing");
            define("THREE_3", "third thing");
            
            echo ONE;
            echo TWO2;
            echo THREE_3;
            
            # There are five magical constants that change depending on where they are used:
            # __LINE__ ,  __FILE__ , __FUNCTION__ , __CLASS__ , __METHOD__
            
        ?>
    </body>
</html>
