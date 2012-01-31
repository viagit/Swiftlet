<?php

abstract class SwiftletController
{
	protected
		$_title
		;

	/**
	 * Get the page title
	 * @return string
	 */
	public function getTitle()
   	{
		return $this->_title;
	}

	/**
	 * Default action
	 */
	public function indexAction()
   	{
	}

	/**
	 * Fallback in case action doesn't exist
	 */
	public function notImplementedAction()
   	{
		throw new Exception('Action not implemented in ' . __CLASS__);
	}
}
