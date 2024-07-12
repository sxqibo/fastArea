<?php

namespace Sxqibo\FastArea;

class ComposerScripts
{
    public static function copyDatabaseDirectory()
    {
        $source = __DIR__ . '/database';
        $destination = dirname(__DIR__, 2) . '/database';

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        self::recurseCopy($source, $destination);
    }

    private static function recurseCopy($source, $destination)
    {
        $dir = opendir($source);
        @mkdir($destination);

        while (($file = readdir($dir)) !== false) {
            if ($file != '.' && $file != '..') {
                if (is_dir($source . '/' . $file)) {
                    self::recurseCopy($source . '/' . $file, $destination . '/' . $file);
                } else {
                    copy($source . '/' . $file, $destination . '/' . $file);
                }
            }
        }

        closedir($dir);
    }
}
