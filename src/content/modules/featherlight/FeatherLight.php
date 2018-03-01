<?php
class FeatherLight extends MainClass {
	public function frontendFooter() {
		enqueueScriptFile ( ModuleHelper::buildModuleRessourcePath ( "featherlight", "js/featherlight.min.js" ) );
		enqueueScriptFile ( ModuleHelper::buildModuleRessourcePath ( "featherlight", "js/general.js" ) );
		
		return getCombinedScriptHtml ();
	}
	public function head() {
		enqueueStylesheet ( ModuleHelper::buildModuleRessourcePath ( "featherlight", "css/featherlight.min.css" ) );
		
		return getCombinedStylesheetHtml ();
	}
}
