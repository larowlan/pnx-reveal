<?php

/**
 * @file
 * Contains a
 *
 * @license GPL v2 http://www.fsf.org/licensing/licenses/gpl.html
 * @author Chris Skene chris at previousnext dot com dot au
 * @copyright Copyright(c) 2014 Previous Next Pty Ltd
 */

namespace Cupcake\Utility;


/**
 * Class Yaml
 * @package Cupcake\Utility
 */
class Yaml {

  /**
   * Load a YAML file from the config folder.
   *
   * @param string $path
   *   Path to the yaml file.
   * @param string $file_name
   *   Type of file, e.g. config, plugins.
   *
   * @throws \Exception
   *
   * @return array
   *   A YAML array.
   */
  static public function loadYamlFile($path = '/../deck', $file_name = 'config.yml') {

    $path = APP_ROOT . $path . '/' . $file_name;

    if (!is_file($path)) {
      throw new \Exception('Invalid file path provided.');
    }

    $helper = new static();

    return $helper->readFile($path);
  }

  /**
   * Parse a file formatted in YAML.
   *
   * @param string $file
   *   Path to the file to parse.
   *
   * @return mixed
   *   Result of the file parse operation.
   */
  public function readFile($file) {

    try {

      $content = \Symfony\Component\Yaml\Yaml::parse($file);
    }
    catch (\Exception $e) {

      printf("Unable to load the YAML file successfully: %s", $e->getMessage());

      return FALSE;
    }

    return $content;
  }
}
