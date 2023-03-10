<?php

$soma = 2 + 2;
$subtração = 2 - 2;
$multiplicação = 2*2;
$divisão = 2/2;
$exponenciação = 2 ** 3;
$restoDeDivisão = 10 % 3;
echo abs(-234);//absolute
echo sqrt(25);//raiz quadrada;
echo max(20,44); //maior entre os dois
echo min(22,65);//menor entre os dois
echo round(4.78);//arrendondar
echo ceil(4.78);//arredondar pra cima
echo floor(4.78);//arredondar pra baixo

/*

+----------+----------------+---------------------------------------------------------------------------+
| Example  | Name           | Result                                                                    |
+----------+----------------+---------------------------------------------------------------------------+
| +$a      | Identity       | Conversion of $a to int or float as appropriate.                          |
| -$a      | Negation       | Opposite of $a.                                                           |
| $a + $b  | Addition       | Sum of $a and $b.                                                         |
| $a - $b  | Subtraction    | Difference of $a and $b.                                                  |
| $a * $b  | Multiplication | Product of $a and $b.                                                     |
| $a / $b  | Division       | Quotient of $a and $b.                                                    |
| $a % $b  | Modulo         | Remainder of $a divided by $b.                                            |
| $a ** $b | Exponentiation | Result of raising $a to the $b'th power.                                  |
+----------+----------------+---------------------------------------------------------------------------+


PHP Assignment Operators

+----------+----------------+----------+-----------------------------------------+----------+
| Operator | Name           | Example  | Result                                  | Show it  |
+----------+----------------+----------+-----------------------------------------+----------+
| +        | Addition       | $x + $y  | Sum of $x and $y                        | Try it » |
| -        | Subtraction    | $x - $y  | Difference of $x and $y                 | Try it » |
| *        | Multiplication | $x * $y  | Product of $x and $y                    | Try it » |
| /        | Division       | $x / $y  | Quotient of $x and $y                   | Try it » |
| %        | Modulus        | $x % $y  | Remainder of $x divided by $y           | Try it » |
| **       | Exponentiation | $x ** $y | Result of raising $x to the $y'th power | Try it » |
+----------+----------------+----------+-----------------------------------------+----------+


PHP Comparison Operators

+-----------+--------------------------+-----------------+----------------------------------------------------------------------------------------------------------------------------------------------------+----------+
| Operator  | Name                     | Example         | Result                                                                                                                                             | Show it  |
+-----------+--------------------------+-----------------+----------------------------------------------------------------------------------------------------------------------------------------------------+----------+
| ==        | Equal                    | $x == $y        | Returns true if $x is equal to $y                                                                                                                  | Try it » |
| ===       | Identical                | $x === $y       | Returns true if $x is equal to $y, and they are of the same type                                                                                   | Try it » |
| !=        | Not equal                | $x != $y        | Returns true if $x is not equal to $y                                                                                                              | Try it » |
| &lt;&gt;  | Not equal                | $x &lt;&gt; $y  | Returns true if $x is not equal to $y                                                                                                              | Try it » |
| !==       | Not identical            | $x !== $y       | Returns true if $x is not equal to $y, or they are not of the same type                                                                            | Try it » |
| &gt;      | Greater than             | $x &gt; $y      | Returns true if $x is greater than $y                                                                                                              | Try it » |
| &lt;      | Less than                | $x &lt; $y      | Returns true if $x is less than $y                                                                                                                 | Try it » |
| &gt;=     | Greater than or equal to | $x &gt;= $y     | Returns true if $x is greater than or equal to $y                                                                                                  | Try it » |
| &lt;=     | Less than or equal to    | $x &lt;= $y     | Returns true if $x is less than or equal to $y                                                                                                     | Try it » |
| &lt;=&gt; | Spaceship                | $x &lt;=&gt; $y | Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. | Try it » |
+-----------+--------------------------+-----------------+----------------------------------------------------------------------------------------------------------------------------------------------------+----------+


PHP Increment / Decrement Operators

+----------+----------------+---------------------------------------+----------+
| Operator | Name           | Description                           | Show it  |
+----------+----------------+---------------------------------------+----------+
| ++$x     | Pre-increment  | Increments $x by one, then returns $x | Try it » |
| $x++     | Post-increment | Returns $x, then increments $x by one | Try it » |
| --$x     | Pre-decrement  | Decrements $x by one, then returns $x | Try it » |
| $x--     | Post-decrement | Returns $x, then decrements $x by one | Try it » |
+----------+----------------+---------------------------------------+----------+


PHP Logical Operators

+------------+------+------------------+-----------------------------------------------+----------+
| Operator   | Name | Example          | Result                                        | Show it  |
+------------+------+------------------+-----------------------------------------------+----------+
| and        | And  | $x and $y        | True if both $x and $y are true               | Try it » |
| or         | Or   | $x or $y         | True if either $x or $y is true               | Try it » |
| xor        | Xor  | $x xor $y        | True if either $x or $y is true, but not both | Try it » |
| &amp;&amp; | And  | $x &amp;&amp; $y | True if both $x and $y are true               | Try it » |
| ||         | Or   | $x || $y         | True if either $x or $y is true               | Try it » |
| !          | Not  | !$x              | True if $x is not true                        | Try it » |
+------------+------+------------------+-----------------------------------------------+----------+

*/
