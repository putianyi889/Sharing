@charset "UTF-8";

/* --- EWRporta2_Global.css --- */

.leftContainer { float: right; margin-left: -260px; width: 100%; }
.leftContent { margin-left: 260px; }
.leftSidebar { float: left; width: 250px; }

.splitWidgets .section:first-child,
.splitWidgets .sectionMain:first-child { margin-top: 0; }

.sidebar.noFloats { float: none; width: auto !important; margin-bottom: 10px; }
.sidebar.a-leftWidgets { float: left; width: 350px; }
.sidebar.a-rightWidgets { margin-left: 360px; }
.sidebar.b-leftWidgets { float: left; width: 350px; }
.sidebar.b-rightWidgets { margin-left: 360px; }
.sidebar.footerWidgets { clear: both; }
/* clearfix */ .splitWidgets { zoom: 1; } .splitWidgets:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.copyright { text-align: center; font-size: 11px; margin: 10px; }


	@media (max-width:800px)
	{
		.Responsive .leftContainer { float: none; margin: 0 auto; }
		.Responsive .leftContent { margin-left: 0; }
	}
	@media (max-width:610px)
	{
		.Responsive .sidebar.b-leftWidgets { float: none; margin: 0 auto; }
		.Responsive .sidebar.b-rightWidgets { margin-left: 0px; }
	}


/* --- attachment_editor.css --- */

.AttachmentEditor
{
	clear: both;
}

.xenForm .ctrlUnit dd li.AttachedFile,
.xenForm .ctrlUnit dd .AttachmentInsertAllBlock
{
	margin-top: 0;
	margin-right: 10px;
}

.AttachmentEditor .AttachedFile,
.AttachmentEditor .AttachmentInsertAllBlock
{
	overflow: hidden; zoom: 1;
	vertical-align: middle;
	padding: 5px 10px;
}

.AttachmentEditor .AttachedFile#AttachedFileTemplate
{
	display: none;
}

	.AttachmentEditor .AttachedFile .Thumbnail
	{
		width: 54px;
		height: 54px;
		line-height: 50px;
		display: block;
		background: ;
		border:  1px solid rgb(29, 19, 16); border:  1px solid rgba(29, 19, 16, 0.4); _border:  1px solid rgb(29, 19, 16);
		text-align: center;
		vertical-align: middle;
		float: left;
	}
	
		.AttachmentEditor .AttachedFile .Thumbnail img
		{
			max-width: 50px;
			max-height: 50px;
			_width: 50px;
			_height: 50px;
			padding: 0;
			margin: 0;
			vertical-align: middle;
		}
		
		.AttachmentEditor .AttachedFile .Thumbnail .genericAttachment
		{			
			background: transparent url('styles/overworld/xenforo/node-sprite.png') no-repeat -72px 0;
display: block;
width: 36px;
height: 36px;

			
			margin: 7px;
		}

	.AttachmentEditor .AttachmentText
	{
		margin-left: 64px;
	}
	
		.AttachmentEditor .AttachedFile .Filename
		{
		}
		
		.AttachmentEditor .secondaryContent .label
		{
			margin-bottom: 2px;
			font-size: 11px;
			color: rgb(212,194,174);
		}
		
		.AttachmentEditor .secondaryContent .controls
		{
			line-height: 25px;
		}
	
		/* clearfix */ .AttachmentEditor .AttachedFile .controls { zoom: 1; } .AttachmentEditor .AttachedFile .controls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
		
			
		.AttachmentEditor .AttachedFile .ProgressMeter
		{
			display: block;
			padding: 2px;
			border: 1px solid rgb(125,165,158);
			border-radius: 4px;
			background-color: ;
			margin-right: 75px;
			margin-top: 4px;
			font-size: 14pt;
			line-height: 26px;
		}
		
			.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic
			{
				display: inline-block;
				width: 0%;
				height: 26px;
				background: rgb(108,178,228) url('styles/overworld/xenforo/gradients/category-23px-light.png') repeat-x top;
				text-align: right;
			}
			
			.AttachmentEditor .AttachedFile .ProgressMeter .ProgressCounter
			{
				display: inline-block;
				height: 26px;
				padding: 0 10px;
			}
			
			.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic .ProgressCounter
			{
				color: rgba(0,0,0,0.4);
			}
			
			
			.AttachmentEditor .AttachedFile .AttachmentDeleter,
			.AttachmentEditor .AttachedFile .AttachmentCanceller
			{
				float: right;
				display: none;
			}

.AttachmentEditor .AttachmentInsertAllBlock
{
	display: none;
}

	.AttachmentEditor .AttachmentInsertAllBlock span
	{
		float: left;
		display: block;
		width: 54px;
		height: 34px;
		background:  url('styles/overworld/xenforo/widgets/image-attachments.png') no-repeat center;
		border:  1px solid rgb(29, 19, 16); border:  1px solid rgba(29, 19, 16, 0.4); _border:  1px solid rgb(29, 19, 16);
		margin-right: 10px;
	}

.AttachmentEditor .AttachmentDeleteAll
{
	float: right;
}

/* SWFUploader placeholder */

.swfupload
{
	position: absolute;
	z-index: 1;
	opacity: 0;
}

/* Uploader JS Overlay */

.xenOverlay.attachmentUploader
{
	max-width: 500px;
}

.attachmentUploader #ctrl_upload
{
	margin: 2px auto 5px;
}

