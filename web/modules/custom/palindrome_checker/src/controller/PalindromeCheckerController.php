<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Palindrome Checker Controller.
 */
class PalindromeCheckerController extends ControllerBase {

  /**
   * API to check if the given input is a palindrome.
   */
  public function apiCheck(Request $request) {
    // Get the input from the JSON body.
    $data = json_decode($request->getContent(), TRUE);
    $input = $data['input'] ?? '';

    if (empty($input)) {
      return new JsonResponse(['error' => 'Input string is required'], 400);
    }

    // Call the palindrome checker function (ensure this function exists in your module).
    $is_palindrome = palindrome_checker_is_palindrome($input);

    return new JsonResponse([
      'input' => $input,
      'is_palindrome' => $is_palindrome
    ]);
  }

}
