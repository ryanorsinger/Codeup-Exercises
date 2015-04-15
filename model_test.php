<?php
// HINTS:
//     1. Create a new file called model_test.php. Use this file to run your procedural code. This is where you will instantiate new objects where you will work with them to accomplish the results.

//     2. Approach the database connection first.
//     3. Then work on the all() method.
//     4. Move on to the find() method.
//     5. Break the save() method into smaller pieces. That's easy to say, but how? What steps should happen first?
//         Well,


require_once 'model.php';
require_once 'user.php';

$user = User::find(1);
$user->first_name = 'Jambo';
$user->save();