.attachmentUploader .attachmentConstraints dl
{
	margin-top: 2px;
	font-size: 11px;
}

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	margin: 1em 140px 1em 0;
border: 1px solid rgb(0,0,0);
border-radius: 5px;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 11px;
font-family: 'Trebuchet MS', Helvetica, Arial, sans-serif;
color: rgb(108,178,228);
background: url(rgba.php?r=29&g=19&b=16&a=102); background: rgba(29, 19, 16, 0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#661D1310,endColorstr=#661D1310);
padding: 3px 8px;
border-bottom: 1px solid rgb(0,0,0);
border-top-left-radius: 4px;
border-top-right-radius: 4px;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background: url(rgba.php?r=0&g=0&b=0&a=102); background: rgba(0,0,0,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);
padding: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	overflow: auto;

}

.bbCodeQuote .attribution
{
	color: rgb(234,227,209);
background: url(rgba.php?r=10&g=10&b=10&a=102); background: rgba(10,10,10,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#660A0A0A,endColorstr=#660A0A0A);
border-bottom: 1px solid rgb(0,0,0);

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-style: italic;
font-size: 9pt;
background: url(rgba.php?r=10&g=10&b=10&a=102); background: rgba(10,10,10,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#660A0A0A,endColorstr=#660A0A0A);
padding: 10px;
border-bottom-right-radius: 4px;
border-bottom-left-radius: 4px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(255,255,255);
		cursor: pointer;
		padding-top: 65px;
		
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.bbCodeSpoilerText .bbCodeSpoilerText .bbCodeSpoilerText {
	background-color: rgb(10, 10, 10);
}

.bbCodeJustify
{
	text-align: justify;
}
.bbCodeJustify:after 
{
    content: "";
    display: inline-block;
    width: 100%;    
}
.hasJs .bbCodeSpoilerText
{
	display: none;
	color: rgb(255, 255, 255);
background: url(rgba.php?r=0&g=0&b=0&a=102); background: rgba(0,0,0,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);
padding: 5px;
margin-top: 5px;
margin-right: 140px;
margin-bottom: 5px;
border: 1px solid rgb(0,0,0);
border-radius: 5px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	/* fallback for browsers without currentColor */
	/*background-color: rgb(234,227,209); 
	background-color: currentColor;*/
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- doublepost_bb_code_tag.css --- */

.doublePost
{
	color: rgb(235,233,220);

}

	.doublePost .doublePostTimeStamp
	{
		color: rgb(212,194,174);

	}
	
		.doublePost .doublePostTimeStamp abbr, .doublePost .doublePostTimeStamp acronym
		{
			border-bottom: 0 !important;
		}
		
	.doublePost .doublePostOriginalDate
	{
		color: rgb(212,194,174);

	}
	
		.doublePost .doublePostOriginalDate abbr, .doublePost .doublePostOriginalDate acronym
		{
			border-bottom: 0 !important;
		}
	
	.doublePost .doublePostTagTextContainer
	{
		text-align: center;

	}
	
	.doublePost .doublePostTagText
	{
		font-style: italic;
font-size: 11px;
color: rgb(234,227,209);

	}
	
	.doublePost .doublePostOriginalDateText
	{
		
	}

/* --- editor_ui.css --- */

.hasJs .BbCodeWysiwygEditor
{
	visibility: hidden;
}

.redactor_box {
	font-size: 0;
background: rgb(10, 10, 10) url('styles/overworld/relogic/content/message_fade_out.png') repeat-x bottom; background: rgba(10,10,10,0.3) url('styles/overworld/relogic/content/message_fade_out.png') repeat-x bottom;
padding: 15px;
border-top:  1px solid rgb(13,4,2); border-top:  1px solid rgba(13,4,2, 0.5); _border-top:  1px solid rgb(13,4,2);
border-right:  1px solid rgb(255, 255, 255); border-right:  1px solid rgba(255, 255, 255, 0.1); _border-right:  1px solid rgb(255, 255, 255);
border-bottom:  1px solid rgb(255, 255, 255); border-bottom:  1px solid rgba(255, 255, 255, 0.1); _border-bottom:  1px solid rgb(255, 255, 255);
border-left:  1px solid rgb(13,4,2); border-left:  1px solid rgba(13,4,2, 0.5); _border-left:  1px solid rgb(13,4,2);
border-radius: 15px;
line-height: 0;
position: relative;
overflow: hidden;

}

	.redactor_box .redactor_smilies
	{
		overflow: hidden; *zoom: 1;
	}
	
		.redactor_box .redactor_smilies .tabs
		{
			min-height: 0;
		}
		
		.redactor_box .redactor_smilies .smilieContainer
		{
			max-height: 150px;
			overflow: auto;
		}

		.redactor_box .redactor_smilies .primaryContent,
		.redactor_box .redactor_smilies .secondaryContent
		{
			border-bottom: none;
		}
		
		.redactor_box .redactor_smilies .secondaryContent
		{
			border-top:  1px solid rgb(255, 255, 255); border-top:  1px solid rgba(255, 255, 255, 0.1); _border-top:  1px solid rgb(255, 255, 255);
		}
		
		.redactor_box .redactor_smilies .tabs a
		{
			height: 18px;
			line-height: 18px;
			font-size: 11px;
		}
		

		.redactor_box .redactor_smilies .smilieCategory li
		{
			display: inline-block;
			margin: 0;
			padding: 2px;
			cursor: pointer;
			line-height: 1.6;
		}
		
	.redactor_box .draftNotice,
	.redactor_box .placeholder
	{
		display: none;
		position: relative;
		line-height: 0;
		font-size: 0;
		z-index: 1;
	}
	
	.redactor_box .draftNotice span
	{
		position: absolute;
		right: 20px;
		top: -30px;
		float: right;
		line-height: 14px;
		font-size: 11px;
		color: rgb(212,194,174);
		padding: 5px;
		border-radius: 3px;
		background: url(rgba.php?r=0&g=0&b=0&a=127); background: rgba(0,0,0,0.5); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7F000000,endColorstr=#7F000000);
		box-shadow: 1px 1px 4px rgb(212,194,174);
		opacity: .5;
	}
		
	.redactor_box .placeholder span
	{
		line-height: 14px;

		font-size: 11pt;
line-height: 1.4;

	
		position: absolute;
		left: 8px;
		top: 8px;
	}


/* TOOLBAR */
.redactor_toolbar {
	font-size: 0;
background-image: url('styles/overworld/relogic/content/toolbar_background.png');
background-repeat: repeat-x;
background-position: bottom;
padding: 0 10px;
margin: -15px -15px 0px;
border-bottom:  1px solid rgb(13,4,2); border-bottom:  1px solid rgba(13,4,2, 0.5); _border-bottom:  1px solid rgb(13,4,2);
position: relative;
left: 0;
top: 0;
line-height: 0;
list-style: none;
overflow: hidden;
box-shadow: rgba(10, 10, 10, 0.35) 0px 0px 4px;

}

	.blendedEditor .redactor_box .redactor_toolbar
	{
		max-height: 68px;
	}
	
	.blendedEditor .redactor_box.activated .redactor_toolbar
	{
		max-height: none;
	}

	.redactor_toolbar li {
		float: left;
		margin: 2px 1px;
		margin-right: 0;
		list-style: none;
		outline: none;
	}

		.redactor_toolbar li.redactor_btn_right {
			float: right;
		}

		.redactor_toolbar li a {
			font-size: 0;
text-decoration: none;
border: 1px solid transparent;
box-sizing: border-box;
display: block;
line-height: 0;
cursor: pointer;
zoom: 1;
outline: none;
text-indent: -9999px;
transition: all 0.2s;
width: 24px;
height: 24px;

		}
		
		html .redactor_toolbar li a,
		html .redactor_toolbar li a:hover,
		html .redactor_toolbar li a:active,
		html .redactor_toolbar li a.redactor_act
		{
			background-image: url('styles/overworld/relogic/editor_icons.png');
			background-repeat: no-repeat;
			background-position: 0;
		}

			.redactor_toolbar li a:hover {
				-webkit-
				-moz-

				-webkit-
				-moz-

				-webkit-
				-moz-

				-webkit-
				-moz-

				-webkit-
				-moz-

				-webkit-
				-moz-
-webkit-transform: translate(0px, -2px); -ms-transform: translate(0px, -2px);transform: translate(0px, -2px);
-webkit-transform: translate(0px, -2px);
-moz-transform: translate(0px, -2px);

			}

			.redactor_toolbar li a:active, .redactor_toolbar li a.redactor_act {
				background: url(rgba.php?r=29&g=19&b=16&a=102); background: rgba(29, 19, 16, 0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#661D1310,endColorstr=#661D1310);
border: 1px solid rgb(125,165,158);

			}

		.redactor_toolbar li li {
			padding: 0;
			margin: 1px;
		}

		.redactor_toolbar li.redactor_btn_group {
			margin-left: 2px;
			margin-right: 2px;
		}
			.redactor_toolbar li.redactor_btn_group ul {
				margin: 0;
overflow: hidden;
*zoom: 1;

			}
	
			
				/* Fade toolbar when editor is not activated */
				.blendedEditor .redactor_box .redactor_btn_group ul,
				.blendedEditor .redactor_box iframe,
				.blendedEditor .redactor_box .redactor_smilies li
				{
					opacity: 0.5;
					-webkit-transition: opacity 0.3s ease-in-out;
					-moz-transition: opacity 0.3s ease-in-out;
					transition: opacity 0.3s ease-in-out;
				}
		
				.blendedEditor .redactor_box.activated .redactor_btn_group ul,
				.blendedEditor .redactor_box.activated iframe,
				.blendedEditor .redactor_box.activated .redactor_smilies li
				{
					opacity: 1;
				}
			
	
		.redactor_toolbar li.redactor_separator {
			float: left;
			height: 32px;
			border-left: 1px solid #d3d3d3;
			border-right: 1px solid #f5f5f5;
			padding: 0;
			margin: 0 2px 0 3px;
		}


/*BUTTONS*/



	html .redactor_toolbar li a.redactor_btn_html { background-position: 3px -2429px; }

	html .redactor_toolbar li a.redactor_btn_switchmode { background-position: 3px -605px; }

	html .redactor_toolbar li a.redactor_btn_removeformat { background-position: 3px -2205px; }

	html .redactor_toolbar li a.redactor_btn_draft { background-position: 3px -2237px; }

	html .redactor_toolbar li a.redactor_btn_draftsave { background-position: 3px -2237px; }

	html .redactor_toolbar li a.redactor_btn_new { background-position: 3px -1853px; }

	html .redactor_toolbar li a.redactor_btn_draftdelete { background-position: 3px -1853px; }

	html .redactor_toolbar li a.redactor_btn_bold { background-position: 3px -29px; }

	html .redactor_toolbar li a.redactor_btn_italic { background-position: 3px -61px; }

	html .redactor_toolbar li a.redactor_btn_underline { background-position: 3px -189px; }

	html .redactor_toolbar li a.redactor_btn_deleted { background-position: 3px -93px; }

	html .redactor_toolbar li a.redactor_btn_fontcolor { background-position: 3px -541px; }

	html .redactor_toolbar li a.redactor_btn_fontsize { background-position: 3px -2941px; }

	html .redactor_toolbar li a.redactor_btn_fontfamily { background-position: 3px -2909px; }

	html .redactor_toolbar li a.redactor_btn_smilies { background-position: 3px -2397px; }

	html .redactor_toolbar li a.redactor_btn_alignment { background-position: 3px -1469px; }

	html .redactor_toolbar li a.redactor_btn_alignleft { background-position: 3px -1469px; }

	html .redactor_toolbar li a.redactor_btn_aligncenter { background-position: 3px -1437px; }

	html .redactor_toolbar li a.redactor_btn_alignright { background-position: 3px -1501px; }

	html .redactor_toolbar li a.redactor_btn_justify { background-position: 3px -1405px; }

	html .redactor_toolbar li a.redactor_btn_unorderedlist { background-position: 3px -1693px; }

	html .redactor_toolbar li a.redactor_btn_orderedlist { background-position: 3px -1757px; }

	html .redactor_toolbar li a.redactor_btn_outdent { background-position: 3px -1373px; }

	html .redactor_toolbar li a.redactor_btn_indent { background-position: 3px -1309px; }

	html .redactor_toolbar li a.redactor_btn_image { background-position: 3px -1245px; }

	html .redactor_toolbar li a.redactor_btn_table { background-position: 3px -2493px; }

	html .redactor_toolbar li a.redactor_btn_link { background-position: 3px -1597px; }

	html .redactor_toolbar li a.redactor_btn_createlink { background-position: 3px -1597px; }

	html .redactor_toolbar li a.redactor_btn_unlink { background-position: 3px -1629px; }

	html .redactor_toolbar li a.redactor_btn_horizontalrule { background-position: 3px -1181px; }

	html .redactor_toolbar li a.redactor_btn_code { background-position: 3px -2429px; }

	html .redactor_toolbar li a.redactor_btn_insertcode { background-position: 3px -2429px; }

	html .redactor_toolbar li a.redactor_btn_quote { background-position: 3px -285px; }

	html .redactor_toolbar li a.redactor_btn_insertquote { background-position: 3px -285px; }

	html .redactor_toolbar li a.redactor_btn_media { background-position: 3px -2877px; }

	html .redactor_toolbar li a.redactor_btn_undo { background-position: 3px -2813px; }

	html .redactor_toolbar li a.redactor_btn_redo { background-position: 3px -2749px; }

	html .redactor_toolbar li a.redactor_btn_spoiler { background-position: 3px -1565px; }

	html .redactor_toolbar li a.redactor_btn_insertspoiler { background-position: 3px -1565px; }

	html .redactor_toolbar li a.redactor_btn_insert { background-position: 3px -2301px; }



	

	

	

	

	

	




	html[dir=rtl] .redactor_toolbar li a.redactor_btn_unorderedlist { background-position: 3px -1661px; }

	html[dir=rtl] .redactor_toolbar li a.redactor_btn_orderedlist { background-position: 3px -1725px; }

	html[dir=rtl] .redactor_toolbar li a.redactor_btn_outdent { background-position: 3px -1341px; }

	html[dir=rtl] .redactor_toolbar li a.redactor_btn_indent { background-position: 3px -1277px; }

	html[dir=rtl] .redactor_toolbar li a.redactor_btn_undo { background-position: 3px -2781px; }

	html[dir=rtl] .redactor_toolbar li a.redactor_btn_redo { background-position: 3px -2717px; }



/* DROPDOWN */
.redactor_dropdown {
	font-size: 13px;
background-image: url('styles/overworld/relogic/content/background.jpg');
background-repeat: repeat-y;
background-position: top right;
padding: 5px;
border-width: 1px;
border-style: solid;
border-top-color:  rgb(255, 255, 255); border-top-color:  rgba(255, 255, 255, 0.1); _border-top-color:  rgb(255, 255, 255);
border-right-color:  rgb(13,4,2); border-right-color:  rgba(13,4,2, 0.5); _border-right-color:  rgb(13,4,2);
border-bottom-color:  rgb(13,4,2); border-bottom-color:  rgba(13,4,2, 0.5); _border-bottom-color:  rgb(13,4,2);
border-left-color:  rgb(255, 255, 255); border-left-color:  rgba(255, 255, 255, 0.1); _border-left-color:  rgb(255, 255, 255);
border-radius: 5px;
top: 28px;
left: 0;
z-index: 100004;
position: absolute;
max-height: 150px;
overflow: auto;
line-height: 1.5;
box-shadow: #0A0A0A 0px 0px 10px;
width: 200px;

}

	.redactor_dropdown a
	{
		display: block;
		color: rgb(234,227,209);
		padding: 3px 5px;
		text-decoration: none;
	}
	
	.redactor_dropdown a.icon
	{
		padding: 0px 0px 0px 32px;
		height: 24px;
		line-height: 24px;
		background: transparent url('styles/overworld/relogic/editor_icons.png') no-repeat 0 0;		
	}
	
		.redactor_dropdown a.alignLeft
		{
			background-position: 3% -1469px;
		}
		.redactor_dropdown a.alignCenter
		{
			background-position: 3% -1437px;
		}
		.redactor_dropdown a.alignRight
		{
			background-position: 3% -1501px;
		}
		
		.redactor_dropdown a.saveDraft
		{
			background-position: 3% -2237px;
		}
		.redactor_dropdown a.deleteDraft
		{
			background-position: 3% -1853px;
		}
		
		.redactor_dropdown a.code
		{
			background-position: 3% -2429px;
		}		
		.redactor_dropdown a.quote
		{
			background-position: 3% -285px;
		}		
		.redactor_dropdown a.spoiler
		{
			background-position: 3% -1565px;
		}		
		.redactor_dropdown a.strikethrough
		{
			background-position: 3% -93px;
		}

	.redactor_dropdown a:hover {
		text-decoration: none;
		background-color: rgba(0,0,0,0.4);
	}

.redactor_separator_drop {
	border-top: 1px solid #ddd;
	padding: 0;
	line-height: 0;
	font-size: 0;
}

/* ColorPicker */

.redactor_color_link {
	padding: 0;
	width: 15px;
	height: 15px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, .2) inset;
	border-radius: 4px;
	float: left;
	margin: 2px;
	font-size: 0;
	box-sizing: border-box;
}

.redactor_color_none {
	font-size: 11px;
	clear: both;
}



/* MODAL */
#redactor_modal_overlay {
	position: fixed;
	margin: auto;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 209998;

	opacity: 0.6;
	filter: alpha(opacity='60');

	background-color: rgb(0, 0, 0);
}

#redactor_modal {
	padding: 0;
	position: fixed;
	top: 50%;
  	z-index: 209999;
}

#redactor_modal_close {
	overflow: hidden;
	text-indent: -9999px;
	cursor: pointer;
	background-image: url('styles/overworld/xenforo/overlay/close.png');
position: absolute;
right: 4px;
top: 4px;
cursor: pointer;
width: 35px;
height: 35px;

}

#redactor_tabs {
	margin-bottom: 18px;
	text-align: center;
}

	#redactor_tabs a {
		display: inline-block;
		border: 1px solid #d8d8d8;
		padding: 4px 14px;
		font-size: 12px;
		background-color: #ccc;
		text-decoration: none;
		color: #555;
		line-height: 1;
		border-radius: 5px;
		margin-right: 5px;
	}

		#redactor_tabs a:hover, #redactor_tabs a.redactor_tabs_act {
			background-color: #eee;
			padding: 5px 15px;
			box-shadow: 0 1px 2px rgba(0, 0, 0, .4) inset;
			border: none;
			text-shadow: 0 1px 0 #eee;
			color: #777;
			text-decoration: none;
		}

