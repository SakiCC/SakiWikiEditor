<?php
/**
 * Internationalisation for WikiEditor extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** Simplified Chinese (‪中文(简体)‬)
 * @author YOYO
 */
$messages['zh-hans'] = array(
	'templateinserter-desc' => '在WikiEditor编辑器中加入模板工具栏。',
	'toolbar-section-templates' => '模板',
	'toolbar-template-page-commons' => '提示框、分类与格式',
	'template-tips-top' => '<b>提示框</b>(置于页面顶部)',
	'template-tips-category' => '<b>页面分类</b>(置于页面底部)',
	'template-tips-nav' => '<b>导航</b>(置于页面底部)',
	'template-tips-format' => '<b>格式</b>',
	'template-tips-list' => '<b>列表</b>',
	'template-tips-list-item' => '<b>列表项</b>',
	'template-tips-info' => '<b>信息框</b>',
	'template-tips-ref' => '<b>注解</b>',
	'template-tips-reref' => '',
	'template-tips-reflist' => '<font color=red>加入注解后必须在页面底部显示脚注。</font>',
	'template-tips-ref-k' => '参考<b>本篇</b>相关资料',
	'template-tips-ref-a' => '参考<b>阿知贺篇</b>相关资料',
	'template-tips-ref-b' => '参考<b>咲日和</b>相关资料',
	'template-tips-ref-other' => '<font color=blue>同一个<b>注解标签</b>内可以放置多种参考资料。</font>',
	'template-tips-video' => '<b>插入视频</b>',
	'template-needtranslate' => '待翻译',
	'template-needtranslate-pre' => '{{待翻译}}',
	'template-todo' => '待补充',
	'template-todo-pre' => '{{待完善}}',
	'template-frombaike' => '引自百度百科',
	'template-frombaike-pre' => '{{引自百度百科}}',
	'template-style' => '需要排版',
	'template-style-pre' => '{{待排版}}',
	'template-diff' => '有歧义',
	'template-diff-pre' => '{{有歧义}}

= 义项1 =

义项1内容

= 义项2 =

义项2内容',
	'template-2set' => '二次设定',
	'template-2set-pre' => '{{二设}}',
	'template-research' => '考据',
	'template-research-pre' => '{{考据}}',
	'template-r18' => '<font color=red>R18</font>',
	'template-resource' => '资源',
	'template-resource-pre' => '{{资源}}',
	'template-new' => '<font color=red>New!</font>',
	'template-hot' => '<font color=orange>Hot!</font>',
	"template-noun" => '名词',
	"template-noun-post" => '[[分类:名词]]',
	"template-painter" => '绘师',
	"template-painter-post" => '[[分类:同人绘师]]',
	"template-writer" => '写手',
	"template-writer-post" => '[[分类:同人写手]]',
	"template-role" => '角色', 
	"template-role-post" => '[[分类:角色]]', 
	"template-reporter" => '记者',
	"template-reporter-post" => '[[分类:记者]]',
	"template-goods" => '周边商品', 
	"template-goods-post" => '[[分类:周边商品]]', 
	"template-goods-k" => '周边商品(本篇)', 
	"template-goods-k-post" => '[[分类:清澄篇周边商品]]', 
	"template-goods-a" => '周边商品(阿知贺篇)', 
	"template-goods-a-post" => '[[分类:阿知贺篇周边商品]]', 
	"template-goods-b" => '周边商品(咲日和)', 
	"template-goods-b-post" => '[[分类:咲日和周边商品]]', 
	'template-relatedpro' => '相关项目',
	'template-relatedpro-pre' => '{{相关项目|',
	'template-relatedpro-example' => '项目1|项目2|…最多支持20个项目',
	'toolbar-template-page-refs' => '注解与参考文本',
	'template-ref'  => '插入注解',
	'template-reref'  => '复用注解',
	'template-refsaki-km' => '漫画',
	'template-refsaki-kmv' => '单行本',
	'template-refsaki-kmb' => '番外',
	'template-refsaki-ka' => '动画',
	'template-refsaki-kms' => '官网/漫画',
	'template-refsaki-kas' => '官网/动画',
	'template-refsaki-am' => '漫画',
	'template-refsaki-amv' => '单行本',
	'template-refsaki-amb' => '番外',
	'template-refsaki-aa' => '动画',
	'template-refsaki-ams' => '官网/漫画',
	'template-refsaki-aas' => '官网/动画',
	'template-refsaki-bm' => '漫画',
	'template-refsaki-bmv' => '单行本',
	'template-refsaki-bms' => '官网',
	'template-refsaki-fb' => '设定集',
	'template-refsaki-afb' => '设定集',
	'template-refsaki-mb' => '必杀书',
	'template-refsaki-drama' => '广播剧',
	'template-refsaki-dj' => '网络电台',
	'template-refsaki' => '其他',
	'template-refsaki-km-pre' => '{{参考|KM|',
	'template-refsaki-kmv-pre' => '{{参考|KMV|',
	'template-refsaki-kmb-pre' => '{{参考|KMB|',
	'template-refsaki-kmb-example' => '高遠原|2',
	'template-refsaki-ka-pre' => '{{参考|KA|',
	'template-refsaki-am-pre' => '{{参考|AM|',
	'template-refsaki-amv-pre' => '{{参考|AMV|',
	'template-refsaki-amb-pre' => '{{参考|AMB|',
	'template-refsaki-amb-example' => '出張編|2',
	'template-refsaki-aa-pre' => '{{参考|AA|',
	'template-refsaki-bm-pre' => '{{参考|BM|',
	'template-refsaki-bm-example' => '清澄の卷|1-2',
	'template-refsaki-bmv-pre' => '{{参考|BMV|',
	'template-refsaki-fb-pre' => '{{参考|FB|',
	'template-refsaki-afb-pre' => '{{参考|AFB|',
	'template-refsaki-mb-pre' => '{{参考|MB|',
	'template-refsaki-drama-pre' => '{{参考|DRAMA|',
	'template-refsaki-drama-example'=>'名称|3|12：00-12：05',
	'template-refsaki-dj-pre' => '{{参考|DJ|',
	'template-refsaki-dj-example'=>'名称|3|12：00-12：05',
	'template-refsaki-pre' => '{{参考|',
	'template-refsaki-example' => '来源',
	'template-refsaki-post' => '|说明=}}',
	'template-refsaki-kmsite-pre' => '{{参考|KMSITE|url=',
	'template-refsaki-kasite-pre' => '{{参考|KASITE|url=',
	'template-refsaki-amsite-pre' => '{{参考|AMSITE|url=',
	'template-refsaki-aasite-pre' => '{{参考|AASITE|url=',
	'template-refsaki-bmsite-pre' => '{{参考|BMSITE|url=',
	'template-reflist' => '显示脚注', 
	'template-call' => '称呼',
	'template-call-example' => "=== 称呼 ===
* '''他人对自己的称呼'''
** 
* '''对他人的称呼'''
** 
",
	"template-text" => '请输入内容。', 
	"template-video-id" => '请输入视频ID。', 
	"template-video-bilibili" => '哔哩哔哩', 
	"template-video-tudou" => '土豆网', 
	"template-video-qqvideo" => 'QQ视频', 
	"template-video-youku" => '优酷', 
	"template-menu-2" => '二级标题', 
	"template-menu-3" => '三级标题', 
	"template-menu-4" => '四级标题', 
	"template-menu-5" => '五级标题', 
	"template-split" => '横线', 
	"template-font-del" => '<del>删除线</del>', 
	"template-font-underline" => '<u>下划线</u>', 
	'template-color-red' => '<font color=red>红色字</font>',
	'template-color-green' => '<font color=green>绿色字</font>',
	"template-hidden" => '隐藏文字', 
	"template-hidden-example" => '<collapsetext>点击查看隐藏内容<collapse>', 
	'template-lyric' => '歌词',
	'template-quotation' => '语录',
	'template-black' => '黑幕',
	'template-black-pre' => '{{黑幕|',
	'template-jp' => '日文',
	'toolbar-template-page-role' => '角色相关模板',
	'template-debut' => '登场标识',
	'template-debut-example' => '{{登场
|KM  =  
|KMB =  
|KMM =  
|KA  =  
|AM  =  
|AMB =  
|AMM =  
|AA  =  
|AAM =  
|BM  =  
|BMM =  
}}',
	'template-family' => '家人',
	'template-family-pre' => '{{家人|',
	'template-family-example' => '家人1名称|家人1关系',
	'template-relatedrole' => '相关角色',
	'template-relatedrole-pre' => '{{相关角色|',
	'template-relatedrole-example' => '角色1|角色2|……最多支持20位角色',
	'template-info-student' => '学生',
	'template-info-student-example' => '{{学生信息框
