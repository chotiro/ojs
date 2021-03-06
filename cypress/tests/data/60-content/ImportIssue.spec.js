/**
 * @file cypress/tests/data/60-content/ImportIssue.spec.js
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 */

describe('Data suite tests', function() {
	it('Imports an issue from XML', function() {
		// TODO: Import/export is not yet compatible with versioning.
		// See: https://github.com/pkp/pkp-lib/issues/4880
		//
		// Because of this problem, the publish issue tests (jmwandenga/vkarbasizaed) were
		// updated to put the articles in Vol. 1 No. 2, instead of Vol. 1 No. 1. This may
		// need to be corrected after import/export is fixed.
		/*

		$this->logIn('dbarnes');

		$actions = new WebDriverActions(self::$driver);
		$actions->moveToElement($this->waitForElementPresent('//ul[@id="navigationPrimary"]//a[text()="Tools"]'))
			->click($this->waitForElementPresent('//ul[@id="navigationPrimary"]//a[text()="Import/Export"]'))
			->perform();

		$this->waitForElementPresent($selector='//a[text()=\'Native XML Plugin\']');
		$this->click($selector);

		$this->uploadFile(dirname(__FILE__) . '/issue.xml');
		$this->waitForElementPresent($selector='//input[@name=\'temporaryFileId\' and string-length(@value)>0]');
		$this->click('//form[@id=\'importXmlForm\']//button[starts-with(@id,\'submitFormButton-\')]');

		// Ensure that the import was listed as completed.
		$this->waitForElementPresent('//*[contains(text(),\'The import completed successfully.\')]//li[contains(text(),\'Vol 1. No 1.\')]');
		*/
	});
});
