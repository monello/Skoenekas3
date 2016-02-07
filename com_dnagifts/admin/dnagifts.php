<?php
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

if (!JFactory::getUser()->authorise('core.manage', 'com_dnagifts'))
{
    return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Get an instance of the controller prefixed by DnaGifts
$controller = JControllerLegacy::getInstance('DnaGifts');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->get('task'));
 
// Redirect if set by the controller
$controller->redirect();