|头像      =    
|宽度      =    
|中文名    =    
|日文名    =    
|平假名    =    
|罗马音    =    
|声优      =    
|广播剧声优=    
|国语配音  =    
|学校      =    
|地区      =    
|年级      =    
|位置      =    
|生日      =    
|国籍      =    
|角色歌    =    
}}',
	'template-info-coach' => '监督',
	'template-info-coach-example' => '{{监督信息框
|中文名    =    
|头像      =    
|宽度      =    
|日文名    =    
|平假名    =    
|罗马音    =    
|声优      =    
|广播剧声优=    
|国语配音  =    
|学校      =    
|地区      =    
|职责      =    
|国籍      =    
}}',
	'template-info-pro' => '职业雀士',
	'template-info-pro-example' => '{{雀士信息框
|中文名    =    
|头像      =    
|宽度      =    
|日文名    =    
|平假名    =    
|罗马音    =    
|声优      =    
|广播剧声优=    
|国语配音  =    
|称号      =    
|队伍      =    
|出身      =    
|生日      =    
|国籍      =    
|解说地区  =    
}}',
	'template-info-announcer' => '解说员',
	'template-info-announcer-example' => '{{解说员信息框
|头像      =    
|宽度      =    
|中文名    =    
|日文名    =    
|平假名    =    
|罗马音    =    
|声优      =    
|广播剧声优=    
|国语配音  =    
|解说地区  =    
}}',
	'template-info-role' => '其他角色',
	'template-info-role-example' => '{{角色信息框
