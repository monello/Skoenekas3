<?php
defined('_JEXEC') or die;

class DnaGiftsViewDnaGifts extends JViewLegacy
{
	public function display($tpl = null)
	{
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		// Display the view
		parent::display($tpl);
	}
}