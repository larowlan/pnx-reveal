<?php

/**
 * @file
 * Contains Cupcakes.
 *
 * @license GPL v2 http://www.fsf.org/licensing/licenses/gpl.html
 * @author Chris Skene chris at xtfer dot com
 * @copyright Copyright(c) 2014 Chris Skene
 */

namespace Cupcake;


/**
 * Class Cupcake
 * @package Cupcake
 */
class Cupcake {

  /**
   * Do the presentation.
   */
  static public function init() {

    $cupcake = new static();

    return $cupcake;
  }

  /**
   * Render a template.
   *
   * @param string $name
   *   The template name.
   *
   * @throws \Exception
   */
  public function renderTemplate($name) {

    $file_path = APP_ROOT . '/../deck/template/' . $name . '.php';

    if (!is_file($file_path)) {
      throw new \Exception('Invalid template');
    }

    include_once $file_path;
  }

  /**
   * Render the slides.
   */
  public function renderSlides() {

    $file_path = APP_ROOT . '/../deck/slides/slides.php';

    if (!is_file($file_path)) {
      throw new \Exception('Invalid template');
    }

    include_once $file_path;
  }
}
