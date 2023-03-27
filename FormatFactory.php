<?php
class FormatFactory
{
    public static function make(string $formatName): ?FormaterInterface
    {
        $className = ucfirst($formatName);
        if (class_exists($className)) {
            return new $className();
        } else {
            return null;
        }
    }
}