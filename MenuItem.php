<?php

namespace dokuwiki\plugin\s5;

use dokuwiki\Menu\Item\AbstractItem;

/**
 * Class MenuItem
 *
 * Implements the block button for DokuWiki's menu system
 *
 */
class MenuItem extends AbstractItem {
    /** @var string do action for this plugin */
    protected $type = '';

    /** @var string icon file */
    protected $svg = __DIR__ . '/presentation.svg';
    
    public function __construct() {
        parent::__construct();
        global $INFO;
        
        unset($this->params['do']);
        $this->params['do']="export_s5";
        
        $this->svg = __DIR__ . '/presentation.svg';
    }

    
    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {        
        return "Slideshow";
    }
}
