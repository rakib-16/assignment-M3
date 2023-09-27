<?php
// Function to generate a random password
function generatePassword($length) {
    // Define character sets
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine character sets
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    // Get the total length of all characters
    $totalChars = strlen($allChars);

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random index to pick a character from allChars
        $randomIndex = mt_rand(0, $totalChars - 1);

        // Append the randomly selected character to the password
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: $generatedPassword";
?>
