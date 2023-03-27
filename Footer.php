<?php
class Footer
{
    private Contact $contact;
    private FormaterInterface $format;

    public function __construct(Contact $contact, FormaterInterface $format)
    {
        $this->contact = $contact;
        $this->format = $format;
    }

    public function make(): string
    {
        $html = "<div>
            <div>—-</div>
            <div>С уважением,</div>
            <div>".$this->contact->getFio()."</div>
            <div>Тел:</div>";
            foreach ($this->contact->getPhones() as $phone) {
                $html .= "<div><a href='tel:".$this->format->convertForLink($phone)."' rel='nofollow'>".$this->format->convertForHuman($phone)."</a><div>";
            }
        $html .= "<div>&nbsp;</div>
            <div>E-Mail:</div>";
            foreach ($this->contact->getEmails() as $key => $email) {
                $color = ($key == 0)? ColorFont::RED->color(): ColorFont::GREEN->color();
                $html .= "<div>
                            <a href='https://e.mail.ru/compose/?mailto=mailto%3{$email}' target='_blank' rel='noopener noreferrer' style='color:$color'>
                                ".$email."
                            </a>
                        <div>";
            }
        $html .= "
            </div>";
        return $html;
    }
}
