<?php

/**
 * Funktionen für dynamische Inhalte
 **************************************/
 
class Content
{
    
    public $p = ''; // Wird mit Aktueller Seite gefüllt (_pages.php)
    public $c = ''; // Wird mit globalem Content gefüllt (_global_content.php)
    
    public function __construct()
    {
        $this->p = $GLOBALS['page'];
        $this->g = $GLOBALS['content'];
        //  var_dump($GLOBALS['content']);
        //  var_dump($this->g);
    }

    /**
     Inhalt für <head><title> ... </title></head>
    **/
    public function head_title()
    {
        $html = '';
        if( $this->p['id'] == $GLOBALS['index_id'] )
        {
            $html .= $this->p['name'].' | '.$this->p['teaser'];
        }
        else
        {
            $html .= $this->p['name'];
            $html .=  array_key_exists('teaser', $this->p) ? ': '.$this->p['teaser'] : '';
            $html .= ' | '.$this->g['sitetitle_short'];
        }
        return $html;
    }

    /**
     Inhalt für <head><meta name="description" content="...
    **/
    public function head_description()
    {
		if( array_key_exists( 'description', $this->p ) && $this->p['description'] != "" )
		{
	        $html = '<meta name="description" content="';
			$html .= $this->p['description'];
	        $html .= '">';
		}
		else {
			$html = '';
		}
        return $html;
    }

    /**
     Inhalt für <head><meta name="keywords" content="...
    **/
    public function head_keywords()
    {
		if( array_key_exists( 'keywords', $this->p ) && $this->p['keywords'] != "" )
		{
	        $html = '<meta name="keywords" content="';
			$html .= $this->p['keywords'];
	        $html .= '">';
		}
		else {
			$html = '';
		}
        return $html;
    }

}