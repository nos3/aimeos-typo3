<?php

/**
 * @license GPLv3, http://www.gnu.org/copyleft/gpl.html
 * @copyright Metaways Infosystems GmbH, 2013
 * @copyright Aimeos (aimeos.org), 2014
 * @package TYPO3_Aimeos
 */


namespace Aimeos\Aimeos\Controller;


use Aimeos\Aimeos\Base;


/**
 * Aimeos account controller.
 *
 * @package TYPO3_Aimeos
 */
class AccountController extends AbstractController
{
	/**
	 * Renders the account history.
	 */
	public function historyAction()
	{
		$templatePaths = Base::getAimeos()->getCustomPaths( 'client/html' );
		$client = \Client_Html_Account_History_Factory::createClient( $this->getContext(), $templatePaths );

		return $this->getClientOutput( $client );
	}


	/**
	 * Renders the account favorites.
	 */
	public function favoriteAction()
	{
		$templatePaths = Base::getAimeos()->getCustomPaths( 'client/html' );
		$client = \Client_Html_Account_Favorite_Factory::createClient( $this->getContext(), $templatePaths );

		return $this->getClientOutput( $client );
	}


	/**
	 * Renders the account watch list.
	 */
	public function watchAction()
	{
		$templatePaths = Base::getAimeos()->getCustomPaths( 'client/html' );
		$client = \Client_Html_Account_Watch_Factory::createClient( $this->getContext(), $templatePaths );

		return $this->getClientOutput( $client );
	}
}
