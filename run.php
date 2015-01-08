<?php
//lecture 3 example 1 
echo “It is a string”;

else

echo ‘It is not a string’;

var_dump(is_array(‘XYZ’));

var_dump(is_integer(‘8008’));

var_dump(is_double(123));

var_dump(is_null(false));


//----------------------->


echo “It is a string”;

else

echo ‘It is not a string’;

var_dump(is_resource(‘frjnrr’));

var_dump(is_bool(‘8008’));

var_dump(is_object(123));

var_dump(is_array(argg));

//-------------------------->

echo “It is a string”;

else

echo ‘It is not a string’;

var_dump(is_string(‘car’));

var_dump(is_string(‘motorcycle’));

var_dump(is_string(biyclycle));

var_dump(is_string(skateboard));

//in your example it is outputting. is it a string bool(true) bool(true bool(false) bool(false)
// i think it is outputting that because the "type check" is is_string so if it is a string than it will output
// true if not, false. 
?>
?>