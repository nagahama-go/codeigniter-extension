<?php
/**
 * Array helper class
 *
 * @author     Takuya Motoshima <https://www.facebook.com/takuya.motoshima.7>
 * @license    MIT License
 * @copyright  2018 Takuya Motoshima
 */
namespace X\Util;
final class ArrayHelper {

  /**
   * Filter key
   *
   * @param  array $arr
   * @param  array $allowed
   * @return array
   */
  public static function filterKey(array $arr, ...$allowed):array {
    if (is_array($allowed[0])) {
      $allowed = $allowed[0];
    }
    return array_filter($arr, function ($key) use ($allowed) {
      return in_array($key, $allowed);
    }, ARRAY_FILTER_USE_KEY);
  }

  /**
   * Reset key
   *
   * @param  array $arr
   * @return array
   */
  public static function resetKey(array $arr):array {
    return array_values($arr);
  }

  /**
   * Get random unique value
   *
   * @param  array $arr
   * @return mixed
   */
  public static function getRandomUniqueValue(array &$arr) {
    if (empty($arr)) {
      throw new \RuntimeException('Elements can not be taken from an empty array');
    }
    $key = array_rand($arr, 1);
    $value = $arr[$key];
    unset($arr[$key]);
    return $value;
  }
}