|头像      =    
|宽度      =    
|中文名    =    
|日文名    =      
|平假名    =    
|罗马音    =    
|声优      =    
|广播剧声优=    
|国语配音  =    
|职业      =    
}}',
	'template-info-cp' => 'CP',
	'template-info-cp-example' => '{{CP信息框
|名称      =    
|图片      =    
|宽度      =    
|CP1       =    
|CP2       =    
|别名      =    
}}',
	'template-info-school' => '学校',
	'template-info-school-example' => '{{学校信息框
|简称      =    
|中文名    =    
|日文名    =    
|平假名    =    
|罗马音    =    
|地区      =    
|层次      =    
}}',
	'toolbar-template-page-doujin' => '同人相关模板',
	'template-list-doujinshi' => '同人志',
	'template-list-doujinshi-item' => '同人志',
	'template-list-doujinshi-example' => '
{{同人志
|志名        =  
|作者        =  
|社团        =  
|类型        =  
|体裁        =  
|活动        =  
|发行时间    =  
|关键字      =  
}}',
	'template-list-doujinshi-item-pre' => '{{同人志|志名=',
	'template-list-doujinshi-item-example' => '|作者=|社团=|类型=|体裁=|活动=|发行时间=|关键字=',
	'template-list-doujingame' => '同人游戏',
	'template-list-doujingame-item' => '同人游戏',
	'template-list-doujingame-example' => '
{{同人游戏
|名称        =  
|作者        =  
|社团        =  
|类型        =  
|活动        =  
|发行时间    =  
|关键字      =  
}}',
	'template-list-doujingame-item-pre' => '{{同人游戏|名称=',
	'template-list-doujingame-item-example' => '|作者=|社团=|类型=|活动=|发行时间=|关键字=',
	'template-list-circle' => '社团',
	'template-list-circle-item' => '社团',
	'template-list-circle-example' => '{{社团|社团名称|展位|简介}}',
	'template-list-circle-item-pre' => '{{社团|',
	'template-list-circle-item-example' => '社团名称|展位|简介',
	'template-list-event' => '活动',
	'template-list-event-item' => '活动',
	'template-list-event-example' => '{{活动|活动名称|展位|简介}}',
	'template-list-event-item-pre' => '{{活动|',
	'template-list-event-item-example' => '活动名称|展位|简介',
	'template-info-doujinshi' => '同人志',
	'template-info-doujinshi-example' => '{{同人志信息框
|志名      =  
|封面      =  
|宽度      =  
|社团      =  
|主催      =  
|作者      =  
|类型      =  
|体裁      =  
|页数      =  
|规格      =  
|活动      =  
|价格      =  
|发行时间  =  
|关键字    =  
|url       =  
|限制      =  
}}',
	'template-info-doujinword' => '同人文',
	'template-info-doujinword-example' => '{{同人文信息框
|标题      =  
|作者      =  
|状态      =  
|类型      =  
|语言      =  
|年龄区分  =  
|关键字    =  
|url       =  
|网站      =  
|译者      =  
|译名      =  
|译文url   =  
|译文网站  =  
}}',
	'template-info-doujingame' => '同人游戏',
	'template-info-doujingame-example' => '{{同人游戏信息框
|名称      =  
|简称      =  
|图片      =  
|宽度      =  
|社团      =  
|类型      =  
|机种      =  
|载体容量  =  
|语言版本  =  
|年龄区分  =  
|游戏人数  =  
|主催      =  
|作者      =  
|策划      =  
|剧本      =  
|程序      =  
|美工      =  
|音乐      =  
|音效      =  
|CAST      =  
|活动      =  
|价格      =  
|发行时间  =  
|关键字    =  
|url       =  
|网站      =  
}}',
	'template-info-mad' => 'MAD',
	'template-info-mad-example' => '{{MAD信息框
|名称      =  
|作者      =  
|图片      =  
|宽度      =  
|类型      =  
|nico      =  
|bilibili  =  
|acfun     =  
|关键字    =  
}}',
	'template-info-circle' => '社团',
	'template-info-circle-example' => '{{社团信息框
