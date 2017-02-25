SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `wst_home_menus`;
CREATE TABLE `wst_home_menus` (
  `menuId` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) NOT NULL DEFAULT '0',
  `menuName` varchar(100) NOT NULL,
  `menuUrl` varchar(100) NOT NULL,
  `menuOtherUrl` text,
  `menuType` tinyint(4) NOT NULL DEFAULT '0',
  `isShow` tinyint(4) DEFAULT '1',
  `menuSort` int(11) NOT NULL DEFAULT '0',
  `dataFlag` tinyint(4) NOT NULL DEFAULT '1',
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`menuId`),
  KEY `parentId` (`parentId`,`isShow`,`dataFlag`),
  KEY `menuType` (`menuType`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;


INSERT INTO `wst_home_menus` VALUES ('1', '0', '买家中心', 'home/users/index', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('2', '1', '我的订单', '#', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('3', '2', '待付款订单', 'home/orders/waitPay', 'home/orders/waitPayByPage,home/orders/cancellation,home/orders/detail', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('5', '2', '待收货订单', 'home/orders/waitReceive', 'home/orders/waitReceiveByPage,home/orders/cancellation,home/orders/detail,home/orders/receive,home/orders/toReject,home/ordercomplains/complain', '0', '1', '1', '1', '2016-08-14 18:37:18'),
 ('6', '2', '待评价订单', 'home/orders/waitAppraise', 'home/orders/waitAppraiseByPage,home/orders/detail,home/orders/orderAppraise,home/ordercomplains/complain', '0', '1', '2', '1', '2016-08-14 18:37:18'),
 ('7', '2', '已取消订单', 'home/orders/cancel', 'home/orders/cancelByPage,home/orders/detail', '0', '1', '4', '1', '2016-08-14 18:37:18'),
 ('8', '2', '拒收/退款', 'home/orders/abnormal', 'home/orders/abnormalByPage,home/ordercomplains/complain', '0', '1', '5', '1', '2016-08-14 18:37:18'),
 ('9', '2', '我的评价', 'home/goodsappraises/myAppraise', 'home/goodsappraises/userAppraise', '0', '1', '6', '1', '2016-08-14 18:37:18'),
 ('10', '1', '收藏管理', '#', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('11', '43', '资金管理', '#', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('13', '11', '积分管理', 'home/userscores/index', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('14', '1', '帐户设置', '#', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('15', '14', '用户资料', 'home/users/edit', 'home/users/toEdit,home/users/editUserPhoto', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('16', '14', '安全设置', 'home/users/security', 'home/users/editPass,home/users/editEmail,home/users/editPhone', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('17', '14', '用户地址', 'home/useraddress/index', 'home/useraddress/listQuery,home/useraddress/edit,home/useraddress/setDefault,home/useraddress/del', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('19', '1', '客户管理', '#', null, '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('20', '19', '投诉管理', 'home/ordercomplains/index', 'home/ordercomplains/queryUserComplainByPage,home/ordercomplains/getUserComplainDetail', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('22', '0', '卖家中心', 'home/shops/index', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('23', '22', '交易管理', '#', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('24', '23', '待发货订单', 'home/orders/waitdelivery', 'home/orders/waitDeliveryByPage,home/orders/deliver,home/orders/view,home/orders/getMoneyByOrder', '1', '1', '2', '1', '2016-08-14 18:37:18'),
 ('25', '23', '投诉订单', 'home/ordercomplains/shopComplain', 'home/ordercomplains/queryShopComplainByPage,home/ordercomplains/getShopComplainDetail,home/ordercomplains/respond', '1', '1', '5', '1', '2016-08-14 18:37:18'),
 ('29', '22', '商品管理', '#', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('30', '29', '商品分类', 'home/shopcats/index', 'home/shopcats/batchSaveCats,home/shopcats/del,home/shopcats/editName,home/shopcats/editSort,home/shopcats/changeCatStatus', '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('31', '29', '新增商品', 'home/goods/add', null, '1', '1', '1', '1', '2016-08-14 18:37:18'),
 ('32', '29', '出售中的商品', 'home/goods/sale', 'home/goods/saleByPage,home/goods/edit,home/goods/del,home/goods/batchDel,home/goods/changeGoodsStatus,home/goods/changeSale,home/goods/changSaleStatus', '1', '1', '2', '1', '2016-08-14 18:37:18'),
 ('33', '29', '审核中的商品', 'home/goods/audit', 'home/goods/auditByPage,home/goods/edit,home/goods/del,home/goods/batchDel,home/goods/changeGoodsStatus,home/goods/changeSale,home/goods/changSaleStatus', '1', '1', '3', '1', '2016-08-14 18:37:18'),
 ('34', '29', '仓库中的商品', 'home/goods/store', 'home/goods/storeByPage,home/goods/illegalByPage,home/goods/edit,home/goods/del,home/goods/batchDel,home/goods/changeGoodsStatus,home/goods/changeSale,home/goods/changSaleStatus', '1', '1', '4', '1', '2016-08-14 18:37:18'),
 ('35', '29', '评价管理', 'home/goodsappraises/index', 'home/goodsappraises/queryByPage,home/goodsappraises/shopReply', '1', '1', '8', '1', '2016-08-14 18:37:18'),
 ('36', '29', '数据导入', 'home/Imports/index', 'home/goods/importGoods', '1', '1', '7', '1', '2016-08-14 18:37:18'),
 ('38', '22', '店铺设置', '#', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('39', '38', '店铺资料', 'home/shops/info', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('40', '38', '店铺设置', 'home/shopconfigs/toShopCfg', null, '1', '1', '0', '1', '2016-08-14 18:37:18'),
 ('41', '10', '我关注的商品', 'home/favorites/goods', 'home/favorites/listGoodsQuery,home/favorites/cancel', '0', '1', '0', '1', '2016-08-14 18:37:18'),
 ('42', '38', '运费设置', 'home/Shopfreights/index', 'home/shopfreights/listProvince,home/shopfreights/index', '1', '1', '0', '1', '2016-08-24 15:29:21'),
 ('43', '0', '资金管理', 'home/users/index', '', '0', '1', '0', '1', '2016-09-18 10:24:47'),
 ('44', '23', '已收货订单', 'home/orders/finished', 'home/orders/finishedByPage,home/orders/view', '0', '1', '1', '1', '2016-09-18 10:30:29'),
 ('45', '23', '取消/拒收订单', 'home/orders/failure', 'home/orders/failureByPage,home/orders/view,home/orders/confer,home/orders/confer', '1', '1', '4', '1', '2016-09-18 10:31:01'),
 ('46', '10', '我关注的商家', 'home/favorites/shops', 'home/favorites/listShopQuery,home/favorites/cancel', '0', '1', '2', '1', '2016-09-24 00:09:34'),
 ('48', '2', '已完成订单', 'home/orders/finish', 'home/orders/finishByPage,home/orders/detail,home/orders/orderAppraise,home/ordercomplains/complain', '0', '1', '3', '1', '2016-09-22 10:18:16'),
 ('49', '19', '用户信息', 'home/messages/index', 'home/messages/queryByList,home/messages/showMsg,home/messages/batchRead,home/messages/del,home/messages/batchDel', '0', '1', '3', '1', '2016-09-22 10:54:49'),
 ('53', '23', '已发货订单', 'home/orders/delivered', 'home/orders/deliveredByPage,home/orders/view', '1', '1', '3', '1', '2016-10-10 16:11:39'),
 ('54', '29', '库存预警', 'home/goods/stockWarnByPage', '', '1', '1', '5', '1', '2016-10-11 11:50:56'),
 ('55', '23', '待付款订单', 'home/orders/waituserPay', 'home/orders/waituserPayByPage,home/orders/editOrderMoney,home/orders/view', '1', '1', '1', '1', '2016-10-14 14:58:59'),
 ('56', '29', '违规商品', 'home/goods/illegal', '', '1', '1', '6', '1', '2016-10-14 22:13:33');
