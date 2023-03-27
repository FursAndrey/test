<?php
class Contact
{
    private string $fio = 'Фамилия И.О.';
    private array $phones = [
        '295038183',
        '295038184'
    ];
    private array $emails = [
        'demo@bx-shef.by',
        'demo2@bx-shef.by'
    ];

    public function getFio():string
    {
        return $this->fio;
    }
    public function getPhones():array
    {
        return $this->phones;
    }
    public function getEmails():array
    {
        return $this->emails;
    }
}
