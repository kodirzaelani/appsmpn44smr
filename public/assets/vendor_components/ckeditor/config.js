/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	config.height = 1000;
	// config.uiColor = '#AADC6E';
	extraPlugins: "N1ED-editor";
    skin: "n1theme"; // own CKEditor theme, included into ZIP
    removePlugins: "iframe";
};
