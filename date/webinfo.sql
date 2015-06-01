-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2015 年 05 月 31 日 11:42
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `webinfo`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `info_admin`
-- 

CREATE TABLE `info_admin` (
  `id` tinyint(3) unsigned NOT NULL auto_increment COMMENT '主键',
  `username` varchar(30) NOT NULL COMMENT '管理员名称，唯一',
  `password` varchar(32) NOT NULL COMMENT '管理员密码',
  `email` varchar(60) NOT NULL COMMENT '管理员邮箱',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `info_admin`
-- 

INSERT INTO `info_admin` VALUES (1, 'admin', 'admin', 'yangjunalns@qq.com');
INSERT INTO `info_admin` VALUES (2, 'Young1', '123456', '');
INSERT INTO `info_admin` VALUES (3, 'Eric', 'e10adc3949ba59abbe56e057f20f883e', 'ad@qq.com');
INSERT INTO `info_admin` VALUES (5, 'absc ', ' 3c9db67fd298da96a7ea6aa50da74e0', ' 122143@121.com');
INSERT INTO `info_admin` VALUES (6, 'aa ', ' 123 ', ' aa@qq.com');

-- --------------------------------------------------------

-- 
-- 表的结构 `info_article`
-- 

CREATE TABLE `info_article` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT '主键',
  `cId` int(10) unsigned NOT NULL COMMENT '所属分类id',
  `title` char(100) NOT NULL COMMENT '标题',
  `author` char(50) NOT NULL COMMENT '作者',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  `dateline` int(20) NOT NULL COMMENT '时间',
  `imagePath` varchar(60) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=19 ;

-- 
-- 导出表中的数据 `info_article`
-- 

INSERT INTO `info_article` VALUES (7, 6, '谷歌I/O黑科技：触摸屏搬到牛仔布上', ' IT之家 原创', ' IT之家讯 在每年的谷歌I/O大会上，我们总是能见到一些新奇的玩意儿，很多要归功于谷歌的ATAP研发部门。在今年的I/O大会展区中，有两样东西也是黑科技般的存在，那就是Project Jacquard和Project Soli。 ', '<p>\r\n	首先是Project Jacquard，它将可穿戴概念直接带到了织物上，在织物上进行点击和滑动操作，电脑屏幕上就会出现对应的运动轨迹，相当于把触摸屏带到了织物上，想必织物中肯定集成了柔性电子线路。\r\n然后是Project Soli，它虽然看起来其貌不扬，但只要你对着这块圆形的碟子挥挥手，屏幕上就会出现相应的轨迹，也就是它能感知物体的相对位置和运动空间，这虽然不是什么新奇的东西，但关键是里面内置的微型雷达芯片尺寸还不到一英寸，这是不是意味着以后会被应用到手机中呢？\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/myweb/plugins/kindeditor/attached/image/20150531/20150531060348_53670.jpg" alt="" width="600" height="450" title="" align="" /> \r\n</p>', 1433052262, NULL);
INSERT INTO `info_article` VALUES (8, 3, 'Now on Tap', ' 网易科技', ' 5月29日消息，彭博社网站今天发表文章称，谷歌在周四召开的2015年谷歌I/O开发者大会推出的“Now on Tap ”新功能，将对该公司未来有重大影响。多年来，由于移动应用的崛起及其相对独立的用户体验，谷歌目睹了其核心产品——搜索——的重要性正逐步下滑。用户正在为越来越多的应用所可吸引，这些应用没有与搜索进行捆绑或不需要经常使用互联网上的搜索服务。其结果是，谷歌对消费者上网习惯、兴趣和需要的掌控正面临下降的风险。 ', '5月29日消息，彭博社网站今天发表文章称，谷歌在周四召开的2015年谷歌I/O开发者大会推出的“Now on Tap ”新功能，将对该公司未来有重大影响。多年来，由于移动应用的崛起及其相对独立的用户体验，谷歌目睹了其核心产品——搜索——的重要性正逐步下滑。用户正在为越来越多的应用所可吸引，这些应用没有与搜索进行捆绑或不需要经常使用互联网上的搜索服务。其结果是，谷歌对消费者上网习惯、兴趣和需要的掌控正面临下降的风险。\r\n不过，在周四的I/O开发者大会后，谷歌可能正在扭转这一趋势。\r\n谷歌演示了其Android操作系统的新功能“Now on Tap ”，允许其GoogleNow服务（专注于用户生活和兴趣的语音助手）作为底层植入该操作系统，基本上能支持用户手机或平板电脑上运行的任何应用。只要双击home键启动，“Now on Tap ”就能无处不在。这意味着用户几乎做任何事情时，都能获得相关情景搜索信息，前提是谷歌能从该应用本身调取文本和数据。而最值得赞许的是，应用开发者不要对其现有软件做任何改变，就能让“Now on Tap ”为用户提供搜索服务和相关情景信息。\r\n例如，当用户使用Spotify听歌时，可以搜索更多有关歌手的信息，或者当用户在WhatsApp上谈论一家餐馆时，Google Now可以调取有关该餐馆的数据，甚至帮助用户预订座位。“Now on Tap ”已不仅仅是Google Now的一项功能，而是存在于整个操作系统的一个助手。\r\n“Now on Tap”是谷歌的一个重大举措，这有两个原因。首先，它确实让谷歌重返网络主宰者的地位，充当一种类似粘合剂的作用，帮助用户将数字生活进行整合。过去，谷歌网站能蓬勃发展并在网络上无处不在，是因为它具有跟踪、整合和理解功能。现在，借助“Now on Tap”，谷歌对运行于用户手机上的每一款应用也能发挥同样的功能。“Now on Tap”通过使用各款应用的通用语言，让谷歌为应用提供搜索服务。它让谷歌可以访问用户的行为和需要，从而给予该公司第二次生命。\r\n其次，“Now on Tap”显示了谷歌可以如何充当应用之间的互连层—一两种操作之间的中立平台。对于我们如何使用移动设备，以及移动应用之间如何相互配合，这将是一个巨变。目前，为了让不同应用之间相互配合，我们必须使用操作系统定义的工具（即操作系统开发者制定的规则）。但试想一下，如果开发者不需要考虑他们的应用如何与其它应用配合的问题？同时，如果“Now on Tap”能充分感知到这些应用的核心功能，并且可以预测用户最希望如何使用该应用，然后让该应用根据这些需求来运行？\r\n这是Now on Tap最终的目标，而且这将改变游戏规则。\r\n然而，“Now on Tap”技术也有其局限性。该服务将永远没有机会进入苹果封闭的iOS操作系统（而事实上，苹果无疑将效仿这一概念）。而谷歌也必须证明这种自然语言处理功能足够强大，能够实现该公司的承诺：为用户提供无缝连接的体验。\r\n但是，如果“Now on Tap”能像谷歌周四在旧金山舞台上展示的那样令人印象深刻，将为我们的设备开拓一个全新的世界，一个比以往任何时候都更加连接在一起的世界。\r\n相关阅读：', 1433051448, NULL);
INSERT INTO `info_article` VALUES (10, 5, 'Android M大彩蛋', ' it之家', ' IT之家讯 今日，Android M开发者预览版的SDK包已经开始提供下载，手持Nexus 5、Nexus 6等设备的用户可以刷机了。按照惯例，每一个安卓系统都会有彩蛋公布，Android M自然也不会例外。 ', '<div style="text-align:center;">\r\n	<img src="/myweb/plugins/kindeditor/attached/image/20150531/20150531060150_45131.jpg" alt="" width="600" height="337" title="" align="" />\r\n</div>', 1433052143, NULL);
INSERT INTO `info_article` VALUES (16, 6, '救命七式，手机掉进水里后应该这么办', ' 腾讯数码', ' 夏日来临，你可能已经打算去游泳池、海边来消暑，但显然，你的智能手机不会游泳。并非人人都喜欢有备无患，为手机戴上一个厚重的防水外壳，那么一旦手机掉入水中怎么办？不妨谨遵以下7个步骤来拯救它。 ', ' <p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>1.&nbsp;快速捞出手机</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	不论你是把手机掉入水槽、马桶还是游泳池，首要任务就是迅速捞出它（虽然恶心的马桶可能会让你犹豫）。要记住，手机落入水中的时间越短、越有“生还”希望。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215355_54.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>2.&nbsp;关机</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	捞出手机后，要立刻关机，这是为了防止电路板进一步损坏。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215430_932.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>3.&nbsp;晾干它而不是吹干它</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	当手机完全关闭后，就可以进行下一步行动了。如果你的手机可以打开后盖，那么要将SIM卡、SD卡、电池统统取出，可以使用软布或是棉签擦除一部分明显水渍；切记，不要试图用吹风机吹它，热风有可能会加速手机内部元件的损坏。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215502_792.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>4.&nbsp;将手机放入大米或硅胶干燥剂中</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	大米能够拯救手机并非传说，由于米可以有效吸附水分，所以将手机埋入大米中是可行的。当然，如果你有硅胶干燥剂，将手机和干燥剂同时放入塑料袋中也是可行的。为了确保水分被完全去除，最好将其放置三天左右。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215525_8.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>5.&nbsp;开机测试</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	如果确定手机完全干了，那么可以尝试开机和运行，如果一切正常，还需要观察几日，因为手机内部也许还存在未蒸发的水分，可能会慢慢腐蚀电子元件。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215545_802.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>6.&nbsp;适当清洁</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	当手机可以正常使用后，你可以尝试将数码产品专用清洁剂喷涂在软布上，擦拭手机表面，去除脏水的细菌。如果后盖可以打开，也可适当清洁一些内部，注意不要过湿。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215615_467.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong>7.&nbsp;为新手机购买意外保险</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	如果手机已经报废，在购买新手机之后，不妨选择手机意外保险。目前国内部分手机厂商、零售商甚至银行，都有推出手机意外损坏保险服务，一次投入几十至百元不等，可以享受一年的保险时间，在发生意外时获得赔偿，对于“手机杀手”们来说还是比较划算的。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150530_215638_951.jpg" />\r\n</p> ', 1433017187, ' 41f2aa33aa88eea5c87cfec4108915c4.jpg ');
INSERT INTO `info_article` VALUES (17, 3, '新蛋网公布Win10售价和上市日期', ' IT之家 原创', ' IT之家讯 消息灵通的俄罗斯爆料大神WZor在其Twitter上给出了新蛋网预售Win10的消息，并且声称微软已经确认了该网站给出的Win10 OEM版售价：家庭版109.99美元（约合人民币682元），专业版149.99美元（约合人民币930元）。 ', ' <p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<a class="s_tag" href="http://www.ithome.com/" target="_blank">IT之家</a>讯 消息灵通的俄罗斯爆料大神WZor在其Twitter上给出了新蛋网预售<a class="s_tag" href="http://win10.ithome.com/" target="_blank">Win10</a>的消息，并且声称<strong>微软已经确认了该网站给出的Win10 OEM版售价：家庭版109.99美元（约合人民币682元），专业版149.99美元（约合人民币930元）。</strong>\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<strong><img src="http://img.ithome.com/newsuploadfiles/2015/5/20150531_094538_731.jpg" /></strong>\r\n</p>\r\n<p style="font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';text-align:center;background-color:#FFFFFF;">\r\n	<strong>▲</strong>WZor称微软确认了新蛋网的Win10售价\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img class="lazy" src="http://img.ithome.com/newsuploadfiles/2015/5/20150531_093728_727.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	进入新蛋网美国站搜索“Windows10”，就会发现目前已开启预售的这两个Win10版本。<strong>网站给出的上市时间为2015年8月31日</strong>，也就是说在<a href="http://www.ithome.com/html/win10/152083.htm" target="_blank">Win10 RTM版出炉</a>之后的一个多月，OEM版就开始正式销售了。不过OEM版理论上是不能公开销售的，采购该版本的应该是原始设备制造商，也就是各个出售Win10系统电脑的厂商。但在尝试预订的过程中并未发现有身份限定的要求。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	细心的朋友也许会发现，这两款Win10在美国包邮哦。\r\n</p> ', 1433071847, ' f83bf3158b2e8e0e90ec5015e48bbc84.jpg ');
INSERT INTO `info_article` VALUES (18, 5, '谷歌、英飞凌开发全新芯片：可识别人脸', ' 腾讯', ' 5月31日消息，据国外媒体报道，谷歌和英飞凌正在联合开发一种足够小的芯片，这种芯片可内置于手表或腕带中用来探测手势和识别人脸。\r\n英飞凌表示，它已开发出一种雷达传感器半导体，目前正与谷歌合作探讨如何将这种半导体投入到汽车安全等方面的应用中。 ', ' <p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	5月31日消息，据国外媒体报道，谷歌和英飞凌正在联合开发一种足够小的芯片，这种芯片可内置于手表或腕带中用来探测手势和识别人脸。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	英飞凌表示，它已开发出一种雷达传感器半导体，目前正与谷歌合作探讨如何将这种半导体投入到汽车安全等方面的应用中。\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	<img src="http://img.ithome.com/newsuploadfiles/2015/5/20150531_091110_794.jpg" />\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	“这种芯片可以监测动作、识别人脸，而且尺寸很小，可应用于物联网、腕表、健身腕带或驾驶员辅助系统中，”英飞凌发言人贝恩·霍普斯(Bernd Hops)表示，“我们提供的是硬件，谷歌则在应用程序和用户体验界面上做出努力。”\r\n</p>\r\n<p style="text-align:center;font-size:16px;text-indent:2em;color:#272A30;font-family:''Microsoft Yahei'';background-color:#FFFFFF;">\r\n	谷歌正加强与汽车制造商的合作，数款车型已经整合了谷歌的Android车载信息娱乐系统。宝马计划为新一代7系汽车装备谷歌这一车载系统，该系统的信息娱乐功能是由手势所控制。\r\n</p> ', 1433072018, ' dd055fa23da5df4d54eae6fb2eb0f89f.jpg ');

-- --------------------------------------------------------

-- 
-- 表的结构 `info_cate`
-- 

CREATE TABLE `info_cate` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '主键',
  `cName` varchar(30) NOT NULL COMMENT '分类名称',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `info_cate`
-- 

INSERT INTO `info_cate` VALUES (3, 'IT资讯');
INSERT INTO `info_cate` VALUES (5, '安卓新闻');
INSERT INTO `info_cate` VALUES (6, '科技常识');

-- --------------------------------------------------------

-- 
-- 表的结构 `info_comment`
-- 

CREATE TABLE `info_comment` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '主键',
  `articleId` int(10) unsigned NOT NULL COMMENT '所属文章id',
  `userId` int(10) unsigned NOT NULL COMMENT '所属管理员id',
  `userName` varchar(50) NOT NULL COMMENT '管理员姓名',
  `comment` varchar(255) NOT NULL COMMENT '内容',
  `time` int(20) NOT NULL COMMENT '时间',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='评论表' AUTO_INCREMENT=44 ;

-- 
-- 导出表中的数据 `info_comment`
-- 

INSERT INTO `info_comment` VALUES (3, 9, 13, ' who ', '测试一下 ', 1432985679);
INSERT INTO `info_comment` VALUES (4, 9, 13, ' who ', '第二次测试 ', 1432987128);
INSERT INTO `info_comment` VALUES (5, 10, 13, ' who ', '这是测试 ', 1432987322);
INSERT INTO `info_comment` VALUES (6, 8, 13, ' who ', '将为我们的设备开拓一个全新的世界，一个比以往任何时候都更加连接在一起的世界。。 ', 1432991993);
INSERT INTO `info_comment` VALUES (7, 8, 13, ' who ', '将为我们的设备开拓一个全新的世界，一个比以往任何时候都更加连接在一起的世界。。 ', 1432992007);
INSERT INTO `info_comment` VALUES (8, 8, 13, ' who ', 'Now on Tap”通过使用各款应用的 ', 1432992198);
INSERT INTO `info_comment` VALUES (9, 8, 14, ' we ', '但是，如果“Now on Tap”能像谷歌周四 ', 1432992341);
INSERT INTO `info_comment` VALUES (10, 11, 13, ' who ', 'iOS9和长期软件支持\r\n\r\niOS9传言与iPhone6s传言如影随形。苹果尚未正式发布iOS9，但苹果可能在WWDC大会上发布iOS9。在苹果主题演讲结束之后，iOS9就会发布测试版本。\r\n\r\n据传，iOS9将与iPhone6s一同发布。6月8日，我们将看到iOS9的庐山真面目。\r\n\r\n科技网站9to5Mac称，为了更好地支持旧版硬件产品，苹果已经重新调整了软件开发流程。按照这篇报道，我们将看到iOS9更新登陆iPhone 4s等设备。 ', 1433006739);
INSERT INTO `info_comment` VALUES (11, 11, 13, ' who ', '作为iPhone6s的竞争对手，Galaxy Note 5也有很多传言。据传，Galaxy Note 5将于今年秋天发布，而且很可能是9月份。Galaxy Note 5将内置很多新功能，如果设计能达到Galaxy S6和Galaxy S6 Edge的水准，它就可以对iPhone6 Plus构成真正威胁。 ', 1433007140);
INSERT INTO `info_comment` VALUES (12, 16, 13, ' who ', '也可适当清洁一些内部，注意不要过湿。 ', 1433052573);
INSERT INTO `info_comment` VALUES (13, 16, 13, ' who ', '也可适当清洁一些内部，注意不要过湿。 ', 1433052630);
INSERT INTO `info_comment` VALUES (14, 16, 13, ' who ', '也可适当清洁一些内部，注意不要过湿。 ', 1433052768);
INSERT INTO `info_comment` VALUES (15, 16, 13, ' who ', '测试测试一下 ', 1433052790);
INSERT INTO `info_comment` VALUES (16, 16, 13, ' who ', '测试测试一下 ', 1433052899);
INSERT INTO `info_comment` VALUES (17, 16, 13, ' who ', '测试测试一下 ', 1433052949);
INSERT INTO `info_comment` VALUES (18, 16, 13, ' who ', '试试 ', 1433052958);
INSERT INTO `info_comment` VALUES (19, 16, 13, ' who ', '试试 ', 1433053006);
INSERT INTO `info_comment` VALUES (20, 8, 13, ' who ', '彭博社网站今天发表文章称 ', 1433053055);
INSERT INTO `info_comment` VALUES (21, 7, 13, ' who ', '它将可穿戴概念直接带到了织物上 ', 1433053369);
INSERT INTO `info_comment` VALUES (22, 7, 13, ' who ', '它将可穿戴概念直接带到了织物上 ', 1433053396);
INSERT INTO `info_comment` VALUES (23, 7, 13, ' who ', '它将可穿戴概念直接带到了织物上 ', 1433053412);
INSERT INTO `info_comment` VALUES (24, 7, 13, ' who ', '它将可穿戴概念直接带到了织物上 ', 1433053460);
INSERT INTO `info_comment` VALUES (25, 8, 13, ' who ', 'Now on Tap ', 1433053583);
INSERT INTO `info_comment` VALUES (26, 8, 13, ' who ', '是v ', 1433053595);
INSERT INTO `info_comment` VALUES (27, 8, 13, ' who ', 'Now on Tap ', 1433053614);
INSERT INTO `info_comment` VALUES (28, 8, 13, ' who ', 'Now on Tap ', 1433053621);
INSERT INTO `info_comment` VALUES (29, 8, 13, ' who ', 'Now on TapNow on TapNow on Tap ', 1433053627);
INSERT INTO `info_comment` VALUES (30, 8, 13, ' who ', '$mes=$mes= ', 1433053664);
INSERT INTO `info_comment` VALUES (31, 8, 13, ' who ', '$mes=$mes= ', 1433053842);
INSERT INTO `info_comment` VALUES (32, 8, 13, ' who ', '	\r\nwho    2015-05-31 06:05:07\r\nNow on TapNow on TapNow on Tap	\r\nwho    2015-05-31 06:05:07\r\nNow on TapNow on TapNow on Tap ', 1433053850);
INSERT INTO `info_comment` VALUES (33, 8, 13, ' who ', '	\r\nwho    2015-05-31 06:05:50\r\nwho 2015-05-31 06:05:07 Now on TapNow on TapNow on Tap	who 2015-05-31 06:05:07 Now on TapNow on TapNow on ', 1433053872);
INSERT INTO `info_comment` VALUES (34, 8, 13, ' who ', '大会后，谷歌可能正在扭转这一趋势。 谷歌演示了其Android操作系统的新功能“Now on Tap ”，允许其GoogleNow服务（专注于用户生活和兴趣的语音助手）作为底层植入该操作系统，基本上能支持用户手机或平板电脑上运行的任何应用。只要双击home键启动，“Now on Tap ”就能无处 ', 1433053891);
INSERT INTO `info_comment` VALUES (35, 8, 13, ' who ', '大会后，谷歌可能正在扭转这一趋势。 谷歌演示了其Android操作系统的新功能“Now on Tap ”，允许其GoogleNow服务（专注于用户生活和兴趣的语音助手）作为底层植入该操作系统，基本上能支持用户手机或平板电脑上运行的任何应用。只要双击home键启动，“Now on Tap ”就能无处 ', 1433053909);
INSERT INTO `info_comment` VALUES (36, 16, 31, ' aaaaa ', '如果你的手机可 ', 1433058718);
INSERT INTO `info_comment` VALUES (37, 16, 31, ' aaaaa ', 'casfsa  ', 1433058852);
INSERT INTO `info_comment` VALUES (38, 13, 31, ' aaaaa ', '测试法 ', 1433058922);
INSERT INTO `info_comment` VALUES (39, 17, 32, ' 杨军 ', '家庭版109.99美元（约合人民币682元） ', 1433072089);
INSERT INTO `info_comment` VALUES (40, 18, 33, ' 野山椒鸡杂1 ', '谷歌正加强与汽车制造商的合作，数款车型已经整合了谷歌的Android车载信息娱乐系统。宝马计划为新一代7系汽车装备谷歌这一车载系统，该系统的信息娱乐功能是由手势所控制。 ', 1433072498);
INSERT INTO `info_comment` VALUES (41, 18, 33, ' 野山椒鸡杂1 ', '这种芯片可以监测动作、 ', 1433072505);
INSERT INTO `info_comment` VALUES (42, 17, 33, ' 野山椒鸡杂1 ', '这种芯片可以监测动作、 ', 1433072516);
INSERT INTO `info_comment` VALUES (43, 17, 33, ' 野山椒鸡杂1 ', '后的一个多月，OEM版就开始正式销售了。不过OEM版理论上是不能公开销售的，采购该版本的应该是原始设备制造商，也就是各个出售Wi ', 1433072523);

-- --------------------------------------------------------

-- 
-- 表的结构 `info_manager`
-- 

CREATE TABLE `info_manager` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `webTitle` varchar(100) NOT NULL COMMENT '网站标题',
  `webMeta` varchar(255) NOT NULL COMMENT '网站meta描述',
  `webDescription` text NOT NULL COMMENT '后台功能简介',
  `webAuthor` varchar(50) NOT NULL COMMENT '网站作者',
  `webBlog` varchar(50) NOT NULL COMMENT '个人博客',
  `webImg` varchar(55) NOT NULL COMMENT '网站图标',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站管理表' AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `info_manager`
-- 

INSERT INTO `info_manager` VALUES (1, '暴风科技', 'it科技信息发布，手机信息，安卓手机信息，苹果产品介绍', 'it科技信息发布，手机信息，安卓手机信息，苹果产品介绍it科技信息发布，手机信息，安卓手机信息，苹果产品介绍it科技信息发布，手机信息，安卓手机信息，苹果产品介绍', '杨军', 'frank-young.github.io', '');

-- --------------------------------------------------------

-- 
-- 表的结构 `info_user`
-- 

CREATE TABLE `info_user` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '主键',
  `username` varchar(30) NOT NULL COMMENT '会员名称',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `sex` enum('男','女') NOT NULL default '男' COMMENT '性别',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `face` varchar(50) NOT NULL COMMENT '头像',
  `regTime` int(10) unsigned NOT NULL COMMENT '注册时间',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=34 ;

-- 
-- 导出表中的数据 `info_user`
-- 

INSERT INTO `info_user` VALUES (13, 'who ', ' 123456 ', '男', ' wo@we.com ', '', 1432905444);
INSERT INTO `info_user` VALUES (31, 'aaaaa ', ' aaaaa ', '男', ' aaaaaa@qq.com ', ' images/face/1.png', 1433058694);
INSERT INTO `info_user` VALUES (32, '杨军 ', ' 123456 ', '男', ' yang@11.com ', 'images/face/3.png ', 1433072049);
INSERT INTO `info_user` VALUES (33, '野山椒鸡杂1 ', ' 123456q ', '男', ' qwer@11.com ', ' images/face/7.png', 1433072448);
