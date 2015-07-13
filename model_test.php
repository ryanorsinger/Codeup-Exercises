<?php
// HINTS:
//     1. Create a new file called model_test.php. Use this file to run your procedural code. This is where you will instantiate new objects where you will work with them to accomplish the results.

//     2. Approach the database connection first.
//     3. Then work on the all() method.
//     4. Move on to the find() method.
//     5. Break the save() method into smaller pieces. That's easy to say, but how? What steps should happen first?
//         Well,


// Create a new user using the User model
// Retrieve the user by id
// Update the user
// Verify update in DB
// Create another user
// Retrieve all users
// Add a method to delete a record in teh Model class.
// Delete a user using the new method added to the base class.

require_once 'model.php';
require_once 'user.php';

// Create a new user
$ryan = new User();
$ryan->first_name = 'Ryan';
$ryan->last_name = 'Orsinger';
$ryan->username = 'ro';
$ryan->password = 'crummypassword';
$ryan->save();

// Update the user;