.redactor_editor_drop {
	display: none;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	border: 2px dashed #aaa;
	color: #000;
	background: url(rgba.php?r=190&g=190&b=190&a=127); background: rgba(190, 190, 190, .5); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7FBEBEBE,endColorstr=#7FBEBEBE);
}

	.redactor_editor_drop.dragDisabled
	{
		background: url(rgba.php?r=190&g=140&b=140&a=127); background: rgba(190, 140, 140, .5); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7FBE8C8C,endColorstr=#7FBE8C8C);
		border-color: rgb(150, 75, 75);
	}

	.redactor_editor_drop span {
		display: block;
		text-align: center;
		position: absolute;
		top: 50%;
		width: 100%;
		font-size: 18px;
		line-height: 26px;
		margin-top: -13px;
	}

	.redactor_editor_drop.hover {
		display: block;
	}


/* Drag and Drop Area */
.redactor_droparea {
	position: relative;
    width: 100%;
    margin: auto;
    margin-bottom: 5px;
}
.redactor_droparea .redactor_dropareabox {
	z-index: 1;
	position: relative;
    text-align: center;
    width: 99%;
    background-color: #fff;
    padding: 60px 0;
    border: 2px dashed #bbb;
}
.redactor_droparea .redactor_dropareabox, .redactor_dropalternative {
    color: #555;
    font-size: 12px;
}
.redactor_dropalternative {
	margin: 4px 0 2px 0;
}
.redactor_dropareabox.hover {
    background: #efe3b8;
    border-color: #aaa;
}
.redactor_dropareabox.error {
    background: #f7e5e5;
    border-color: #dcc3c3;
}
.redactor_dropareabox.drop {
    background: #f4f4ee;
    border-color: #e0e5d6;
}

