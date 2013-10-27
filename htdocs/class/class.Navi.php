<?php

/**
 * Hier wird das HTML für die Navigationen gebaut.
 ****************************************************/

class Navi
{

    public function get($navi_name="", $navi=array(), $pages=array(), $class='')
    {
        $local_navi = $navi[$navi_name];
        $count = count( $local_navi );
        $class = $class ? ' class="'.$class.'"' : '' ;
        $html  = '<ul id="nav-'.$navi_name.'"'.$class.'>';
        $i = 0;
        foreach( $local_navi as $id )
        {
            $i++;
            $html .= $this->nav_entry($i, $count, $id, $pages);
        }
        $html .= '</ul>';
    	return $html;
    }

    private static function nav_entry($i=0, $count=0, $id="", $pages=array())
    {
        $url = $GLOBALS['urlrewrite'] ? $GLOBALS['basedir'].$id.'/' : $GLOBALS['basedir'].'index.php?id='.$id;
        $teaser = array_key_exists('teaser', $pages[$id]) ? '<em>'.$pages[$id]['teaser'].'<span class="icon-go"></span></em>' : '';
        $position_class = $i     == 1  ? 'item-first' : '';
        $position_class = $count == $i ? 'item-last'  : $position_class;
        $custom_class = array_key_exists('class', $pages[$id]) ? $pages[$id]['class'] : '';
        $class = $position_class || $custom_class ? ' class="'.trim($position_class.' '.$custom_class).'"' : '';
        return '<li id="nav-'.$id.'"'.$class.'>
                    <a href="'.$url.'" title="'.$pages[$id]['title'].'"><span>'.$pages[$id]['name'].'</span>'.$teaser.'</a>
                </li>';
    }
    
    public static function btn($id="", $pages=array())
    {
        $url = $GLOBALS['urlrewrite'] ? $GLOBALS['basedir'].$id.'/' : $GLOBALS['basedir'].'index.php?id='.$id;
        $custom_class = array_key_exists('class', $pages[$id]) ? $pages[$id]['class'] : '';
        return '<a class="btn btn-'.$id.' '.$custom_class.'" href="'.$url.'" title="'.$pages[$id]['title'].'"><span class="btn-icon"></span>'.$pages[$id]['name'].'</a>';
    }


    /**
     Inhalt für <head><link rel="canonical" href="http://www..." >
    **/
	public static function canonical($id)
	{
        $html = '<link rel="canonical" href="';
		$html .= $GLOBALS['canonical_domain'];
		$html .= $id == $GLOBALS['index_id'] ? '' : $id.'/';
        $html .= '">';
		return $html;
	}

}