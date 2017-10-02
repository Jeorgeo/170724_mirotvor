<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// template js
//$doc->addScript($tpath.'/js/logic.js');

// template css

$doc->addStyleSheet($tpath.'/css/normalize.css');
$doc->addStyleSheet($tpath.'/css/style.css');
$doc->addStyleSheet($tpath.'/css/owl.carousel.min.css');
$doc->addStyleSheet($tpath.'/css/owl.theme.default.min.css');



// Remove js.
if ( !$loadMoo ) {
	
    unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js']);
    unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
    unset($doc->_scripts[$this->baseurl.'/media/jui/js/bootstrap.min.js']);
   
   
}
if (isset($this->_script['text/javascript'])) {
    $this->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $this->_script['text/javascript']);
    $this->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $this->_script['text/javascript']);
    if (empty($this->_script['text/javascript'])) {
        unset($this->_script['text/javascript']);
    }
}