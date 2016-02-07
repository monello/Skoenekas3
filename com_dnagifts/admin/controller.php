<?php
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 

class DnaGiftsController extends JControllerLegacy
{
	// the next line is only required if the default view name does not match the component name
	protected $default_view = 'tests';

	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT.'/helpers/dnagifts.php';

		// Load the submenu.
		//DnaGiftsHelper::addSubmenu(JRequest::getCmd('view', 'tests'));

		// get the variables from the URL and see which view and layout to load
		// 	- if nothing is defined the default view will be loaded
		$view = JRequest::getCmd('view', 'tests');
		$layout = JRequest::getCmd('layout', 'default');
		$id = JRequest::getInt('id');

		// Check for edit form.
		if ($view == 'test' && $layout == 'edit' && !$this->checkEditId('com_dnagifts.edit.test', $id)) {
			// Somehow the person just went to the form - we don't allow that.
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php?option=com_dnagifts&view=tests', false));
			return false;
		}

		// call parent behavior
		parent::display($cachable);

		return $this;
	}
}