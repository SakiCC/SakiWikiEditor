$(document).ready(function () { //jquery      
/* Check if we are in edit mode and the required modules are available and then customize the toolbar */
	if ( $.inArray( mw.config.get( 'wgAction' ), ['edit', 'submit'] ) !== -1 ) {
			mw.loader.using( 'user.options', function () {
					if ( mw.user.options.get('usebetatoolbar') ) {
							mw.loader.using( 'ext.wikiEditor.toolbar', function () {
									$(document).ready( customizeToolbar );
							} );
					}
			} );
	}
});

var customizeToolbar = function() {
	$( '#wpTextbox1' ).wikiEditor( 'addToToolbar', {
		'sections': {
        	'templates': {
				'labelMsg': 'toolbar-section-templates',
				'type': 'booklet',
				'deferLoad': true,
				'pages': {
					'commons': {
						'labelMsg': 'toolbar-template-page-commons',
						'layout': 'templates',
						'templates': [
							'template-tips-top',
							{ 'labelMsg':'template-needtranslate', 'preMsg':'template-needtranslate-pre' },
							{ 'labelMsg':'template-todo', 'preMsg':'template-todo-pre' },
							{ 'labelMsg':'template-style', 'preMsg':'template-style-pre' },
							{ 'labelMsg':'template-frombaike', 'preMsg':'template-frombaike-pre' },
							{ 'labelMsg':'template-diff', 'preMsg':'template-diff-pre'},
							{ 'labelMsg':'template-2set', 'preMsg':'template-2set-pre'}, 	
							{ 'labelMsg':'template-research', 'preMsg':'template-research-pre' },
							{ 'labelMsg':'template-r18', 'pre':'{{R18}}'}, 
							{ 'labelMsg':'template-resource', 'preMsg':'template-resource-pre'}, 	
							'----',
							'template-tips-category',
							{ 'labelMsg':'template-painter', 'postMsg':'template-painter-post' }, 
							{ 'labelMsg':'template-writer', 'postMsg':'template-writer-post' },
							{ 'labelMsg':'template-goods', 'postMsg':'template-goods-post' }, 
							{ 'labelMsg':'template-noun', 'postMsg':'template-noun-post' }, 
							'----',
							'template-tips-format',							
							{ 'labelMsg':'template-menu-2', 'pre':'== ','periMsg':'template-text','post':' ==' },
							{ 'labelMsg':'template-menu-3', 'pre':'=== ','periMsg':'template-text','post':' ===' },
							{ 'labelMsg':'template-menu-4', 'pre':'==== ','periMsg':'template-text','post':' ====' },
							{ 'labelMsg':'template-menu-5', 'pre':'===== ','periMsg':'template-text','post':' =====' },
							{ 'labelMsg':'template-split', 'post':'----'}, 
							{ 'labelMsg':'template-font-del', 'pre':'<del>','periMsg':'template-text','post':'</del>' },
							{ 'labelMsg':'template-font-underline', 'pre':'<u>','periMsg':'template-text','post':'</u>' },
							{ 'labelMsg':'template-color-red', 'pre':'{{color|red|','periMsg':'template-text','post':'}}' },
							{ 'labelMsg':'template-color-green', 'pre':'{{color|green|','periMsg':'template-text','post':'}}' },
							'--',
							{ 'labelMsg':'template-jp', 'pre':'{{lang|ja|','periMsg':'template-text','post':'}}'}, 
							{ 'labelMsg':'template-lyric', 'pre':'<poem class="lyric">','periMsg':'template-text','post':'</poem>' },
							{ 'labelMsg':'template-quotation', 'pre':'<poem class="quotation">','periMsg':'template-text','post':'</poem>' },
							{ 'labelMsg':'template-black', 'preMsg':'template-black-pre','periMsg':'template-text','post':'}}' },
							{ 'labelMsg':'template-hidden', 'preMsg':'template-hidden-example','periMsg':'template-text','post':'</collapsetext>'},
							{ 'labelMsg':'template-new', 'post':'{{New}}'}, 
							{ 'labelMsg':'template-hot', 'post':'{{Hot}}'}, 
							{ 'labelMsg':'template-mahjong', 'preMsg':'template-mahjong-pre', 'peri':'1s|2s|3s|_|1m|2m|3m|_|1p|2p|3p','post':'}}' },
							{ 'labelMsg':'template-mahjong_min', 'preMsg':'template-mahjong_min-pre', 'peri':'1s|2s|3s|_|1m|2m|3m|_|1p|2p|3p','post':'}}' }
						]
					},
					'refs': {
						'labelMsg': 'toolbar-template-page-refs',
						'layout': 'templates',
						'templates': [
							'template-tips-ref', 
							{ 'labelMsg':'template-ref', 'pre':'<ref>', 'periMsg':'template-text', 'post':'</ref>' },
							'||',
							{ 'labelMsg':'template-reref', 'pre':'<ref name="', 'periMsg':'template-text', 'post':'" />' },
							'||',
							{ 'labelMsg':'template-reflist', 'post':'{{reflist}}' },
							'template-tips-reflist',
							'----',
							'template-tips-ref-k', 
							{ 'labelMsg':'template-refsaki-km', 'preMsg':'template-refsaki-km-pre','peri':'1|1-2', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-kmb', 'preMsg':'template-refsaki-kmb-pre','periMsg':'template-refsaki-kmb-example', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-kmv', 'preMsg':'template-refsaki-kmv-pre','peri':'1|1-2', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-ka', 'preMsg':'template-refsaki-ka-pre','peri':'1|12:00-12:20', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-mb', 'preMsg':'template-refsaki-mb-pre','peri':'100', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-fb', 'preMsg':'template-refsaki-fb-pre','peri':'100', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-kms', 'preMsg':'template-refsaki-kmsite-pre','postMsg':'template-refsaki-post'  },
							{ 'labelMsg':'template-refsaki-kas', 'preMsg':'template-refsaki-kasite-pre','postMsg':'template-refsaki-post'  },
							{ 'labelMsg':'template-refsaki-drama', 'preMsg':'template-refsaki-drama-pre','periMsg':'template-refsaki-drama-example', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-dj', 'preMsg':'template-refsaki-dj-pre','periMsg':'template-refsaki-dj-example', 'post':'}}' },
							'----',
							'template-tips-ref-a', 
							{ 'labelMsg':'template-refsaki-am', 'preMsg':'template-refsaki-am-pre','peri':'1|1-2', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-amb', 'preMsg':'template-refsaki-amb-pre','periMsg':'template-refsaki-amb-example', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-amv', 'preMsg':'template-refsaki-amv-pre','peri':'1|1-2', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-aa', 'preMsg':'template-refsaki-aa-pre','peri':'1|12:00-12:20', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-afb', 'preMsg':'template-refsaki-afb-pre','peri':'100', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-ams', 'preMsg':'template-refsaki-amsite-pre','postMsg':'template-refsaki-post' },
							{ 'labelMsg':'template-refsaki-aas', 'preMsg':'template-refsaki-aasite-pre','postMsg':'template-refsaki-post'  },
							{ 'labelMsg':'template-refsaki-drama', 'preMsg':'template-refsaki-drama-pre','periMsg':'template-refsaki-drama-example', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-dj', 'preMsg':'template-refsaki-dj-pre','periMsg':'template-refsaki-dj-example', 'post':'}}' },
							'----',
							'template-tips-ref-b', 
							{ 'labelMsg':'template-refsaki-bm', 'preMsg':'template-refsaki-bm-pre','periMsg':'template-refsaki-bm-example', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-bmv', 'preMsg':'template-refsaki-bmv-pre','peri':'1|1-2', 'post':'}}' },
							{ 'labelMsg':'template-refsaki-bms', 'preMsg':'template-refsaki-bmsite-pre','postMsg':'template-refsaki-post'  },
							'||',
							{ 'labelMsg':'template-refsaki', 'preMsg':'template-refsaki-pre','periMsg':'template-refsaki-example', 'postMsg':'template-refsaki-post' },
							'||',
							'template-tips-ref-other'
						]
					},
					'role': {
						'labelMsg': 'toolbar-template-page-role',
						'layout': 'templates',
						'templates': [
							'template-tips-format',
							{ 'labelMsg':'template-debut', 'periMsg':'template-debut-example' },
							{ 'labelMsg':'template-family', 'preMsg':'template-family-pre', 'periMsg':'template-family-example','post':'}}' },
							{ 'labelMsg':'template-relatedrole', 'preMsg':'template-relatedrole-pre','periMsg':'template-relatedrole-example','post':'}}' },
							{ 'labelMsg':'template-call', 'periMsg':'template-call-example' },
							'----',
							'template-tips-list',
							{ 'labelMsg':'template-list-doujinshi', 'pre':'<ul>', 'periMsg':'template-list-doujinshi-example', 'post':'</ul>' },
							{ 'labelMsg':'template-list-doujingame', 'pre':'<ul>', 'periMsg':'template-list-doujingame-example', 'post':'</ul>' },
							'||',
							'template-tips-list-item',
							{ 'labelMsg':'template-list-doujinshi-item', 'preMsg':'template-list-doujinshi-item-pre','periMsg':'template-list-doujinshi-item-example','post':'}}' },
							{ 'labelMsg':'template-list-doujingame-item', 'preMsg':'template-list-doujingame-item-pre','periMsg':'template-list-doujingame-item-example','post':'}}' },
							'----',
							'template-tips-info',
							{ 'labelMsg':'template-info-student', 'periMsg':'template-info-student-example' },
							{ 'labelMsg':'template-info-coach', 'periMsg':'template-info-coach-example' },
							{ 'labelMsg':'template-info-pro', 'periMsg':'template-info-pro-example' },
							{ 'labelMsg':'template-info-announcer', 'periMsg':'template-info-announcer-example' },
							{ 'labelMsg':'template-info-role', 'periMsg':'template-info-role-example' },
							{ 'labelMsg':'template-info-cp', 'periMsg':'template-info-cp-example' },
							{ 'labelMsg':'template-info-school', 'periMsg':'template-info-school-example' },
							'----'
						]
					},
					'doujin': {
						'labelMsg': 'toolbar-template-page-doujin',
						'layout': 'templates',
						'templates': [
							'template-tips-list',
							{ 'labelMsg':'template-list-doujinshi', 'pre':'<ul>', 'periMsg':'template-list-doujinshi-example', 'post':'</ul>' },
							{ 'labelMsg':'template-list-doujingame', 'pre':'<ul>', 'periMsg':'template-list-doujingame-example', 'post':'</ul>' },
							{ 'labelMsg':'template-list-circle', 'pre':'<ul>', 'periMsg':'template-list-circle-example', 'post':'</ul>' },
							'||',
							'template-tips-list-item',
							{ 'labelMsg':'template-list-doujinshi-item', 'preMsg':'template-list-doujinshi-item-pre','periMsg':'template-list-doujinshi-item-example','post':'}}' },
							{ 'labelMsg':'template-list-doujingame-item', 'preMsg':'template-list-doujingame-item-pre','periMsg':'template-list-doujingame-item-example','post':'}}' },
							{ 'labelMsg':'template-list-circle-item', 'preMsg':'template-list-circle-item-pre','periMsg':'template-list-circle-item-example','post':'}}' },
							{ 'labelMsg':'template-list-event-item', 'preMsg':'template-list-event-item-pre','periMsg':'template-list-event-item-example','post':'}}' },
							'----',
							'template-tips-info',
							{ 'labelMsg':'template-info-doujinshi', 'periMsg':'template-info-doujinshi-example' },
							{ 'labelMsg':'template-info-doujinword', 'periMsg':'template-info-doujinword-example' },
							{ 'labelMsg':'template-info-doujingame', 'periMsg':'template-info-doujingame-example' },
							{ 'labelMsg':'template-info-mad', 'periMsg':'template-info-mad-example' },
							{ 'labelMsg':'template-info-circle', 'periMsg':'template-info-circle-example' },
							{ 'labelMsg':'template-info-author', 'periMsg':'template-info-author-example' },
							{ 'labelMsg':'template-info-event', 'periMsg':'template-info-event-example' },
							'----',
							'template-tips-category',
							{ 'labelMsg':'template-painter', 'postMsg':'template-painter-post' }, 
							{ 'labelMsg':'template-writer', 'postMsg':'template-writer-post' },
							'----',
							'template-tips-video',		
							{ 'labelMsg':'template-video-bilibili', 'pre':'{{#widget:bilibili|id=','periMsg':'template-video-id','post':'|page=1}}'}, 
							//{ 'labelMsg':'template-video-tudou', 'pre':'{{#widget:tudou|id=','periMsg':'template-video-id','post':'}}'}, 
							{ 'labelMsg':'template-video-qqvideo', 'pre':'{{#widget:qqvideo|id=','periMsg':'template-video-id','post':'}}'}, 
							{ 'labelMsg':'template-video-youku', 'pre':'{{#widget:youku|id=','periMsg':'template-video-id','post':'}}'}, 
							'----'
						]
					},
					'goods': {
						'labelMsg': 'toolbar-template-page-goods',
						'layout': 'templates',
						'templates': [
							'template-tips-list',
							{ 'labelMsg':'template-list-track', 'pre':'# ','periMsg':'template-list-track-example' },
							{ 'labelMsg':'template-list-song', 'pre':'<ul>', 'periMsg':'template-list-song-example', 'post':'</ul>' },
							'||',
							'template-tips-list-item',
							{ 'labelMsg':'template-list-song-item', 'preMsg':'template-list-song-item-pre','periMsg':'template-list-song-item-example','post':'}}' },
							'----',
							'template-tips-info',
							{ 'labelMsg':'template-info-book', 'periMsg':'template-info-book-example' },
							{ 'labelMsg':'template-info-drama', 'periMsg':'template-info-drama-example' },
							{ 'labelMsg':'template-info-song', 'periMsg':'template-info-song-example' },
							{ 'labelMsg':'template-info-charactsong', 'periMsg':'template-info-charactsong-example' },
							{ 'labelMsg':'template-info-cd', 'periMsg':'template-info-cd-example' },
							{ 'labelMsg':'template-info-game', 'periMsg':'template-info-game-example' },
							'----',
							'template-tips-category',
							{ 'labelMsg':'template-goods', 'postMsg':'template-goods-post' }, 
							{ 'labelMsg':'template-goods-k', 'postMsg':'template-goods-k-post' }, 
							{ 'labelMsg':'template-goods-a', 'postMsg':'template-goods-a-post' }, 
							{ 'labelMsg':'template-goods-b', 'postMsg':'template-goods-b-post' }, 
							'----'
						]
					},
					'mahjong': {
						'labelMsg': 'toolbar-template-page-mahjong',
						'layout': 'templates',
						'templates': [
							'template-tips-format',
							{ 'labelMsg':'template-mahjong', 'preMsg':'template-mahjong-pre', 'peri':'1s|2s|3s|_|1m|2m|3m|_|1p|2p|3p','post':'}}' },
							{ 'labelMsg':'template-mahjong_min', 'preMsg':'template-mahjong_min-pre', 'peri':'1s|2s|3s|_|1m|2m|3m|_|1p|2p|3p','post':'}}' },
							'||',
							'template-tips-nav',
							{ 'labelMsg':'template-mahjongnav', 'postMsg':'template-mahjongnav-post'},
							'----',
							'template-tips-info',
							{ 'labelMsg':'template-info-mjintro', 'periMsg':'template-info-mjintro-example' },
							{ 'labelMsg':'template-info-mjtype', 'periMsg':'template-info-mjtype-example' },
							'----'
						]
					},
					'other': {
						'labelMsg': 'toolbar-template-page-other',
						'layout': 'templates',
						'templates': [
							'template-tips-sptable',
							{ 'labelMsg':'template-event-table', 'periMsg':'template-event-table-example' },
							{ 'labelMsg':'template-event-tr', 'periMsg':'template-event-tr-example' },
							'----'
						]
					}
				}	//	end pages
            }	//	end booklet
    	}	//	end section
	});	//	end addToolBar
};	//	end function