/* --- likes_summary.css --- */

.likesSummary
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
}

	.LikeText
	{
		float: left;
	}
	
	.likeInfo
	{
		float: right;
	}

/* --- message.css --- */



.messageList
{
	background-image: url('styles/overworld/relogic/content/background.jpg');
padding: 0px;
border-top:  1px solid rgb(255, 255, 255); border-top:  1px solid rgba(255, 255, 255, 0.1); _border-top:  1px solid rgb(255, 255, 255);
border-right:  1px solid rgb(13,4,2); border-right:  1px solid rgba(13,4,2, 0.5); _border-right:  1px solid rgb(13,4,2);
border-bottom:  1px solid rgb(13,4,2); border-bottom:  1px solid rgba(13,4,2, 0.5); _border-bottom:  1px solid rgb(13,4,2);
border-left:  1px solid rgb(255, 255, 255); border-left:  1px solid rgba(255, 255, 255, 0.1); _border-left:  1px solid rgb(255, 255, 255);
border-radius: 15px;
box-shadow: #0A0A0A 0px 0px 15px;
background-origin: border-box;
overflow: hidden;

}

.messageList .message
{
	background-image: url('styles/overworld/relogic/content/message_fade_in.png');
background-repeat: repeat-x;
background-position: top;
padding: 10px 20px 0px;
border-top:  1px solid rgb(255, 255, 255); border-top:  1px solid rgba(255, 255, 255, 0.1); _border-top:  1px solid rgb(255, 255, 255);
border-bottom:  1px solid rgb(13,4,2); border-bottom:  1px solid rgba(13,4,2, 0.5); _border-bottom:  1px solid rgb(13,4,2);

}
.messageList .message:first-child
{
	border-top: none;
}
.messageList .message:last-child
{
	border-bottom: none;
}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
.messageList .message:after {
	font-size: 0px;
}

