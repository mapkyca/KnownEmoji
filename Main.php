<?php

namespace IdnoPlugins\Emoji {

    class Main extends \Idno\Common\Plugin {

	function registerPages() {
	    
	    
		\Idno\Core\site()->template()->extendTemplate('shell/footer','Emoji/footer');
		\Idno\Core\site()->template()->extendTemplate('shell/css','Emoji/css');
	}

    }

}
