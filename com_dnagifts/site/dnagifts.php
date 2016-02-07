<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('jquery.framework');
JHtml::_('bootstrap.framework');
JHtml::_('behavior.tooltip');

/* DEFINE CONSTANTS HERE
	now you can echo it from anywhere in the component.
	echo MORNE;
*/
define('MORNE', 'Morne Riaan Louw');

$document = JFactory::getDocument();
$document->addStyleSheet('./media/com_dnagifts/css/site.stylesheet.css');
$document->addScript('./media/com_dnagifts/js/site.js');

$controller = JControllerLegacy::getInstance('DnaGifts');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();