<?php

/**
 * LayoutEditorHandler.inc.php
 *
 * Copyright (c) 2003-2004 The Public Knowledge Project
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.layoutEditor
 *
 * Handle requests for layout editor functions. 
 *
 * $Id$
 */

import('pages.layoutEditor.SubmissionLayoutHandler');
import('pages.layoutEditor.SubmissionCommentsHandler');

class LayoutEditorHandler extends Handler {

	/**
	 * Display editor index page.
	 */
	function index() {
		LayoutEditorHandler::validate();
		LayoutEditorHandler::setupTemplate();
		
		$templateMgr = &TemplateManager::getManager();
		$templateMgr->display('layoutEditor/index.tpl');
	}
	
	/**
	 * Validate that user is a layout editor in the selected journal.
	 * Redirects to user index page if not properly authenticated.
	 */
	function validate() {
		parent::validate();
		$journal = &Request::getJournal();
		if (!isset($journal) || !Validation::isLayoutEditor($journal->getJournalId())) {
			Request::redirect('user');
		}
	}
	
	/**
	 * Setup common template variables.
	 * @param $subclass boolean set to true if caller is below this handler in the hierarchy
	 */
	function setupTemplate($subclass = false) {
		$templateMgr = &TemplateManager::getManager();
		$templateMgr->assign('pageHierarchy',
			$subclass ? array(array('user', 'navigation.user'), array('layoutEditor', 'layoutEditor.journalLayoutEditor'))
				: array(array('user', 'navigation.user'))
		);
		$templateMgr->assign('pagePath', '/user/layoutEditor');
	}
	
	
	//
	// Submission Layout Editing
	//
	
	function assignments($args) {
		SubmissionLayoutHandler::assignments($args);
	}
	
	function submission($args) {
		SubmissionLayoutHandler::submission($args);
	}
	
	function submissionEditing($args) {
		SubmissionLayoutHandler::submission($args);
	}
	
	function completeAssignment($args) {
		SubmissionLayoutHandler::completeAssignment($args);
	}
	
	function uploadGalley() {
		SubmissionLayoutHandler::uploadGalley();
	}
	
	function editGalley($args) {
		SubmissionLayoutHandler::editGalley($args);
	}
	
	function saveGalley($args) {
		SubmissionLayoutHandler::saveGalley($args);
	}

	function deleteGalley($args) {
		SubmissionLayoutHandler::deleteGalley($args);
	}
	
	function orderGalley() {
		SubmissionLayoutHandler::orderGalley();
	}
	
	function proofGalley($args) {
		SubmissionLayoutHandler::proofGalley($args);
	}
	
	function proofGalleyTop($args) {
		SubmissionLayoutHandler::proofGalleyTop($args);
	}
	
	function proofGalleyFile($args) {
		SubmissionLayoutHandler::proofGalleyFile($args);
	}
	
	function uploadSuppFile() {
		SubmissionLayoutHandler::uploadSuppFile();
	}

	function editSuppFile($args) {
		SubmissionLayoutHandler::editSuppFile($args);
	}
	
	function saveSuppFile($args) {
		SubmissionLayoutHandler::saveSuppFile($args);
	}

	function deleteSuppFile($args) {
		SubmissionLayoutHandler::deleteSuppFile($args);
	}
	
	function orderSuppFile() {
		SubmissionLayoutHandler::orderSuppFile();
	}
	
	function downloadFile($args) {
		SubmissionLayoutHandler::downloadFile($args);
	}
	
	function viewFile($args) {
		SubmissionLayoutHandler::viewFile($args);
	}

	//
	// Proofreading Actions
	//

	function layoutEditorProofreadingComplete($args) {
		SubmissionLayoutHandler::layoutEditorProofreadingComplete($args);
	}
	
	
	//
	// Submission Comments
	//
	
	function viewLayoutComments($args) {
		SubmissionCommentsHandler::viewLayoutComments($args);
	}
	
	function postLayoutComment() {
		SubmissionCommentsHandler::postLayoutComment();
	}
	
	function viewProofreadComments($args) {
		SubmissionCommentsHandler::viewLayoutComments($args);
	}
	
	function postProofreadComment() {
		SubmissionCommentsHandler::postLayoutComment();
	}
	
	function editComment($args) {
		SubmissionCommentsHandler::editComment($args);
	}
	
	function saveComment() {
		SubmissionCommentsHandler::saveComment();
	}
	
	function deleteComment($args) {
		SubmissionCommentsHandler::deleteComment($args);
	}
	
}

?>
