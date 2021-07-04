<?php
namespace App\Form\WhoWeAre;

use Gustiawan\FormBuilder\Form;

class WhoWeAreEditForm extends Form
{
    public function handle() 
    {
        $this->textarea('contents', 'Contents', ["class" => "wysiwyg"]);

        $this->separator('Metadata');

        $this->text('title', 'Meta Title');
        $this->textArea('description', 'Meta Description');
        $this->text('keywords', 'Meta Keywords (comma separated)');
        $this->text('canonical', 'Meta Canonical');
        $this->text('robots', 'Robots');
    }
}