/*** Message block ***/

.message .messageInfo
{
	background: rgb(10, 10, 10) url('styles/overworld/relogic/content/message_fade_out.png') repeat-x bottom; background: rgba(10,10,10,0.3) url('styles/overworld/relogic/content/message_fade_out.png') repeat-x bottom;
padding: 15px;
margin-left: 140px;
border-top:  1px solid rgb(13,4,2); border-top:  1px solid rgba(13,4,2, 0.5); _border-top:  1px solid rgb(13,4,2);
border-right:  1px solid rgb(255, 255, 255); border-right:  1px solid rgba(255, 255, 255, 0.1); _border-right:  1px solid rgb(255, 255, 255);
border-bottom:  1px solid rgb(255, 255, 255); border-bottom:  1px solid rgba(255, 255, 255, 0.1); _border-bottom:  1px solid rgb(255, 255, 255);
border-left:  1px solid rgb(13,4,2); border-left:  1px solid rgba(13,4,2, 0.5); _border-left:  1px solid rgb(13,4,2);
border-radius: 15px;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: 11px;
color: rgb(234,227,209);
background-color: rgb(109, 109, 109);
background-repeat: repeat-x;
background-position: top;
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border: 1px solid rgb(58, 62, 65);
border-radius: 3px;
border-top-right-radius: 0px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);

		
		margin-right: -5px;
	}
	
		.message .newIndicator span
		{
			background-color: rgb(65, 67, 68);
border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
width: 5px;
height: 4px;

		}

	.message .messageContent
	{
		min-height: 100px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow; hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(212,194,174);
	}

	.message .signature
	{
		font-size: 9pt;
color: rgb(212,194,174);
padding: 5px 0 0;
margin-top: 5px;
border-top: 1px solid rgb(0,0,0);
max-height: 150px;
overflow: hidden;

	}

	.message .messageMeta
	{
		font-size: 11px;
background-image: url('styles/overworld/relogic/content/message_meta.png');
background-repeat: repeat-x;
background-position: top;
padding: 16px 20px 4px;
margin: 4px -20px 0px;
float: left;
zoom: 1;
opacity: 0.7;
width: 100%;

	}
	.messageList .message:hover .messageMeta 
	{
		opacity: 1;
	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgba(29, 19, 16, 0.4);
	}
	
		.messageNotices li
	{
		font-weight: bold;
font-size: 14px;
background: url(rgba.php?r=0&g=0&b=0&a=127) repeat-x top; background: rgba(0,0,0,0.5) repeat-x top; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7F000000,endColorstr=#7F000000);
padding: 5px;
margin: 5px 0 10px;
border: 1px solid rgb(0,0,0);
border-radius: 5px;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/overworld/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	
	.message .likesSummary
	{
		background: url(rgba.php?r=10&g=10&b=10&a=76); background: rgba(10,10,10,0.3); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C0A0A0A,endColorstr=#4C0A0A0A);
padding: 5px;
margin-top: 10px;
border: 1px solid rgb(0,0,0);
border-radius: 5px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background: url(rgba.php?r=255&g=255&b=255&a=25); background: rgba(255, 255, 255, 0.1); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#19FFFFFF,endColorstr=#19FFFFFF);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color:  rgb(0,0,0); border-left-color:  rgba(0,0,0, 0.6); _border-left-color:  rgb(0,0,0);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid rgb(125,165,158);
	background: rgb(29, 19, 16) url(styles/overworld/xenforo/gradients/category-23px-light.png) repeat-x top; background: rgba(29, 19, 16, 0.4) url(styles/overworld/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgba(0,0,0,0.4);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(212,194,174);
}

form[action='index.php?edit-history/']
{
	margin-right: -20px;
	margin-left: -20px
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: 3px;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:480px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 10px 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	float: left;
width: 124px;

}

	.messageUserBlock
	{
		background: url(rgba.php?r=29&g=19&b=16&a=102); background: rgba(29, 19, 16, 0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#661D1310,endColorstr=#661D1310);
border: 1px solid rgb(0,0,0);
border-radius: 5px;

		text-align: center;
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			background-image: url('styles/overworld/relogic/content/avatar_holder.png');
background-repeat: no-repeat;
padding: 10px;
border-radius: 4px;
background-size: 100% 100%;

			
			position: relative;	
		}
		
		.messageUserBlock div.avatarHolderModerator
		{
			background-image: url('styles/overworld/relogic/content/avatar_holder_moderator.png');
		}
		
		.messageUserBlock div.avatarHolderAdmin
		{
			background-image: url('styles/overworld/relogic/content/avatar_holder_admin.png');
		}
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: 9px;
				left: 9px;
				
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 5px;
border-top-right-radius: 3px;
border-bottom-left-radius: 3px;

			}
			
		.messageUserBlock h3.userText
		{
			padding: 6px;

		}
		
		.messageUserBlock .userBanner
		{
			display: block;
			margin-bottom: 5px;
			margin-left: -12px;
			margin-right: -12px;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
margin: 2px 0;
display: block;
overflow: hidden;
line-height: 16px;
text-align: center;

			
		}
		
		.messageUserBlock .userTitle
		{
			font-size: 11px;
color: black;
padding-top: 5px;
margin: 0 -12px 0px;
background-position: 0px -36px !important;
display: block;
width: 134px;
height: 22px;

		}
		.messageUserBlock .userTitle[data-title="Moderator"]
		{
			display: none;
		}
		.messageUserBlock .userTitle.titleBanner
		{
			
		}
		.messageUserBlock .userTitle.titleBanner span
		{
			display: none;
		}
		
		.messageUserBlock .userTitle.titleBanner.bannerRelogic
		{
			background: url('assets/ribbons/relogic.png');
		}
		.messageUserBlock .userTitle.titleBanner.bannerModerator
		{
			background: url('assets/ribbons/moderator.png');
		}
		.messageUserBlock .userTitle.titleBanner.bannerAdministrator
		{
			background: url('assets/ribbons/administrator.png');
		}
		.messageUserBlock .userTitle.noBackground
		{
			margin-top: 0px;
			text-align: center;
			background: url('assets/ribbons/empty.png');
		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 10px;
background: url(rgba.php?r=0&g=0&b=0&a=102); background: rgba(0,0,0,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);
padding: 4px 6px;
border-radius: 4px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: rgb(0,0,0);
			-moz-border-left-colors: rgb(0,0,0);
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: ;
				-moz-border-left-colors: ;
				border-right: none;
			}


@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}
	
	.Responsive .messageUserBlock .userTitle
	{
		padding: 2px 5px;
		display: inline-block;
		width: auto;
		height: 14px;
		margin: 0px;
		border-radius: 5px;
		background-position: 0px 0px !important;
		border-width: 1px;
		border-style: solid;
		border-top-color:  rgb(255, 255, 255); border-top-color:  rgba(255, 255, 255, 0.1); _border-top-color:  rgb(255, 255, 255);
		border-right-color:  rgb(13,4,2); border-right-color:  rgba(13,4,2, 0.5); _border-right-color:  rgb(13,4,2);
		border-bottom-color:  rgb(13,4,2); border-bottom-color:  rgba(13,4,2, 0.5); _border-bottom-color:  rgb(13,4,2);
		border-left-color:  rgb(255, 255, 255); border-left-color:  rgba(255, 255, 255, 0.1); _border-left-color:  rgb(255, 255, 255);
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
		
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		margin-bottom: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- notices.css --- */

.hasJs .FloatingContainer .Notice
{
	display: none;
}

.FloatingContainer
{
	position: fixed;
	width: 300px;
	z-index: 9997;
	top: auto;
	left: auto;
	bottom: 0;
	right: 20px;
}

.Notices .Notice .blockImage
{
	padding: 10px 0 5px 10px;
}

.Notices .Notice .blockImage,
.FloatingContainer .floatingImage
{
	float: left;
}

.Notices .Notice .blockImage img,
.FloatingContainer .floatingImage img
{
	max-width: 48px;
	max-height: 48px;
}

.Notices .hasImage,
.FloatingContainer .hasImage
{
	margin-left: 64px;
	min-height: 52px;
}

.FloatingContainer .floatingItem
{
	background-image: url('styles/overworld/relogic/content/background.jpg');
	display: block;
	padding: 10px;
	font-size: 11px;
	position: relative;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 6px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.FloatingContainer .floatingItem.primary
{
	
	border-color: rgb(125,165,158);
}

.FloatingContainer .floatingItem.secondary
{
	color: rgb(143,108,63);
	background-color: rgba(0,0,0,0.6);
	border-color:  rgb(10,10,10); border-color:  rgba(10,10,10, 0.4); _border-color:  rgb(10,10,10);
}

.FloatingContainer .floatingItem.dark
{
	color: #fff;
	background: black;
	background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0,0,0, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
	border-color: #333;
}

.FloatingContainer .floatingItem.light
{
	color: #000;
	background: white;
	background: url(rgba.php?r=255&g=255&b=255&a=204); background: rgba(255,255,255, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CCFFFFFF,endColorstr=#CCFFFFFF);
	border-color: #ddd;
}

.FloatingContainer .floatingItem .title
{
	font-size: 14px;
	padding-bottom: 5px;
	font-weight: bold;
	display: block;
}

.FloatingContainer .floatingItem .DismissCtrl
{
	position: static;
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	margin-top: -5px;
}

.Notices
{
	display: none;
}

/* cookie notice */
.Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow
{
	text-align: center;
}

.Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow.noticeCookiesContentButtonRow
{
	margin-top: 10px;
}


	@media (max-width:800px)
	{
		.Responsive .Notice.wide { display: none !important; }

		/* cookie notice */
		.Responsive .Notice.notice_-1 .noticeContent
		{
			padding: 3px 3px 10px 3px;
		}

		.Responsive .Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow
		{
			font-size: 12px;
		}

		.Responsive .Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow.noticeCookiesContentButtonRow .button
		{
			font-size: 11px;
			padding: 0px 4px;
			border-radius: 5px;
		}
	}
	
	@media (max-width:610px)
	{
		.Responsive .Notice.medium { display: none !important; }
	}
	
	@media (max-width:480px)
	{
		.Responsive .Notice.narrow { display: none !important; }
		
		.Responsive .FloatingContainer
		{
			right: 50%;
			margin-right: -150px;
		}
	}


/* --- panel_scroller.css --- */

.hasJs .Notices.PanelScroller { display: none; }

.PanelScroller .scrollContainer,
.PanelScrollerOff .panel
{
	padding: 3px;
margin-top: 15px;
margin-bottom: 10px;
border-radius: 10px;
font-size: 13pt;

}

.PanelScroller .PanelContainer
{
	position: relative;
	clear: both;
	width: 100%;
	overflow: auto;
}

	.hasJs .PanelScroller .Panels
	{
		position: absolute;
	}

	.PanelScroller .Panels
	{
		clear: both;
		margin: 0;
		padding: 0;
	}
	
		.PanelScroller .panel,
		.PanelScrollerOff .panel
		{
			overflow: hidden;
			position: relative;
			padding: 0 !important;

			padding: 10px;

		}
			
		.PanelScroller .panel .noticeContent,
		.PanelScrollerOff .panel .noticeContent
		{
			padding: 10px;
		}

/** panel scroller nav **/

.PanelScroller .navContainer
{
	margin: -11px 21px 10px;
overflow: hidden;
zoom: 1;

}

.PanelScroller .navControls
{
	float: right;
}

/* clearfix */ .PanelScroller .navControls { zoom: 1; } .PanelScroller .navControls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.PanelScroller .navControls a
	{
		font-size: 9px;
background: url(rgba.php?r=0&g=0&b=0&a=102); background: rgba(0,0,0,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);
padding: 3px 6px 2px;
margin-left: -1px;
float: left;
display: block;
position: relative;

		
		border-radius: 10px;
		border-radius: 0;
	}
	
		.PanelScroller .navControls > a:first-child
		{
			border-bottom-left-radius: 10px;
		}
		
		.PanelScroller .navControls > a:last-child
		{
			border-bottom-right-radius: 10px;
		}
		
		.PanelScroller .navControls a:hover
		{
			text-decoration: none;
background: url(rgba.php?r=0&g=0&b=0&a=102); background: rgba(0,0,0,0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);

		}
		
		.PanelScroller .navControls a.current
		{
			background: url(rgba.php?r=29&g=19&b=16&a=102); background: rgba(29, 19, 16, 0.4); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#661D1310,endColorstr=#661D1310);

		}
		
			.PanelScroller .navControls a .arrow
			{
				display: none;
			}
			
			.PanelScroller .navControls a.current span
			{
				display: block;
				line-height: 0px;
				width: 0px;
				height: 0px;
				border-top: 5px solid rgb(125,165,158);
				border-right: 5px solid transparent;
				border-bottom: 1px none black;
				border-left: 5px solid transparent;
				-moz-border-bottom-colors: rgb(125,165,158);
				position: absolute;
			}
			
			.PanelScroller .navControls a.current .arrow
			{
				border-top-color: ;
				top: 0px;
				left: 50%;
				margin-left: -5px;
			}
			
				.PanelScroller .navControls a .arrow span
				{
					border-top-color: ;
					top: -6px;
					left: -5px;
				}
				
/* notices */

.Notices .panel .noticeContent
{
	padding-right: 25px;
}

.bottomFixer .PanelScroller .panel,
.bottomFixer .PanelScrollerOff .panel
{
	margin-bottom: 0;
	border-radius: 0;
}

/* --- quick_reply.css --- */

/*quick reply*/

.quickReply
{	
	background-image: url('styles/overworld/relogic/content/message_fade_in.png');
background-repeat: repeat-x;
background-position: top;
padding: 10px 20px 0px;
border-top:  1px solid rgb(255, 255, 255); border-top:  1px solid rgba(255, 255, 255, 0.1); _border-top:  1px solid rgb(255, 255, 255);
border-bottom:  1px solid rgb(13,4,2); border-bottom:  1px solid rgba(13,4,2, 0.5); _border-bottom:  1px solid rgb(13,4,2);

	
	border-bottom: 0px;
	margin-bottom: 10px;
}

.quickReplyMessageList {
	box-sizing: border-box;
	margin-top: 20px;
	
}
/* clearfix */ .quickReply { zoom: 1; } .quickReply:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.quickReply .replyPrompt em
{
	font-style: italic;
}

/* the quick reply form */

#QuickReply
{
	margin-left: 140px;
	padding: 0px;
}

#QuickReply textarea
{
	width: 100%;
	*width: 98%;
	height: 100px;
	box-sizing: border-box;
}

#QuickReply .insertQuotes
{
	display: none;
	float: left;
	
	margin-top: 5px;
}

#QuickReply .submitUnit
{
	margin: 5px 10px 3px 10px;
	text-align: right;
	line-height: 31px;
	position: relative;
	z-index: 1;
}

	#QuickReply .submitUnit .draftUpdate
	{
		position: absolute;
		left: 0;
		z-index: -1;
		color: rgb(212,194,174);
		font-size: 11px;
	}
	
		#QuickReply .submitUnit .draftUpdate span
		{
			display: none;
		}

#QuickReply .AttachmentEditor
{
	padding-top: 10px;
}

/** Selected quote tooltip **/

#QuoteSelected
{
}

	#QuoteSelected .arrow
	{
		top: -6px;
		bottom: auto;
		border-top: 1px none black;
		border-bottom:  6px solid rgb(0,0,0); border-bottom:  6px solid rgba(0,0,0, 0.9); _border-bottom:  6px solid rgb(0,0,0);
	}
	
	#QuoteSelected a
	{
		text-decoration: none;
	}
	
	#QuoteSelected a:hover
	{
		text-decoration: underline;
	}


@media (max-width:610px)
{
	.Responsive #QuickReply .insertQuotes
	{
		float: right;
		margin-left: 3px;
	}
}
@media (max-width:480px)
{
	.Responsive .quickReply .messageUserInfo
	{
		display: none;
	}

	.Responsive #QuickReply
	{
		margin-left: 0;
	}
}


/* --- share_page.css --- */

.sharePage
{
	padding: 5px 10px 1px;
	border-radius: 8px;
	margin-top: 15px;
}

/* clearfix */ .sharePage { zoom: 1; } .sharePage:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.sharePage .shareControl
	{
		float: left;
	}

	.sharePage .facebookLike .label
	{
		font-size: 11px;
		line-height: 24px;
		float: left;
		margin-right: 7px;
		display: none;
	}
	
	.sharePage iframe
	{
		height: 20px;
	}
	
	.sharePage .facebookLike iframe
	{
		z-index: 52;
	}
	



@media (max-width:480px)
{
	.Responsive .sharePage
	{
		display: none;
	}
}


/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	font-size: 11px;
background-image: url('styles/overworld/relogic/content/background.jpg');
background-repeat: repeat;
padding: 5px;
margin: 10px 0;
border:  2px solid rgb(255, 255, 255); border:  2px solid rgba(255, 255, 255, 0.1); _border:  2px solid rgb(255, 255, 255);
border-radius: 5px;
line-height: 16px;
background-size: 100% auto;
background-origin: border-box;
box-shadow: #0A0A0A 0px 0px 15px;

}
	
	.thread_view .threadAlerts dt
	{
		color: @contentColor;
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: @contentColor;
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/overworld/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgba(0,0,0,0.4);
	border: 1px solid rgb(125,165,158);
	border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

