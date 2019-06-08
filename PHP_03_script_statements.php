<html>
<head>
<title>Pauline PHP Tutorial</title>
    <body>
        <?php
            /* This is a comment with multiline
             Author : Polina Lemenkova
             Purpose: Multiline Comments PHP Tutorial
             Subject: PHP
             */
            print "An example with
            multi line comments";
            
            #Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.
            $variable = "name";
            $literally = 'My $variable will not print!\n';
            print($literally);
            $literally = "My $variable will print!\n next line. This is a \t tab. Double quotes: The name of the hotel is \"Hilton\". Chocolate bar costs \$2.50. Some text exercices.";
            print($literally);
        ?>
    </body>
</html>
