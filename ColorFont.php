<?php
enum ColorFont
{
    case RED;
    case GREEN;
    public function color(): string
    {
        return match($this) 
        {
            self::RED => 'red',
            self::GREEN => 'green',
        };
    }
}