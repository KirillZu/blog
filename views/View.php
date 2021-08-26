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
        extract($data);       
        
        ob_start();
        include $this->templatesPath.'/'.$templateName;
        $buffer = ob_get_contents();
        ob_end_clean();
        
        echo $buffer;
    }
}
