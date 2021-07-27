<?php

/**
 * Project Name: mikisan-ware
 * Description : YAMLユーティリティー
 * Start Date  : 2021/07/17
 * Copyright   : Katsuhiko Miki   https://striking-forces.jp
 * 
 * @author Katsuhiko Miki
 */
declare(strict_types=1);

namespace mikisan\core\util\yaml;

use \Symfony\Component\Yaml\Yaml as SymfonyYaml;

class YAML
{

    /**
     * yamlをパースして返す
     * 
     * @param   string      $yml
     * @return  array
     */
    public static function parse(string $yml): array
    {
        return SymfonyYaml::parse($yml);
    }

    /**
     * yamlファイルをパースして返す
     * 
     * @param   string      $yml
     * @return  array
     */
    public static function parseFile(string $path): array
    {
        return SymfonyYaml::parseFile($path);
    }

    /**
     * PHP配列をYamlにエンコードして返す
     * 
     * @param   array       $array
     * @param   int         $level       the level at which the output switches from the expanded representation to the inline one:
     * @return  string
     */
    public static function dump(array $array, int $level = 99, int $indent_spaces = 4): string
    {
        return SymfonyYaml::dump($array, $level, $indent_spaces);
    }

}
