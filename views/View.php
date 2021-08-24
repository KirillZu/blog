<?php


namespace views;


class View 
{
    
    private $templatesPath;
    
    
    public function __construct($templatesPath) 
    {
        $this->templatesPath = $templatesPath;
    }

    public function render(string $templateName, array $data = [])
    {
        
        include $this->templatesPath.'/'.$templateName;
    }
}
