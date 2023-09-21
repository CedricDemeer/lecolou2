<?php 

class lecolou {
    private $content;
    public function __construct()
    {
        $data = file_get_contents('./data/contents.json');
        $this->content = json_decode($data);
    }
    public function getAteliersType($name){
        foreach (($this->content) as $atelier){
            if($atelier->type === $name){
                return $atelier;
            }
        }
    }
}

?>