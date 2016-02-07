<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Tests View
 */
class DnaGiftsViewTests extends JViewLegacy
{
    function display($tpl = null)
    {
        // Check for errors.
        if (count($errors = $this->get('Errors'))){
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }

        // Display the template
        parent::display($tpl);
    }


}