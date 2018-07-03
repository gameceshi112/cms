-- MySQL dump 10.13  Distrib 5.5.56, for Linux (x86_64)
--
-- Host: localhost    Database: master_com
-- ------------------------------------------------------
-- Server version	5.5.56-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `qk_cate`
--

DROP TABLE IF EXISTS `qk_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qk_cate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qk_cate`
--

LOCK TABLES `qk_cate` WRITE;
/*!40000 ALTER TABLE `qk_cate` DISABLE KEYS */;
INSERT INTO `qk_cate` VALUES (42,'色站群'),(41,'BC站群');
/*!40000 ALTER TABLE `qk_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qk_list`
--

DROP TABLE IF EXISTS `qk_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qk_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `durl` varchar(500) DEFAULT NULL,
  `kwz` varchar(255) DEFAULT NULL,
  `ext` tinyint(1) DEFAULT NULL,
  `pn` int(11) DEFAULT '100',
  `zmlm` varchar(100) DEFAULT '123',
  `yml` tinyint(2) DEFAULT NULL,
  `eml` tinyint(2) DEFAULT NULL,
  `xwbt` tinyint(2) DEFAULT NULL,
  `main_url` varchar(500) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `last_end_time` int(10) DEFAULT '0',
  `is_atuo` int(3) NOT NULL DEFAULT '0',
  `times_per_day` int(10) NOT NULL DEFAULT '4',
  `cate_id` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qk_list`
--

LOCK TABLES `qk_list` WRITE;
/*!40000 ALTER TABLE `qk_list` DISABLE KEYS */;
INSERT INTO `qk_list` VALUES (35,'http://n1.d58.net/1206/','http://www.maiqism.com/',1,300,'momo',4,0,2,'http://www.maiqism.com/',0,1530596295,0,2,41),(39,'http://n1.d58.net/1206/','http://www.hggclub.com/',1,300,'',4,4,2,'http://www.hggclub.com/',0,1530605555,1,2,41),(42,'http://n1.d58.net/1206/','http://www.cibcchina.com/',1,300,'',4,4,2,'http://www.cibcchina.com/',0,1530604307,1,2,41),(41,'http://n1.d58.net/1206/','http://www.gdbogu.com/',1,300,'',4,4,2,'http://www.gdbogu.com/',0,1530598625,1,2,41),(43,'http://n1.d58.net/1206/','http://www.txt173.com/',1,300,'',4,4,2,'http://www.txt173.com/',0,1530594194,1,2,41),(44,'http://n1.d58.net/1206/','http://www.xst1997.com/',1,300,'',4,4,2,'http://www.xst1997.com/',0,1530632564,1,2,41),(46,'http://n1.d58.net/1206/','http://www.mingarhk.com/',1,300,'',4,4,2,'http://www.mingarhk.com/',0,1530611592,1,2,41),(47,'http://n1.d58.net/1206/','http://www.shviq.com/',1,300,'',4,4,2,'http://www.shviq.com/',0,1530613986,1,2,41),(48,'http://n1.d58.net/1206/','http://www.exigou.com/',1,300,'',4,4,2,'http://www.exigou.com/',0,1530593545,1,2,42),(49,'http://n1.d58.net/1206/','http://www.yeywjc.com/',1,300,'',4,4,2,'http://www.yeywjc.com/',0,1530594026,1,2,41),(50,'http://n1.d58.net/1206/','http://www.sdicjc.com/',1,300,'',4,4,2,'http://www.sdicjc.com/',0,1530594566,1,2,41),(51,'http://n1.d58.net/1206/','http://www.czsxjxc.com/',1,300,'',4,4,2,'http://www.czsxjxc.com/',0,1530595064,1,2,41),(52,'http://n1.d58.net/1206/','http://www.hmsszz.com/',1,300,'',4,4,2,'http://www.hmsszz.com/',0,1530595456,1,2,41),(53,'http://n1.d58.net/1206/','http://www.zjcqs.com/',1,300,'',4,4,2,'http://www.zjcqs.com/',0,1530595785,1,2,41),(54,'http://n1.d58.net/1206/','http://www.nchdmd.com/',1,300,'',4,4,2,'http://www.nchdmd.com/',0,1530596187,1,2,41),(55,'http://n1.d58.net/1206/','http://www.gyctb.com/',1,300,'',4,4,2,'http://www.gyctb.com/',0,1530596526,1,2,41),(56,'http://n1.d58.net/1206/','http://www.wmjqly.com/',1,300,'',4,4,2,'http://www.wmjqly.com/',0,1530597196,1,2,41),(57,'http://n1.d58.net/1206/','http://www.mstcy.com/',1,300,'',4,4,2,'http://www.mstcy.com/',0,1530597496,1,2,41),(58,'http://n1.d58.net/1206/','http://www.jieshouw.com/',1,300,'',4,4,2,'http://www.jieshouw.com/',0,1530597917,1,2,41),(59,'http://n1.d58.net/1206/','http://www.nphgzrcw.com/',1,300,'',4,4,2,'http://www.nphgzrcw.com/',0,1530598306,1,2,41),(60,'http://n1.d58.net/1206/','http://www.tiancx.com/',1,300,'',4,4,2,'http://www.tiancx.com/',0,1530598695,1,2,41),(61,'http://n1.d58.net/1206/','http://www.kezhuoyi006.com/',1,300,'',4,4,2,'http://www.kezhuoyi006.com/',0,1530599016,1,2,41),(62,'http://n1.d58.net/1206/','http://www.ziliaobar.com/',1,300,'',4,4,2,'http://www.ziliaobar.com/',0,1530599499,1,2,41),(63,'http://n1.d58.net/1206/','http://www.yzhangwan.com/',1,300,'',4,4,2,'http://www.yzhangwan.com/',0,1530600046,1,2,41),(64,'http://n1.d58.net/1206/','http://www.19819888.com/',1,300,'',4,4,2,'http://www.19819888.com/',0,1530600538,1,2,41),(65,'http://n1.d58.net/1206/','http://www.szxlcz.com/',1,300,'',4,4,2,'http://www.szxlcz.com/',0,1530600925,1,2,41),(66,'http://n1.d58.net/1206/','http://www.cy1s.com/',1,300,'',4,4,2,'http://www.cy1s.com/',0,1530601777,1,2,41),(67,'http://n1.d58.net/1206/','http://www.grtmq.com/',1,300,'',4,4,2,'http://www.grtmq.com/',0,1530602085,1,2,41),(68,'http://n1.d58.net/1206/','http://www.nkmztj.com/',1,300,'',4,4,2,'http://www.nkmztj.com/',0,1530606387,1,2,41),(69,'http://n1.d58.net/1206/','http://www.ufosay.com/',1,300,'',4,4,2,'http://www.ufosay.com/',0,1530606867,1,2,41),(70,'http://n1.d58.net/1206/','http://www.365tbj.com/',1,300,'',4,4,2,'http://www.365tbj.com/',0,1530607360,1,2,41),(71,'http://n1.d58.net/1206/','http://www.acintb.com/',1,300,'',4,4,2,'http://www.acintb.com/',0,1530605216,1,2,41),(72,'http://n1.d58.net/1206/','http://www.idcprc.com/',1,300,'',4,4,2,'http://www.idcprc.com/',0,1530608575,1,2,41),(73,'http://n1.d58.net/1206/','http://www.anfang77.com/',1,300,'',4,4,2,'http://www.anfang77.com/',0,1530609395,1,2,41),(74,'http://n1.d58.net/1206/','http://www.wxqrcode.com/',1,300,'',4,4,2,'http://www.wxqrcode.com/',0,1530610461,1,2,41),(75,'http://n1.d58.net/1206/','http://www.sampuxdp.com/',1,300,'',4,4,2,'http://www.sampuxdp.com/',0,1530610966,1,2,41),(76,'http://n1.d58.net/1206/','http://www.dsuuuu.com/',1,300,'',4,4,2,'http://www.dsuuuu.com/',0,1530611385,1,2,41),(77,'http://n1.d58.net/1206/','http://www.010sc.com',1,300,'',4,4,2,'http://www.010sc.com',0,1530611611,1,2,41),(78,'http://n1.d58.net/1206/','http://www.bbczly.com/',1,300,'',4,4,2,'http://www.bbczly.com/',0,1530612075,1,2,41),(79,'http://n1.d58.net/1206/','http://www.03hr.com/',1,300,'',4,4,2,'http://www.03hr.com/',0,1530612430,1,2,41),(80,'http://n1.d58.net/1206/','http://www.vipter.com/',1,300,'',4,4,2,'http://www.vipter.com/',0,1530613427,1,2,41),(81,'http://n1.d58.net/1206/','http://www.hongkejidi.com/',1,300,'',4,4,2,'http://www.hongkejidi.com/',0,1530613995,1,2,41),(82,'http://n1.d58.net/1206/','http://www.sxtyys.com/',1,300,'',4,4,2,'http://www.sxtyys.com/',0,1530593205,1,2,41),(83,'http://n1.d58.net/1206/','http://www.zhaoyi52.com/',1,300,'',4,4,2,'http://www.zhaoyi52.com/',0,1530593495,1,2,41),(84,'http://n1.d58.net/1206/','http://www.klltw.com/',1,300,'',4,4,2,'http://www.klltw.com/',0,1530593816,1,2,41),(85,'http://n1.d58.net/1206/','http://www.rrtzq.com/',1,300,'',4,4,2,'http://www.rrtzq.com/',0,1530594206,1,2,41),(86,'http://n1.d58.net/1206/','http://www.wdsj58.com/',1,300,'',4,4,2,'http://www.wdsj58.com/',0,1530594503,1,2,41),(87,'http://n1.d58.net/1206/','http://www.ntxne.com/',1,300,'',4,4,2,'http://www.ntxne.com/',0,1530594865,1,2,41),(88,'http://n1.d58.net/1206/','http://www.dgyzh.com/',1,300,'',4,4,2,'http://www.dgyzh.com/',0,1530595305,1,2,41),(89,'http://n1.d58.net/1206/','http://www.cshmww.com/',1,300,'',4,4,2,'http://www.cshmww.com/',0,1530595706,1,2,41),(90,'http://n1.d58.net/1206/','http://www.0518t.com/',1,300,'',4,4,2,'http://www.0518t.com/',0,1530596015,1,2,41),(91,'http://n1.d58.net/1206/','http://www.shimian123.com/',1,300,'',4,4,2,'http://www.shimian123.com/',0,1530596446,1,2,41),(92,'http://n1.d58.net/1206/','http://www.txjtby.com/',1,300,'',4,4,2,'http://www.txjtby.com/',0,1530596955,1,2,41),(93,'http://n1.d58.net/1206/','http://www.nyyfsm.com/',1,300,'',4,4,2,'http://www.nyyfsm.com/',0,1530597325,1,2,41),(94,'http://n1.d58.net/1206/','http://www.ennichina.com/',1,300,'',4,4,2,'http://www.ennichina.com/',0,1530598291,1,2,41),(95,'http://n1.d58.net/1206/','http://www.shidengv.com/',1,300,'',4,4,2,'http://www.shidengv.com/',0,1530598619,1,2,41),(96,'http://n1.d58.net/1206/','http://www.4000871920.com/',1,300,'',4,4,2,'http://www.4000871920.com/',0,1530598957,1,2,41),(97,'http://n1.d58.net/1206/','http://www.xyzhaojiao.com/',1,300,'',4,4,2,'http://www.xyzhaojiao.com/',0,1530602755,1,2,41),(98,'http://n1.d58.net/1206/','http://www.jyhlm.com/',1,300,'',4,4,2,'http://www.jyhlm.com/',0,1530603248,1,2,41),(99,'http://n1.d58.net/1206/','http://www.shouchaoqi.com/',1,300,'',4,4,2,'http://www.shouchaoqi.com/',0,1530603647,1,2,41),(101,'http://n1.d58.net/1206/','http://www.hzhgsb.com/',1,300,'',4,4,2,'http://www.hzhgsb.com/',0,1530606286,1,2,41),(100,'http://n1.d58.net/1206/','http://www.amyts.com/',1,300,'',4,4,2,'http://www.amyts.com/',0,1530605576,1,2,41),(102,'http://n1.d58.net/1206/','http://www.jlyzzk.com/',1,300,'',4,4,2,'http://www.jlyzzk.com/',0,1530606665,1,2,41),(103,'http://n1.d58.net/1206/','http://www.blsdky.com/',1,300,'',4,4,2,'http://www.blsdky.com/',0,1530607196,1,2,41),(104,'http://n1.d58.net/1206/','http://www.kileto.com/',1,300,'',4,4,2,'http://www.kileto.com/',0,1530608046,1,2,41),(105,'http://n1.d58.net/1206/','http://www.sybcdhs.com/',1,300,'',4,4,2,'http://www.sybcdhs.com/',0,1530608336,1,2,41),(106,'http://n1.d58.net/1206/','http://www.deosion.com/',1,300,'',4,4,2,'http://www.deosion.com/',0,1530608647,1,2,41),(107,'http://n1.d58.net/1206/','http://www.byhqwpc.com/',1,300,'',4,4,2,'http://www.byhqwpc.com/',0,1530608965,1,2,41),(108,'http://n1.d58.net/1206/','http://www.ychuade.com/',1,300,'',4,4,2,'http://www.ychuade.com/',0,1530609307,1,2,41),(109,'http://n1.d58.net/1206/','http://www.yixing123.com/',1,300,'',4,4,2,'http://www.yixing123.com/',0,1530609985,1,2,41),(110,'http://n1.d58.net/1206/','http://www.wmliku.com/',1,300,'',4,4,2,'http://www.wmliku.com/',0,1530608995,1,2,41),(111,'http://n1.d58.net/1206/','http://www.jqsgj.com/',1,300,'',4,4,2,'http://www.jqsgj.com/',0,1530609286,1,2,41),(112,'http://n1.d58.net/1206/','http://www.woma1688.com/',1,300,'',4,4,2,'http://www.woma1688.com/',0,1530609597,1,2,41),(113,'http://n1.d58.net/1206/','http://www.mmkeji.com/',1,300,'',4,4,2,'http://www.mmkeji.com/',0,1530609905,1,2,41),(114,'http://n1.d58.net/1206/','http://www.3ljc.com/',1,300,'',4,4,2,'http://www.3ljc.com/',0,1530610234,1,2,41),(115,'http://n1.d58.net/1206/','http://www.747k.com/',1,300,'',4,4,2,'http://www.747k.com/',0,1530610585,1,2,41),(116,'http://n1.d58.net/1206/','http://www.yddms.com/',1,300,'',4,4,2,'http://www.yddms.com/',0,1530610906,1,2,41),(117,'http://n1.d58.net/1206/','http://www.ikorcn.com/',1,300,'',4,4,2,'http://www.ikorcn.com/',0,1530611203,1,2,41),(118,'http://n1.d58.net/1206/','http://www.npdiy.com/',1,300,'',4,4,2,'http://www.npdiy.com/',0,1530611505,1,2,41),(119,'http://n1.d58.net/1206/','http://www.lzttd.com/',1,300,'',4,4,2,'http://www.lzttd.com/',0,1530611905,1,2,41),(120,'http://n1.d58.net/1206/','http://www.nbrmu.com/',1,300,'',4,4,2,'http://www.nbrmu.com/',0,1530612215,1,2,41),(121,'http://n1.d58.net/1206/','http://www.yclgy.com/',1,300,'',4,4,2,'http://www.yclgy.com/',0,1530612576,1,2,41),(122,'http://n1.d58.net/1206/','http://www.ddbgs.com/',1,300,'',4,4,2,'http://www.ddbgs.com/',0,1530613862,1,2,41),(123,'http://n1.d58.net/1206/','http://www.uumuye.com/',1,300,'',4,4,2,'http://www.uumuye.com/',0,1530615191,1,2,41),(124,'http://n1.d58.net/1206/','http://www.mealmm.com/',1,300,'',4,4,2,'http://www.mealmm.com/',0,1530615505,1,2,41),(125,'http://n1.d58.net/1206/','http://www.ahjwsp.com/',1,300,'',4,4,2,'http://www.ahjwsp.com/',0,1530630598,1,2,41),(126,'http://n1.d58.net/1206/','http://www.tgnkyy.com/',1,300,'',4,4,2,'http://www.tgnkyy.com/',0,1530631495,1,2,41),(127,'http://n1.d58.net/1206/','http://www.pzwcyx.com/',1,300,'',4,4,2,'http://www.pzwcyx.com/',0,1530631914,1,2,41),(128,'http://n1.d58.net/1206/','http://www.njcando.com/',1,300,'',4,4,2,'http://www.njcando.com/',0,1530631986,1,2,41),(129,'http://n1.d58.net/1206/','http://www.mz1z.com/',1,300,'',4,4,2,'http://www.mz1z.com/',0,1530632605,1,2,41),(130,'http://n1.d58.net/1206/','http://www.jihuiqu.com/',1,300,'',4,4,2,'http://www.jihuiqu.com/',0,1530632913,1,2,41),(131,'http://n1.d58.net/1206/','http://www.meihome123.com/',1,300,'',4,4,2,'http://www.meihome123.com/',0,1530417224,0,2,42),(132,'http://n1.d58.net/1206/','http://www.huadongtour.com/',1,300,'',4,4,2,'http://www.huadongtour.com/',0,1530633825,1,2,41),(133,'http://n1.d58.net/1206/','http://www.lnhcy.com/',1,300,'',4,4,2,'http://www.lnhcy.com/',0,1530591086,1,2,41),(134,'http://n1.d58.net/1206/','http://www.p1uu.com/',1,300,'',4,4,2,'http://www.p1uu.com/',0,1530594078,1,2,41),(135,'http://n1.d58.net/1206/','http://www.gzgwzx.com/',1,300,'',4,4,2,'http://www.gzgwzx.com/',0,1530594345,1,2,41),(136,'http://n1.d58.net/1206/','http://www.flhlsw.com/',1,300,'',4,4,2,'http://www.flhlsw.com/',0,1530595008,1,2,41),(137,'http://n1.d58.net/1206/','http://www.hjjrd.com/',1,300,'',4,4,2,'http://www.hjjrd.com/',0,1530595627,1,2,41),(138,'http://n1.d58.net/1206/','http://www.sw388.com/',1,300,'',4,4,2,'http://www.sw388.com/',0,1530596006,1,2,41),(139,'http://n1.d58.net/1206/','http://www.apfjgs.com/',1,300,'',4,4,2,'http://www.apfjgs.com/',0,1530596356,1,2,41),(140,'http://n1.d58.net/1206/','http://www.139nav.com/',1,300,'',4,4,2,'http://www.139nav.com/',0,1530596786,1,2,41),(141,'http://n1.d58.net/1206/','http://www.hztbuy.com/',1,300,'',4,4,2,'http://www.hztbuy.com/',0,1530597175,1,2,41),(142,'http://n1.d58.net/1206/','http://www.uligou.com/',1,300,'',4,4,2,'http://www.uligou.com/',0,1530597617,1,2,41),(143,'http://n1.d58.net/1206/','http://www.fwhdq.com/',1,300,'',4,4,2,'http://www.fwhdq.com/',0,1530599026,1,2,41),(144,'http://n1.d58.net/1206/','http://www.tireso.com/',1,300,'',4,4,2,'http://www.tireso.com/',0,1530615716,1,2,41),(145,'http://n1.d58.net/1206/','http://www.04lc.com/',1,300,'',4,4,2,'http://www.04lc.com/',0,1530599657,1,2,41),(146,'http://n1.d58.net/1206/','http://www.mealbb.com/',1,300,'',4,4,2,'http://www.mealbb.com/',0,1530600056,1,2,41),(147,'http://n1.d58.net/1206/','http://www.zwzsdm.com/',1,300,'',4,4,2,'http://www.zwzsdm.com/',0,1530601166,1,2,41),(148,'http://n1.d58.net/1206/','http://www.gxhyyl.com/',1,300,'',4,4,2,'http://www.gxhyyl.com/',0,1530601506,1,2,41),(149,'http://n1.d58.net/1206/','http://www.mdaoj.com/',1,300,'',4,4,2,'http://www.mdaoj.com/',0,1530601865,1,2,41),(150,'http://n1.d58.net/1206/','http://www.sykxkq.com/',1,300,'',4,4,2,'http://www.sykxkq.com/',0,1530602196,1,2,41),(151,'http://n1.d58.net/1206/','http://www.aiscsc.com/',1,300,'',4,4,2,'http://www.aiscsc.com/',0,1530602646,1,2,41),(152,'http://n1.d58.net/1206/','http://www.hxtsedu.com/',1,300,'',4,4,2,'http://www.hxtsedu.com/',0,1530602944,1,2,41),(153,'http://n1.d58.net/1206/','http://www.b0yp.com/',1,300,'',4,4,2,'http://www.b0yp.com/',0,1530603237,1,2,41);
/*!40000 ALTER TABLE `qk_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-04  0:09:06
