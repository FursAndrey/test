<?php
interface FormaterInterface
{
    public function convertForHuman(string $phone):string;
    public function convertForLink(string $phone):string;
}