|社团名称  =    
|主笔      =    
|主推      =    
|地区      =    
|网站      =    
|url       =    
|Pixiv     =    
}}',
	'template-info-author' => '同人作者',
	'template-info-author-example' => '{{同人作者信息框
|名称      =    
|社团      =    
|昵称      =    
|主推      =    
|地区      =    
|网站      =    
|url       =    
|Pixiv     =    
}}',
	'template-info-event' => '活动',
	'template-info-event-example' => '{{活动信息框
|活动名称  =    
|开催时间  =    
|会场      =    
|主页      =    
|主题      =    
}}',
	'toolbar-template-page-goods' => '周边商品相关模板',
	'template-list-track' => '音轨',
	'template-list-track-example' => '音轨',
	'template-list-song' => '收录曲',
	'template-list-song-example' => '
{{收录曲
|歌曲名称  =    
|角色      =    
|备注      =    
|作曲      =    
|编曲      =    
|作词      =    
|演唱      =    
}}',
	'template-list-song-item' => '收录曲',
	'template-list-song-item-pre' => '{{收录曲|',
	'template-list-song-item-example' => '歌曲名称=|角色=|备注=|作曲=|编曲|作词|演唱=',
	'template-info-book' => '书籍',
	'template-info-book-example' => '{{书籍信息框
|书名      =    
|简称      =    
|封面      =    
|宽度      =    
|原作      =    
|发行      =    
|初版发行  =    
|发售日    =   
|价格      =    
|规格      =    
|页数      =    
|ISBN      =    
}}',
	'template-info-drama' => '广播剧',
	'template-info-drama-example' => '{{广播剧信息框
|封面      =    
|宽度      =    
|专辑名称  =    
|发售日    =    
|价格      =    
|品番      =    
}}',
	'template-info-song' => '主题曲',
	'template-info-song-example' => '{{主题曲信息框
|歌曲名称  =    
|演唱      =    
|角色      =    
|声优      =    
|类型      =    
|专辑      =    
|作曲      =    
|作词      =    
|编曲      =    
}}',
	'template-info-charactsong' => '角色歌',
	'template-info-charactsong-example' => '{{角色歌信息框
|歌曲名称  =    
|角色      =    
|声优      =    
|专辑      =    
|作曲      =    
|作词      =    
|编曲      =    
}}',
	'template-info-cd' => '专辑',
	'template-info-cd-example' => '{{专辑信息框
|专辑名称  =    
|封面      =    
|宽度      =    
|演唱      =    
|角色      =    
|声优      =    
|发售日    =    
|价格      =    
|品番      =    
}}',
	'template-info-game' => '游戏',
	'template-info-game-example' => '{{游戏信息框
|名称      =  
|图片      =  
|宽度      =  
|制作厂商  =  
|类型      =  
|机种      =  
|载体容量  =  
|语言版本  =  
|年龄区分  =  
|游戏人数  =  
|价格      =  
|品番      =  
|发售日期  =  
|url       =  
}}',
	'toolbar-template-page-mahjong' => '日本麻雀相关模板',
	'template-info-mjintro' => '日本麻雀术语',
	'template-info-mjintro-example' => '{{日本麻雀术语
|中文名    =    
|简称      =    
|简称平假名=    
|简称片假名=    
|简称罗马音=    
|日文名    =    
|平假名    =    
|片假名    =    
|罗马音    =    
}}',
	'template-info-mjtype' => '日本麻雀役种',
	'template-info-mjtype-example' => '{{日本麻雀役种
|中文名    =    
|简称      =    
|简称平假名=    
|简称片假名=    
|简称罗马音=    
|日文名    =    
|平假名    =    
|片假名    =    
|罗马音    =    
|番数      =    
|门清番数  =    
|非门清番数=    
}}',
	'template-mahjong' => '麻雀牌(大)',
	'template-mahjong-pre' => '{{麻雀|',
	'template-mahjong_min' => '麻雀牌(小)',
	'template-mahjong_min-pre' => '{{麻雀小|',
	'template-mahjongnav' => '日本麻雀导航',
	'template-mahjongnav-post' => '{{日本麻雀}}',
	'toolbar-template-page-other' => '其他模板',
	'template-tips-sptable' => '<b>特殊表格</b>',
	'template-event-table' => '年表:表格',
	'template-event-table-example' => '{| class="Event" width="100%"
! 类别
! 时间
! 地点 
! 事件
|-
| class="l" | 
| class="l" | 
| class="l" | 
| class="ld" | 
|}',
	'template-event-tr' => '年表:行',
	'template-event-tr-example' => '
|-
| 
| 
| 
| class="d" | ',
);