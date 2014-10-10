<?php

	/**
	 * Extension driver
	 *
	 * @package Email Emailmanager API extension
	 * @author Alistair Kearney, Michael Eichelsdoerfer
	 */
	Class extension_Email_Emailmanager extends Extension{

		/**
		 * Extension information
		 */
		public function about(){
			return array(
				'name'         => 'Email Gateway: Emailmanager',
				'version'      => '1.0beta',
				'release-date' => '2011-03-09',
				'author' => array(
					'name' => 'Symphony Community',
					'website' => 'https://github.com/symphonists',
				)
			);
		}

		/**
		 * Function to be executed on uninstallation
		 */
		public function uninstall(){
			/**
			 * preferences are defined in the email gateway class,
			 * but removing upon uninstallation must be handled here;
			 */
			Symphony::Configuration()->remove('email_emailmanager');
			Administration::instance()->saveConfig();
			return TRUE;
		}

	}
