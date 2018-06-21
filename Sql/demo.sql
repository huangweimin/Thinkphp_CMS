/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : thinkphp

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 21/06/2018 11:16:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tp_about
-- ----------------------------
DROP TABLE IF EXISTS `tp_about`;
CREATE TABLE `tp_about` (
  `content` text,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_about
-- ----------------------------
BEGIN;
INSERT INTO `tp_about` VALUES ('&lt;p&gt;\n	云适配(AllMobilize Inc.) 是全球领先的HTML5企业移动化解决方案供应商，由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家在美国西雅图创立，并获得了微软创投的扶持以及晨兴资本、IDG资本、天创资本等国际顶级风投机构的投资。\n从2012年至今，云适配的开放技术平台已经吸引了超过40万开发者加入；云适配跨屏云也成功应用于超过30万家企业网站，包括微软、联想等世界500强企业，光明网、中国青年报等知名媒体，清华、北大、中科大等知名大学，以及中国政府网、中国共产党网等政府机构。2014年6月，比尔·盖茨先生访华时特地观看了云适配的技术演示，并给予高度的赞赏。\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;', 1);
COMMIT;

-- ----------------------------
-- Table structure for tp_cases
-- ----------------------------
DROP TABLE IF EXISTS `tp_cases`;
CREATE TABLE `tp_cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `content` text,
  `cover` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `is_show` varchar(255) DEFAULT '1',
  `is_deleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_cases
-- ----------------------------
BEGIN;
INSERT INTO `tp_cases` VALUES (1, '和平宣言', '外媒称，韩国总统府青瓦台6月5日对特朗普和朝鲜最高领导人金正恩即将举行的峰会表示欢迎，称韩国衷心希望这次历史性会晤取得成功。', '外媒称，韩国总统府青瓦台6月5日对特朗普和朝鲜最高领导人金正恩即将举行的峰会表示欢迎，称韩国衷心希望这次历史性会晤取得成功。\n\n据韩联社6月5日报道，在白宫发布朝美峰会将于12日上午9点举行的消息的几个小时后，青瓦台便发表简短声明说：“我国政府希望朝美峰会取得成功。”\n\n青瓦台强调，韩国将继续谋求正式结束战争，但这取决于朝美峰会成功与否。声明说：“其他问题——如终战宣言——将由韩国、朝鲜和美国在国际社会的密切合作下进行。”', '2018-06-14/5b221b39a99ee.png', '2018-06-13 09:42:16', '1', '0');
INSERT INTO `tp_cases` VALUES (2, '云南省办理中央环境保护督察', '截止目前共计接收到中央第六环保督察组五批次共计255件交办件,涉及大气、噪声、土壤、辐射、水污染和生态破坏等环境问题。各有关地方和部门正在办理当中。', '昆明信息港讯中央第六环境保护督察组于6月5日进驻云南省开展环境保护督察“回头看”工作,并向社会公开了受理群众投诉举报我省环境问题的电话和邮政信箱,这一举措得到了广大人民群众的积极响应,6月5日以来,陆续收到全省各地群众的投诉举报。按照“每天一汇总,每天一转办”的工作制度。6月9日21:30,督察组向我省交办第五批群众举报投诉环境问题62件(含来信举报11件)。当日22:36,云南省环境保护督察工作领导小组办公室已将“回头看”督察组交办我省的第五批62个环境问题全部移交相关州(市)进行办理', '2018-06-15/5b23159673586.png', '2018-06-13 09:42:19', '1', '0');
INSERT INTO `tp_cases` VALUES (3, '地素时尚周二申购', '晨报讯6月12日，地素时尚股份有限公司IPO申购', '晨报讯6月12日，地素时尚股份有限公司IPO申购。公司此次发行6100万股，申购价格27.52元，发行市盈率22.99倍，拟募集资金15.82亿元。其中网上发行1830万股，申购代码为732587，单一账户申购上限1.8万股。如无意外，A股又将迎来一只时装股。不过，目前公司尚有两起案件未完全“了结”，其实际控制人马瑞敏的前夫钱维6月5日再次举报地素时尚涉嫌“带病上市”。&lt;img src=&quot;/Uploads/2018-06-13/5b20b37e522b0.png&quot; alt=&quot;&quot; /&gt;', '2018-06-13/5b20b3a840ff5.png', '2018-06-13 09:42:39', '0', '1');
COMMIT;

-- ----------------------------
-- Table structure for tp_comments
-- ----------------------------
DROP TABLE IF EXISTS `tp_comments`;
CREATE TABLE `tp_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_show` varchar(255) DEFAULT '1',
  `phone` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_comments
-- ----------------------------
BEGIN;
INSERT INTO `tp_comments` VALUES (1, '管理员', 'admin@qq.com', '1', '138241xxxx', '我的留言是XX', '深圳', '0', NULL);
INSERT INTO `tp_comments` VALUES (2, '2', NULL, '1', NULL, NULL, NULL, '1', NULL);
INSERT INTO `tp_comments` VALUES (3, '3', '', '1', '', '1', '', '1', '2018-06-14 11:59:02');
INSERT INTO `tp_comments` VALUES (4, '333', '', '1', '', '333', '', '1', '2018-06-14 11:59:23');
INSERT INTO `tp_comments` VALUES (5, '33', '', '1', '', '44', '', '1', '2018-06-14 12:00:07');
INSERT INTO `tp_comments` VALUES (6, '测试用户', 'test@qq.com', '1', '138241xxx1', '留言内容', '', '0', '2018-06-14 12:02:08');
INSERT INTO `tp_comments` VALUES (7, '123', '33', '1', '123', '444', '22', '1', '2018-06-14 12:04:30');
INSERT INTO `tp_comments` VALUES (8, 'f2e', '', '1', '13824122222', 'adf', '', '1', '2018-06-14 17:20:48');
COMMIT;

-- ----------------------------
-- Table structure for tp_custom
-- ----------------------------
DROP TABLE IF EXISTS `tp_custom`;
CREATE TABLE `tp_custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` text,
  `value` text,
  `is_deleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_custom
-- ----------------------------
BEGIN;
INSERT INTO `tp_custom` VALUES (1, 'site_name', 'Think PHP', '0');
INSERT INTO `tp_custom` VALUES (2, 'copyright', '2017-2018 by Smile', '0');
INSERT INTO `tp_custom` VALUES (8, 'hm', '我的衣服2', '0');
INSERT INTO `tp_custom` VALUES (9, 'hm2', '我的衣服', '1');
COMMIT;

-- ----------------------------
-- Table structure for tp_news
-- ----------------------------
DROP TABLE IF EXISTS `tp_news`;
CREATE TABLE `tp_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_show` varchar(255) DEFAULT '1',
  `desc` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `is_deleted` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_news
-- ----------------------------
BEGIN;
INSERT INTO `tp_news` VALUES (1, '想pick坤音四子', '&lt;p&gt;\n	和头脑风暴一起见证卜可思议啦！\n《机器人争霸》经历了种种磨难就要到决赛啦，男神的颜值你还没有看够？炫酷的机甲还让你有些迷茫？放心跟我们一起来，现场教学机器人最全知识点，围&lt;span style=&quot;background-color:#FF9900;&quot;&gt;观狂炫拽的机器人battle 23123&amp;nbsp; 12&lt;/span&gt;\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;span style=&quot;background-color:#FF9900;&quot;&gt;&lt;br /&gt;\n&lt;/span&gt; \n&lt;/p&gt;\n&lt;p&gt;\n	&lt;span style=&quot;background-color:#FF9900;&quot;&gt;&lt;img src=&quot;/Uploads/2018-06-14/5b2222e680588.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;\n&lt;/span&gt; \n&lt;/p&gt;', '2018-06-11 13:14:46', '行业新闻', '1', '和头脑风暴一起见证卜可思议啦！22', 2, 0);
INSERT INTO `tp_news` VALUES (2, '富士康回应亚马逊代工“血汗工厂：正在调查', 'IT之家6月11日消息 劳工权益保护组织中国劳工观察（China Labor Watch）揭示了亚马逊在中国的一家富士康代工厂的劳动条件，对其进行了严厉的抨击。今日根据路透社的报道，富士康已经对此事进行了回应。', '2018-06-11 13:15:33', '公司新闻', '1', '路透社在报道中表示，富士康在一份声明中表示.', 1, 0);
INSERT INTO `tp_news` VALUES (5, '长宁区“十三五”规划实施情况中期评估调查问卷', '为评估《上海市长宁区国民经济和社会发展第十三个五年规划纲要》（2016-2020）近两年半的实施情况，了解大家对长宁区经济社会发展情况的感受和建议，并根据新形势、新变化，对“十三五”规划内容作进一步优化，特开展中期评估调研工作。本次调查结果仅限中期评估课题研究，不做其他用途。', '2018-06-12 20:48:43', '公司新闻', '1', '长宁区“十三五”规划实施情况中期评估调查问卷', 1, 0);
INSERT INTO `tp_news` VALUES (6, '文编辑\n宕昌县公安局迅速传达全市“扫黑除恶”', '会上，局党委副书记、政委王新怀就局党委多次召开“扫黑除恶”专项斗争工作专题会议的目的和抓好“扫黑除恶”专项斗争各项工作措施的贯彻落实进行了强调，指出公安机关作为“扫黑除恶”专项斗争的排头兵和主力军，要求各有关部门特别是负责同志要进一步提高思想认识和政治站位，切实尽好责、履好职。\n\n最后，局党委委员张玉安对扫黑除恶专项斗争中关于黑恶势力的认定标准、黑恶势力犯罪案件的侦办及线索排摸等工作进行了讲解。', '2018-06-12 20:49:33', '公司新闻', '1', '文编辑\n宕昌县公安局迅速传达全市“扫黑除恶”', 1, 0);
INSERT INTO `tp_news` VALUES (7, '男单女单决赛国乒均输日本', '国际乒联日本公开赛已经全部结束了，然而让人意外的是，中国男单和女单都丢掉了最后的冠军。正在恢复状态的张继科以3:4的比分遗憾的输给了一周前曾经横扫自己的张本智和，而近期势头正盛的王曼昱在决赛中2:4输给了日本的小将伊藤美诚，加上此前中国队的男单组合，在决赛中也输给了韩国组合，在本次日本公开赛上，中国乒乓球队堪称溃败。', '2018-06-12 20:50:03', '公司新闻', '1', '男单女单决赛国乒均输日本', 1, 0);
INSERT INTO `tp_news` VALUES (8, '我市打击通讯网络诈骗犯罪成效显著', '今日（6号），市公安局召开防范电信网络诈骗犯罪月打击通讯网络诈骗犯罪宣传月和“夏安”专项行动新闻通气会，向媒体通报当前我市打击通讯网络诈骗犯罪工和夏季治安防控整治情况。', '2018-06-12 20:50:06', '公司新闻', '1', '我市打击通讯网络诈骗犯罪成效显著', 1, 0);
INSERT INTO `tp_news` VALUES (9, '为高考保驾护航 泸州220台出租汽车免费接送考生', '四川新闻网泸州6月6日讯（黄恩富）6月5日，泸州出租汽车行业第十四届“你拼搏，我奉献”高考学子免费接送大型公益活动启动仪式在市运管局举行。高考期间，高考学生及家属可凭准考证免费乘座带有“高考免费接送车”标志的出租汽车。\n\n此次爱心送考活动是由泸州市道路运输管理局、泸州市道协出租汽车专委会主办，主城区15家出租汽车公司承办，一汽大众泸州松明4S店、泸州比亚迪忠山4S店、上海大众泸州弘洋4S店协办的大型爱心公益活动。\n\n泸州市道路运输管理局局长王卉出席了启动仪式并宣布启动。\n\n泸州出租汽车行业第十四届“你拼搏，我奉献”高考学子免费接送大型公益活动本着自愿加入、积极参与、共同承办的原则，主城区15家出租汽车公司的220台出租汽车踊跃报名参加，30余台出租汽车参加了启动仪式。自2005年我市首次开展“出租汽车免费接送高考学生活动”以来，迄今为止已连续开展了十四届。截止目前，今年送考车辆自愿报名数已经到了220辆，今年的这些爱心车队除继续秉承一如既往的送考精神，为考生传递更多的正能量，给他们营造方便、快捷、安全的乘车环境，把每一辆爱心车打造成了流动的文明窗口，让社会见证了这个行业一次又一次的爱心接力，为泸州的平安高考，做出贡献！', '2018-06-12 20:50:08', '行业新闻', '1', '为高考保驾护航 泸州220台出租汽车免费接送考生', 2, 0);
INSERT INTO `tp_news` VALUES (10, '2018年高考理科综合试卷第8题有两个答案', '&lt;p&gt;\n	又是一年高考，备受瞩目的高考已经结束，但是考后的工作更加紧张。今日山东省教育考试院针对理科综合试卷第八题的答案做出官方说明，原文如下：“经高考理科综合科目评卷专家组评议认为，我省使用的2018年高考理科综合试卷第8题本身无问题。考虑到不同群体从不同角度，对该试题B选项有不同理解，也考虑到高中教学实际，综合各方面的意见，经专家组研究，我省确定对该题单选A或单选B的答卷均给6分。”\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;br /&gt;\n&lt;/p&gt;\n&lt;p&gt;\n	&lt;img src=&quot;/Uploads/2018-06-15/5b2315638969e.png&quot; alt=&quot;&quot; /&gt;\n&lt;/p&gt;', '2018-06-12 20:50:11', '行业新闻', '1', '2018年高考理科综合试卷第8题有两个答案', 2, 0);
INSERT INTO `tp_news` VALUES (11, '赵本山女儿球球有好消息传出', '赵本山女儿公布恋情之后，受到很多网友关注。球球在个人社交平台上晒出自己与一名男子的合影短片，两人当时看上去都非常开心。之后球球还配文说，感谢有人包容他的任性，愿意做她的白马王子。球球是赵本山的小女儿，她虽然没有出道，但经常在个人社交网站上做视频直播，所以对于她的认知，粉丝并不陌生。独特的宣布恋情方式，也是受到不少粉丝点赞。赵本山这下应该放心啦，女儿身边终于有了个可靠的男孩来保护她。', '2018-06-12 20:50:14', '行业新闻', '1', '赵本山女儿球球有好消息传出', 2, 0);
INSERT INTO `tp_news` VALUES (12, '马思纯《我是大侦探》收官之战', '​由何炅、马思纯、吴磊、邓伦、大张伟、张若昀等共同加盟的大型情景类益智互动推理秀《我是大侦探》于上周六晚播出收官之战上期。本期节目中，六位嘉宾分成两队，马思纯担任队长之一，与邓伦组进行推理PK，开启快节奏烧脑风暴。\n\n本期节目规则与往常不同，三个故事呈现，两队分开搜证推理，规定时间内投票选K，赢取更多金钥匙。在如此快节奏短时间的限制下，身为队长的马思纯带领侦探队员们深入现场细密搜证，烧脑推敲开启密码锁，不放过任何一个细节，联合推理寻找真相，共同破案。三个故事中马思纯都会以不同造型亮相，身份也会随之变化，精彩剧情引发观众强烈期待。', '2018-06-12 20:50:20', '行业新闻', '1', '马思纯《我是大侦探》收官之战', 2, 0);
INSERT INTO `tp_news` VALUES (13, '七国集团VS上合组织', '6月9日，在山东青岛，包括中国在内的上合组织8个成员国、4个观察员国领导人，以及有关国际组织负责人齐聚一堂，共商合作。\n\n\n\n6月8-9日，另外一场以美国为主的外交活动——七国集团（G7）首脑会议在加拿大魁北克“粉墨登台”。\n\n\n\n一东一西两场峰会，几乎同时进行，但它们向世界呈现的，却是截然不同的氛围和画风：当全世界都在期待上合组织峰会为国际社会提供全新合作思路时，G7峰会却可能因为美国的存在而陷入前所未有的“混乱”与“分裂”。\n\n', '2018-06-12 20:50:24', '公司新闻', '1', '123', 1, 0);
INSERT INTO `tp_news` VALUES (14, '海贼王漫画907话', '海贼王907话，头戴皇冠的天龙人手中拿着路飞的悬赏令来到草帽面前，在最新一话中，尾田为之前伏笔揭秘的同时又埋下了一个更大的伏笔，天龙人为什么要收藏一顶草帽，天龙人为什么会惧怕D之一族，一时间这些问题再次出现在我们面前。', '2018-06-12 20:50:28', '行业新闻', '0', '海贼王漫画907话123', 2, 0);
INSERT INTO `tp_news` VALUES (16, '123', '', '2018-06-12 22:51:22', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (17, '12344', '', '2018-06-12 22:55:48', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (18, '123', '', '2018-06-12 23:28:38', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (19, '123', '', '2018-06-12 23:30:30', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (20, '44', '', '2018-06-13 09:27:36', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (21, '222', '', '2018-06-13 15:13:25', '公司新闻', '1', '', 1, 1);
INSERT INTO `tp_news` VALUES (22, '111', '', '2018-06-15 10:00:09', '公司新闻', '1', '', 1, 0);
INSERT INTO `tp_news` VALUES (23, '333', '', '2018-06-15 10:02:34', '公司新闻', '1', '', 1, 0);
COMMIT;

-- ----------------------------
-- Table structure for tp_system
-- ----------------------------
DROP TABLE IF EXISTS `tp_system`;
CREATE TABLE `tp_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `keyword` text,
  `desc` text,
  `footer_js` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_system
-- ----------------------------
BEGIN;
INSERT INTO `tp_system` VALUES (1, 'Think php web ', 'think ', 'This is a templete', '&lt;script\n  src=&quot;https://code.jquery.com/jquery-3.3.1.slim.js&quot;\n  integrity=&quot;sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=&quot;\n  crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;');
COMMIT;

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
BEGIN;
INSERT INTO `tp_user` VALUES (1, 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'admin@qq.com', '2018-06-13 14:38:10', '1', '0');
INSERT INTO `tp_user` VALUES (16, 'c4ca4238a0b923820dcc509a6f75849b', '222', NULL, '2018-06-14 16:58:46', NULL, '1');
INSERT INTO `tp_user` VALUES (17, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '33', NULL, '2018-06-14 16:59:11', NULL, '1');
INSERT INTO `tp_user` VALUES (19, '202cb962ac59075b964b07152d234b70', '123', NULL, '2018-06-14 17:00:05', NULL, '1');
INSERT INTO `tp_user` VALUES (22, 'c4ca4238a0b923820dcc509a6f75849b', '1', NULL, '2018-06-14 17:01:56', NULL, '1');
INSERT INTO `tp_user` VALUES (26, '182be0c5cdcd5072bb1864cdee4d3d6e', '1', NULL, '2018-06-14 17:03:40', NULL, '1');
INSERT INTO `tp_user` VALUES (27, '202cb962ac59075b964b07152d234b70', 'guest', NULL, '2018-06-14 17:14:02', NULL, '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
