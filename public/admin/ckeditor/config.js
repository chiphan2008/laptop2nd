/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	var HOST_PATH = 'http://localhost/laptop2nd/public/admin';
	config.filebrowserBrowseUrl = HOST_PATH+'/ckfinder/ckfinder.html';
config.filebrowserImageBrowseUrl = HOST_PATH+'/ckfinder/ckfinder.html?type=Images';
config.filebrowserFlashBrowseUrl = HOST_PATH+'/ckfinder/ckfinder.html?type=Flash';
config.filebrowserUploadUrl = HOST_PATH+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
config.filebrowserImageUploadUrl = HOST_PATH+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
config.filebrowserFlashUploadUrl = HOST_PATH+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};

