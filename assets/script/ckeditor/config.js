/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbar = 'Full';
	config.toolbar_Full =
	[
	    { name: 'document', items : [ 'Source','-','','','','','','-','' ] },
	    { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	    { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	    { name: 'forms', items : [ '', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
	        'HiddenField' ] },
	    { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	    { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	        '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	    { name: 'links', items : [ ] },
	    { name: 'insert', items : [ '','','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
	    '/',
	    { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	    { name: 'colors', items : [ 'TextColor','BGColor' ] },
	    { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','' ] }
	];
};
