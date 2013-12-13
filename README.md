Born_on_Day
===========


Find a day of week someone was born.


Martin Luther King, Jr is given as a startup example. He was born on a Tuesday.

Main Code
==========

By default 1/15/1929 was given and the formula looks like this. The PHP command used are
the date and strtotime command to determine the day of week someone was born on.

$bd = '1/15/1929';
$yd = "Martin Luther King, Jr was born on a " . date('l', strtotime($bd));


Output
======

Martin Luther King, Jr was born on a Tuesday
