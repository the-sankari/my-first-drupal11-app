<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Palindrome Checker Controller.
 */
class PalindromeCheckerController extends ControllerBase
{

    /**
     * Check if the given input is a palindrome.
     */
    public function check(Request $request)
    {
        $output = '';

        // Get the input from the query parameter.
        $input = $request->query->get('input', '');

        if (!empty($input)) {
            // Call the palindrome checker function.
            $is_palindrome = palindrome_checker_is_palindrome($input);

            if ($is_palindrome) {
                $output = $this->t('The string "%input" is a palindrome.', ['%input' => $input]);
            } else {
                $output = $this->t('The string "%input" is NOT a palindrome.', ['%input' => $input]);
            }
        }

        // Simple form for input.
        $form = '<form method="GET" action="">
               <label for="input">Enter a string:</label>
               <input type="text" id="input" name="input" value="' . htmlspecialchars($input) . '">
               <input type="submit" value="Check">
             </form>';

        return new Response($form . '<p>' . $output . '</p>');
    }

}
