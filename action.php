<?php
class action_plugin_s5 extends DokuWiki_Action_Plugin {

    /**
     * Register callbacks
     */
    public function register(Doku_Event_Handler $controller) {


            $controller->register_hook('MENU_ITEMS_ASSEMBLY', 'AFTER', $this, 'addsvgbutton');


    }

    public function addsvgbutton(Doku_Event $event) {


        array_splice($event->data['items'], -1, 0, [new \dokuwiki\plugin\s5\MenuItem()]);
    }
}
