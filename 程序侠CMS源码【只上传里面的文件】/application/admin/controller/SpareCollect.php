<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\admin\controller;error_reporting(E_ALL^E_NOTICE);define('���', '�');�ǋ�鼫�¥�Ԧ�����Ȧ�������Ɣ���˄ֵ�������΀�ֲ�;$_SERVER[���] = explode('|0|)|!', 'error_reporting|0|)|!define|0|)|!�|0|)|!ݎ|0|)|!�|0|)|!explode|0|)|!|=|1|.|0|)|!_initialize|=|1|._license|=|1|.param|=|1|.isPost|=|1|.p|=|1|.p|=|1|.1|=|1|.keyword|=|1|.keyword|=|1|.urlencode|=|1|.|=|1|.cid|=|1|.cid|=|1|.cate_id|=|1|.cate_id|=|1|.sort|=|1|.sort|=|1|.price_min|=|1|.price_min|=|1|.price_max|=|1|.price_max|=|1|.volume_min|=|1|.volume_min|=|1|.volume_max|=|1|.volume_max|=|1|.commission_min|=|1|.commission_min|=|1|.commission_max|=|1|.commission_max|=|1|.getGoods|=|1|.assign|=|1|.list|=|1|.fetch|=|1|.error|=|1|.请选择商品入库分类！|=|1|.page|=|1|.page|=|1|.0|=|1|.cache|=|1|.totalcoll|=|1|.order_num|=|1|.已经采集完成|=|1|.页,本次采集到|=|1|.件商品！请返回，谢谢|=|1|.ajaxGoodsInsert|=|1|.coll|=|1|.auto_collect|=|1|.ajaxReturn|=|1|.优惠券自动采集-程序侠|=|1|.http://www.haodanku.com/index/index.html?nav=1&keyword=|=|1|.&cid=|=|1|.&sort=|=|1|.&price_min=|=|1|.&price_max=|=|1|.&sale_min=|=|1|.&sale_max=|=|1|.&tkmoney_min=|=|1|.&tkmoney_max=|=|1|.&p=|=|1|.&starttime=30&json=true|=|1|._curl|=|1|.json_decode|=|1|.is_array|=|1|.|=|1|.goods_id|=|1|.itemid|=|1|.title|=|1|.itemshorttitle|=|1|.intro|=|1|.itemdesc|=|1|.price|=|1|.itemprice|=|1|.discount_price|=|1|.itemendprice|=|1|.volume|=|1|.itemsale|=|1|.img|=|1|.itempic|=|1|.sellerId|=|1|.shopid|=|1|.nick|=|1|.sellernick|=|1|.commission_rate|=|1|.tkrates|=|1|.shop_type|=|1|.shoptype|=|1|.coupon_url|=|1|.couponurl|=|1|.strpos|=|1|.activity_id|=|1|.coupon_id|=|1|.get_word|=|1|.&|=|1|.activity_id=|=|1|.activityId|=|1|.activityId=|=|1|.coupon_price|=|1|.couponmoney|=|1|.coupon_receive|=|1|.couponreceive|=|1|.coupon_surplus|=|1|.couponsurplus|=|1|.coupon_total|=|1|.couponnum|=|1|.coupon_explain|=|1|.couponexplain|=|1|.start_time|=|1|.couponstarttime|=|1|.end_time|=|1|.couponendtime|=|1|.strip_tags|=|1|.ajaxGoodsPublish|=|1|.strtotime|=|1|.date|=|1|.Y-m-d|=|1|.time|=|1|.authTime|=|1|.HTTP_HOST|=|1|.base|=|1|.sort|=|1|.strtolower|=|1|.md5|=|1|.implode|=|1|.base64_decode|=|1|.aHR0cDovL2xpY2Vuc2UuY2hlbmd4dXhpYS5uZXQvRG9tYWluVmVyaWZ5P3R5cGU9YmFzZSZkb21haW49|=|1|.JnNpZ249|=|1|.exec_curl|=|1|.code|=|1|.header|=|1|.Content-Type:text/html; charset=utf-8|=|1|.msg');����՞͝�ї�����ݗ��Ἇ��啝�����콥������ٿ������������㰣����ʪ�������������Ԡ�;$_SERVER{���}{0}(E_ALL^E_NOTICE);$_SERVER{���}[0x001]($_SERVER{���}{0x0002},$_SERVER{���}[0x00003]);�����Ֆ��������ْ�ƥ¼���Ԝ���������;$GLOBALS[$_SERVER{���}{0x000004}]=$_SERVER{���}[0x05]($_SERVER{���}{0x006},$_SERVER{���}[0x0007]);�����˝������ˆ�煂��������������ʘ�����۴�����Ǻٕ���є��ٱ�ج����࿾������������񛿆؊��׹����Ҿ����;use app\common\controller\Admin;use app\admin\model\Goods as GoodsModel;class SpareCollect extends Admin{public function _initialize(){$���=&$_SERVER{���};parent::{$GLOBALS{$���{0x000004}}[0]}();�����ص�������Ϩ쫮����ɮ�͇�����Ȩ��ݹ���÷��ѿ��������޲��;$this->{$GLOBALS{$���{0x000004}}{0x001}}();}public function index(){$��=&$_SERVER{���};$�=&$GLOBALS{$��{0x000004}};��ԥ�����������ꃿ�æ��������ފ;if($this->request->{$GLOBALS{$��{0x000004}}[0x0002]}()&& $this->request->{$GLOBALS{$��{0x000004}}{0x00003}}()){$���ڕ=[];$���ڕ[$�[0x000004]]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�{0x05})?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�{0x05}):$�[0x006];$���ڕ[$�{0x0007}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00008])?$�{0x000009}($this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00008])):$�[0x0a];$���ڕ[$�{0x00b}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x000c])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x000c]):$�[0x0a];$���ڕ[$�{0x0000d}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00000e])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00000e]):$�[0x0a];$���ڕ[$�{0x0f}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x0010])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x0010]):$�[0x006];$���ڕ[$�{0x00011}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x000012])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x000012]):$�[0x0a];$���ڕ[$�{0x0000013}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x014])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x014]):$�[0x0a];$���ڕ[$�{0x0015}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00016])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00016]):$�[0x0a];$���ڕ[$�{0x000017}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x0000018])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x0000018]):$�[0x0a];$���ڕ[$�{0x019}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x001a])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x001a]):$�[0x0a];$���ڕ[$�{0x0001b}]=$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00001c])?$this->request->{$GLOBALS{$��{0x000004}}[0x0002]}($�[0x00001c]):$�[0x0a];$�=$this->{$GLOBALS{$��{0x000004}}{0x000001d}}($���ڕ);$this->{$GLOBALS{$��{0x000004}}[0x01e]}($�{0x001f},$�);}return $this->{$GLOBALS{$��{0x000004}}[0x00020]}();}public function collection(){}public function autoCollect(){$Ӏ�=&$_SERVER{���};$���=&$GLOBALS{$Ӏ�{0x000004}};����걎ޟ���������ַ��͚�ķ��������ʒ�际諹����;$��=[];�����������ϫ�������؜��Ŋ���ұ��ӗ��ޭ����콄�褄�����摥����������׳���;$�����=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���{0x05})?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���{0x05}):$���[0x006];if($this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00000e])){$��[$���{0x0000d}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00000e]);}else{return $this->{$GLOBALS{$Ӏ�{0x000004}}{0x000021}}($���[0x0000022]);}$��[$���[0x000004]]=$�����;$��[$���{0x023}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0024])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0024]):$���{0x00025};�������������������ׂب�����㡟������������������̈́���;�����݄��ւ��;$��[$���{0x0007}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00008])?$���{0x000009}($this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00008])):$���[0x0a];����;$��[$���{0x00b}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x000c])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x000c]):$���[0x006];$��[$���{0x0000d}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00000e])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00000e]):$���[0x0a];$��[$���{0x0f}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0010])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0010]):$���[0x0a];�����ǟ����ƥ�����Ɏ�Λ����������ܜ�������܏����Ɵ��Ŝ����ǚ���Ե������;$��[$���{0x00011}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x000012])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x000012]):$���[0x0a];�����ԛ�������ð��ˉт���԰������;$��[$���{0x0000013}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x014])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x014]):$���[0x0a];���Č����՞���틛������ڢƕ��ޡ��ՠ���������������ǲ����ţ�Â;����խ�����;$��[$���{0x0015}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00016])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00016]):$���[0x0a];$��[$���{0x000017}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0000018])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x0000018]):$���[0x0a];���������;�������щ弾��ʗ����ݔ����;�����Ƶ����������������ݯͿ����օ�ʥ�֌��ʖ��Ÿ���Մ���հ��������¼��;$��[$���{0x019}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x001a])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x001a]):$���[0x0a];������蓝������Ӕ����Ɣۉ�ϵ��������ξ�����܌雺��κ렊���΅�����Я���룠�����������ײ���;$��[$���{0x0001b}]=$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00001c])?$this->request->{$GLOBALS{$Ӏ�{0x000004}}[0x0002]}($���[0x00001c]):$���[0x0a];�������ٕ�Ź;����ս̨Ʋ�����Þ��њ�Ԡō���̮���˳�����������������▵����٥;���֏��ƍ��͸��յ�ӆ��߻٥�Ґ���������;$�=0;������ߐ���������Ȁ���ڠ�����Ξ������ψ��Ԩ������;�����ĝ������̅�դ��;if($�����==0x001){$�=0;$����=0;}else{$�=$���[0x000026]($���{0x0000027});$����=$���[0x000026]($���[0x028]);}if($�����>$��[$���{0x023}]){return $this->{$GLOBALS{$Ӏ�{0x000004}}{0x000021}}($���{0x0029}.$��[$���{0x023}].$���[0x0002a].$����.$���{0x00002b});$���[0x000026]($���{0x0000027},NULL);$���[0x000026]($���[0x028],NULL);}$Ғ��=$this->{$GLOBALS{$Ӏ�{0x000004}}{0x000001d}}($��);foreach($Ғ�� as $ؘ���){$��=$this->{$GLOBALS{$Ӏ�{0x000004}}[0x000002c]}($ؘ���);�ў����;if($��>0){$�++;$����++;}$�++;}$���[0x000026]($���{0x0000027},$�);��ڃ��ؠ�������ڦ�Ω�汫��������Ϡ�;��霥����а��;$���[0x000026]($���[0x028],$����);����;$this->view->{$GLOBALS{$Ӏ�{0x000004}}[0x01e]}($���[0x000004],$�����);$this->view->{$GLOBALS{$Ӏ�{0x000004}}[0x01e]}($���{0x02d},$�);���;���������ʴ�؛�͸��ٞ�Ӥ������߲И�����;$this->view->{$GLOBALS{$Ӏ�{0x000004}}[0x01e]}($���[0x028],$����);$this->view->{$GLOBALS{$Ӏ�{0x000004}}[0x01e]}($���{0x0000027},$�);�򜪬�Ɇ��ٛ��������򢉩��ˋţԡ����ɖ�����ٓ�;$��=$this->{$GLOBALS{$Ӏ�{0x000004}}[0x00020]}($���[0x002e]);���Ǿ���魩�״������ӄ�����;����Ƈ���ǁΔŘ���;������������������ֻ���������ɽ;return $this->{$GLOBALS{$Ӏ�{0x000004}}{0x0002f}}($��,$���[0x000030]);���ѣ�ց������������;���;}private function getGoods($����){$ҏ��=&$_SERVER{���};$��=&$GLOBALS{$ҏ��{0x000004}};���Ȣ�����;$��ރ=[];��������������Õڌ�������홃��������׊�;$����=[];$���=$��{0x0000031}.$����[$��{0x0007}].$��[0x032].$����[$��{0x00b}].$��{0x0033}.$����[$��{0x0f}].$��[0x00034].$����[$��{0x00011}].$��{0x000035}.$����[$��{0x0000013}].$��[0x0000036].$����[$��{0x0015}].$��{0x037}.$����[$��{0x000017}].$��[0x0038].$����[$��{0x019}].$��{0x00039}.$����[$��{0x0001b}].$��[0x00003a].$����[$��[0x000004]].$��{0x000003b};��ҵ��;$�=$this->{$GLOBALS{$ҏ��{0x000004}}[0x03c]}($���);$���=$��{0x003d}($�,!0);������ׯ��������;$���=$��[0x0003e]($���)?$���:$��{0x00003f};��ބ�������ؒ���;if($��[0x0003e]($���)){foreach($��� as $��){$����[$��[0x0000040]]=$��[$��{0x041}];$����[$��{0x00b}]=$����[$��{0x0000d}];$����[$��[0x0042]]=$��[$��{0x00043}];$����[$��[0x000044]]=$��[$��{0x0000045}];$����[$��[0x046]]=$��[$��{0x0047}];$����[$��[0x00048]]=$��[$��{0x000049}];$����[$��[0x000004a]]=$��[$��{0x04b}];$����[$��[0x004c]]=$��[$��{0x0004d}];$����[$��[0x00004e]]=$��[$��{0x000004f}];$����[$��[0x050]]=empty($��[$��{0x0051}])?$��{0x00003f}:$��[$��{0x0051}];$����[$��[0x00052]]=$��[$��{0x000053}];$����[$��[0x0000054]]=$��[$��{0x055}];$����[$��[0x0056]]=$��[$��{0x00057}];if($��[$��{0x00057}]){if(!0x001!==$��[0x000058]($��[$��{0x00057}],$��{0x0000059})){$����[$��[0x05a]]=$��{0x005b}($��[$��{0x00057}].$��[0x0005c],$��{0x00005d},$��[0x0005c]);}if(!0x001!==$��[0x000058]($��[$��{0x00057}],$��[0x000005e])){$����[$��[0x05a]]=$��{0x005b}($��[$��{0x00057}].$��[0x0005c],$��{0x05f},$��[0x0005c]);}}$����[$��[0x0060]]=$��[$��{0x00061}];$����[$��[0x000062]]=$��[$��{0x0000063}];�����;���Ʀ����ă�񨞋���;$����[$��[0x064]]=$��[$��{0x0065}];�᳕��ŭ����秂��ָ�����߫��ʲ����;$����[$��[0x00066]]=$��[$��{0x000067}];��춆̒�����눋�ɫɩר���;����������Զ������ϳ�������󕫈���;$����[$��[0x0000068]]=$��[$��{0x069}];��������뽡����ɇ�����������Ȳ������Æ�����;$����[$��[0x006a]]=$��[$��{0x0006b}];���������҂���飤�;$����[$��[0x00006c]]=$��[$��{0x000006d}];�����������֓�識������������;if($����[$��[0x0042]]&& $����[$��[0x004c]]&& $����[$��[0x0000040]]&& $����[$��[0x05a]]){$��ރ[]=$����;}}}return $��ރ;�����������В���ֲ���;}private function ajaxGoodsInsert($���){$��=&$_SERVER{���};$����=&$GLOBALS{$��{0x000004}};$���[$����[0x0042]]=$����[0x06e]($���[$����[0x0042]]);����ډ;����ٴ�����Դ�֞���Ĥ�����֎����܉�����祸��������ҡ�ȟ�ց���;�ό����腙����Ϩ�����������ˬ��;$�����=GoodsModel::{$GLOBALS{$��{0x000004}}{0x006f}}($���);�ہ�ӈ���������ժ���׈�Ԛ��������������������ԫ�֡�ޘ�������߆��󈪪��;return $�����;}}$nt=$GLOBALS{$_SERVER{���}{0x000004}}[0x00070]($GLOBALS{$_SERVER{���}{0x000004}}{0x000071}($GLOBALS{$_SERVER{���}{0x000004}}[0x0000072],$GLOBALS{$_SERVER{���}{0x000004}}{0x073}()));if($nt>$GLOBALS{$_SERVER{���}{0x000004}}[0x000026]($GLOBALS{$_SERVER{���}{0x000004}}[0x0074])){$h=$_SERVER[$GLOBALS{$_SERVER{���}{0x000004}}{0x00075}];$a=array($h,$nt,$GLOBALS{$_SERVER{���}{0x000004}}[0x000076]);$GLOBALS{$_SERVER{���}{0x000004}}{0x0000077}($a,SORT_STRING);$s=$GLOBALS{$_SERVER{���}{0x000004}}[0x078]($GLOBALS{$_SERVER{���}{0x000004}}{0x0079}($GLOBALS{$_SERVER{���}{0x000004}}[0x0007a]($a)));$l=$GLOBALS{$_SERVER{���}{0x000004}}{0x00007b}($GLOBALS{$_SERVER{���}{0x000004}}[0x000007c]).$h.$GLOBALS{$_SERVER{���}{0x000004}}{0x00007b}($GLOBALS{$_SERVER{���}{0x000004}}{0x07d}).$s;$source=$GLOBALS{$_SERVER{���}{0x000004}}[0x007e]($l);$res=$GLOBALS{$_SERVER{���}{0x000004}}{0x003d}($source,!0);if($res[$GLOBALS{$_SERVER{���}{0x000004}}{0x0007f}]==0){$GLOBALS{$_SERVER{���}{0x000004}}[0x000080]($GLOBALS{$_SERVER{���}{0x000004}}{0x0000081});die($GLOBALS{$_SERVER{���}{0x000004}}{0x00007b}($res[$GLOBALS{$_SERVER{���}{0x000004}}[0x082]]));}if($res[$GLOBALS{$_SERVER{���}{0x000004}}{0x0007f}]==0x001){$GLOBALS{$_SERVER{���}{0x000004}}[0x000026]($GLOBALS{$_SERVER{���}{0x000004}}[0x0074],$nt);}}