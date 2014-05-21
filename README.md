**SakiWiki**的WikiEditor，修改自0.3.1版的[WikiEditor](https://github.com/wikimedia/mediawiki-extensions-WikiEditor)，适用于1.19+的[MediaWiki](https://github.com/wikimedia/mediawiki-core)。

增加了一个Template页面，用于插入自定义的模板，目前模板信息只能在TemplateInserter扩展中配置。

使用时需要在WikiEditor之后引用TemplateInserter。

`require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );

require_once( "$IP/extensions/TemplateInserer/TemplateInserer.php" );`

效果图：

![效果图](https://github.com/SakiCC/SakiWikiEditor/raw/master/screenshot.jpg)

具体修改可参考：[《通过WikiEditor快捷插入模板》](http://blog.01000.name/?p=1513)