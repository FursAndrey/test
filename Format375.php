<?php
class Format375 implements FormaterInterface
{
    public function convertForHuman(string $phone):string
    {
        return preg_replace(
            '/^(\d{2})(\d{3})(\d{2})(\d{2})$/',
            "+375 (\\1) \\2-\\3-\\4",
            (string)$phone
        );
    }
    public function convertForLink(string $phone):string
    {
        return preg_replace(
            '/^(\d{2})(\d{3})(\d{2})(\d{2})$/',
            "+375\\1\\2\\3\\4",
            (string)$phone
        );
    }
}
