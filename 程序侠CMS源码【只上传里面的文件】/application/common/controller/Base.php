<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\common\controller;error_reporting(E_ALL^E_NOTICE);define('��', '��');Ԓæ��뭄��ߡ���䅊����٧����ȕ��툪��ҩ��������͑���;$_SERVER[��] = explode('|8|%|@', '�|8|%|@���|8|%|@|(|&|,|8|%|@WEB_SITE_STATUS|(|&|,Content-type: text/html; charset=utf-8|(|&|,网站正在升级中...|(|&|,WEB_SITE_REWRITE|(|&|,0|(|&|,index.php|(|&|,1|(|&|,/|(|&|,3|(|&|,?s=|(|&|,SEO|(|&|,seo_config|(|&|,title|(|&|,index|(|&|,keywords|(|&|,keyword|(|&|,description|(|&|,{WEB_SITE_NAME}|(|&|,{site_title}|(|&|,{site_keywords}|(|&|,{site_description}|(|&|,WEB_SITE_NAME|(|&|,/\\{([a-z0-9_-]+?)\\}/|(|&|, |(|&|,{|(|&|,}|(|&|,|(|&|,((\\s*\\-\\s*)+)|(|&|,((\\s*\\,\\s*)+)|(|&|,((\\s*\\|\\s*)+)|(|&|,((\\s*\\t\\s*)+)|(|&|,((\\s*_\\s*)+)|(|&|,-|(|&|,,|(|&|,||(|&|,_|(|&|, ,-|_|(|&|,page_seo|(|&|,WEB_CACHE_STATUS|(|&|,cid|(|&|,cid,goods_id,title,price,discount_price,coupon_price,intro,img,coupon_id,coupon_url,coupon_receive,coupon_surplus,coupon_total,volume,shop_type,ems,start_time,end_time|(|&|,GOODS_AUTO_STATUS|(|&|,column|(|&|,fields|(|&|,page|(|&|,sort|(|&|,couponPrice|(|&|,ids|(|&|,pageSize|(|&|,list|(|&|,total|(|&|,sort asc|(|&|,new|(|&|,, start_time desc|(|&|,volume|(|&|,, volume desc|(|&|,price|(|&|,, discount_price desc|(|&|,quan|(|&|,, coupon_price desc|(|&|,surplus|(|&|,, coupon_surplus desc|(|&|,Goods|(|&|,query|(|&|,id|(|&|,WEB_COUPON_PID|(|&|,商品ID为空|(|&|,优惠券ID为空|(|&|,高佣金PID为未设置|(|&|,https://uland.taobao.com/cp/coupon?activityId=|(|&|,&pid=|(|&|,&itemId=|(|&|,&src=njrt_qytk&tj1=1&tj2=1|(|&|,&dx=1|(|&|,GOODS_TAOBAO_APP|(|&|,&nowake=1|(|&|,result|(|&|,retStatus|(|&|,clickUrl|(|&|,item|(|&|,shareUrl|(|&|,https:');Ȉ�����ϵ��������Ќ������������£����䠿�ȫ������ȡ؉�����Ӵ���ח�����ѭ��񡪇������ض�����������􃵢㲔�ݜ����Ё����֤�;error_reporting(E_ALL^E_NOTICE);define($_SERVER{��}[0],$_SERVER{��}{0x001});����ɹ���������������ڟ�������;$GLOBALS[�]=explode($_SERVER{��}[0x0002],$_SERVER{��}{0x00003});������ŬЃ���������������¾����«���������«��ǉۦ��ӓ����ǥѯ؝��폤������׀ߴ����ę���⚢�������������;use think\Db;use app\common\controller\Common;class Base extends Common{protected function _initialize(){$�=&$GLOBALS{�};parent::_initialize();�����ȅ��⡔������󨑖�����՟�������գ��݃������;�������䊶ⷠ���Ο٬�؅��;$this->_license();if(!0x001==get_config($�[0])){header($�{0x001});die($�[0x0002]);}$�=get_config($�{0x00003});if($�==$�[0x000004]){if(!substr_count($this->request->url(),$�{0x05})){$this->request->root($�{0x05});}}if($�==$�[0x006]){if(substr_count($this->request->url(),$�{0x05})){$this->request->root($�{0x0007});}}if($�==$�[0x00008]){if(substr_count($this->request->url(),$�{0x05})){$this->request->root($�{0x000009});}}}protected function _seo($���='',$���=[]){$�����=&$GLOBALS{�};������;$��メ=[];��׸�����;�����ǿ������絈���س��������;$��=get_config($�����[0x0a],$�����{0x00b});�������������օ���ԥ��ɘ������Ç���¯�;��������ğ��օ��ݰ����®���̘������ΌÓ��̓�����띮��܇���;$=[$�����[0x000c]=>$��[$�����{0x0000d}][$�����[0x000c]],$�����[0x00000e]=>$��[$�����{0x0000d}][$�����{0x0f}],$�����[0x0010]=>$��[$�����{0x0000d}][$�����[0x0010]]];if($���){$��メ=$��[$���];}$=array_merge($,$��メ);$����=[$�����{0x00011},$�����[0x000012],$�����{0x0000013},$�����[0x014]];���������ܞ��஠���������Ϸ��������ͨ��ɴʭȼ��粟;��Ǣ���������٦�ۑ�П���������́������;$�����=[get_config($�����{0x0015}),$��[$�����{0x0000d}][$�����[0x000c]],$��[$�����{0x0000d}][$�����{0x0f}],$��[$�����{0x0000d}][$�����[0x0010]]];�Ŕ������ƍ����Ϋ�����������Ѕ���;preg_match_all($�����[0x00016],implode($�����{0x000017},array_values($)),$���ĩ);�������;�غ����߼��͆�ό�������٫�Ε��ϯ���ܱ������踂��슾����ҏ��Ǿ����;if($���ĩ){foreach($���ĩ[0x001] as $����){$����[]=$�����[0x0000018].$����.$�����{0x019};$�����[]=$���[$����]?strip_tags($���[$����]):$�����[0x001a];}$��=[$�����{0x0001b},$�����[0x00001c],$�����{0x000001d},$�����[0x01e],$�����{0x001f}];$����=[$�����[0x00020],$�����{0x000021},$�����[0x0000022],$�����{0x000017},$�����{0x023}];foreach($ as $�Ѻ��=>$���){$[$�Ѻ��]=trim(preg_replace($��,$����,str_replace($����,$�����,$���)),$�����[0x0024]);}}$this->assign($�����{0x00025},$);}protected function _list($��='index',$ɾ��,$���='new',$��=0,$��='',$�='',$���Ǽ=0x064,$����=0x001,$��=false){$�����=&$GLOBALS{�};����������߭��Ƕ岪�������Ɛ������똽ᷝ���������򴗃����Ԩה����Ğ������;if(!$ɾ��|| !is_array($ɾ��)){return !0x001;}if(get_config($�����[0x000026])){$�=$��;if(isset($ɾ��[$�����{0x0000027}])){$�.= $�����[0x00020].$ɾ��[$�����{0x0000027}];}if($�){$�.= $�����[0x00020].$�;}if($��){$�.= $�����[0x00020].$��;}$�.= $�����[0x00020].$���.$�����[0x00020].$��.$�����[0x00020].$���Ǽ.$�����[0x00020].$����;$�=md5($�);if(!0x001===$���=cache($�)){$���=$this->getGoodsList($��,$ɾ��,$���,$��,$��,$�,$���Ǽ,$����,$��);cache($�,$���);}}else{$���=$this->getGoodsList($��,$ɾ��,$���,$��,$��,$�,$���Ǽ,$����,$��);��;}return $���;����˛�ȣ������絧�ڨ�����ȡ���ԧ��ﰀ����ꅰ;��������� �������۝�ݦ�;}private function getGoodsList($��߫,$��,$��,$�,$�į��,$ۄ,$����,$�ڣ,$�){$�뫰=&$GLOBALS{�};$ɉ�=$�뫰[0x028];��������������������������⓯��Ε������;�Ď���Ǩ˅�;�����ԉ;if($��&& is_array($��)){$Ϫ���=[];if(get_config($�뫰{0x0029})){$��[$�뫰[0x0002a]]=$��߫;$��[$�뫰{0x00002b}]=$ɉ�;$��[$�뫰[0x000002c]]=$�ڣ;$��[$�뫰{0x02d}]=$��;$��[$�뫰[0x002e]]=$�;$��[$�뫰{0x0f}]=$�į��;$��[$�뫰{0x0002f}]=$ۄ;$��[$�뫰[0x000030]]=$����;$�=$��߫;if(isset($��[$�뫰{0x0000027}])){$�.= $�뫰[0x00020].$��[$�뫰{0x0000027}];}if($ۄ){$�.= $�뫰[0x00020].$ۄ;}if($�į��){$�.= $�뫰[0x00020].$�į��;}$�.= $�뫰[0x00020].$��.$�뫰[0x00020].$�.$�뫰[0x00020].$����.$�뫰[0x00020].$�ڣ;$�=md5($�);�����������̻�;if(!0x001===$����=cache($�)){$����=new \chengxuxiaApi\Goods;$�=$����->getGoodsList($��);if($�){$Ϫ���[$�뫰{0x0000031}]=$�[$�뫰{0x0000031}];$Ϫ���[$�뫰[0x032]]=$�[$�뫰[0x032]];}else{$����=$this->_page($�[$�뫰{0x0000031}],$����,$�ڣ,$�[$�뫰[0x032]]);}cache($�,$����);}}else{$�=$�뫰{0x0033};switch($��){case $�뫰[0x00034]:$�.= $�뫰{0x000035};���⭆�қ���Ť����;break;��ģ�Һ�磴������ޓ���;�����ɸ�����������Գ���񗄞��虊��Ԡ�������;case $�뫰[0x0000036]:$�.= $�뫰{0x037};break;���ͅ������;case $�뫰[0x0038]:$�.= $�뫰{0x00039};���ģ������˽����ϼ�����ὼ������՘ʈ���;��������ӆ８�բ��������������崼���ä�ɕ���󅰰��������;��;break;������貅��������ߌ�ݟЊ����;�����Ǎ����̹����蕤�����Ϡֆ�՟ʐç�Ѳ;case $�뫰[0x00003a]:$�.= $�뫰{0x000003b};���ߕ��줄�;break;case $�뫰[0x03c]:$�.= $�뫰{0x003d};�����Ư�݋��ڜ���񂾃��ܘ����ν������ѻ�ݷع����瞆���;���Μ⠧����;���ч�;break;���ݯ��������������������븹�í�������Ԁ�����ڮ��Ã��ؑ���;}$����=Db::name($�뫰[0x0003e])->where($��)->field($ɉ�)->order($�)->paginate($����,!0x001,[$�뫰{0x00003f}=>$this->request->param()]);�����;���ꁂ��ܸ�ܢլ������;�̎�ç������������ށȯ�ѡ����;if($�){$Ϫ���[$�뫰{0x0000031}]=$����;$Ϫ���[$�뫰[0x032]]=$��=Db::name($�뫰[0x0003e])->where($��)->count($�뫰[0x0000040]);}}return $�?$Ϫ���:$����;}else{return !0x001;�݃�;}}protected function getClickUrl($����,$�,$�ղ�=false){$�=&$GLOBALS{�};������������;$��=get_config($�{0x041});�ڴ�������ͯ������Ղʣ�͸�񗧤��ؐ����;����������廂����䏬ڋ�Զ�κ�ȩ�𵕒��чݍ��������Ǔ��������ӄ��ܸ��ƻ���¥���;if(empty($����)){return $this->error($�[0x0042]);}if(empty($�)){return $this->error($�{0x00043});}if(empty($��)){return $this->error($�[0x000044]);}$�����=$�{0x0000045}.$�.$�[0x046].$��.$�{0x0047}.$����.$�[0x00048];if($�ղ�){$�����.= $�{0x000049};}if(!get_config($�[0x000004a])){$�����.= $�{0x04b};}$�=$this->_curl($�����);$��=[];��������ê��崕Ȉ�����Ѱ�����������������Ӕ�;�����衙�������՜���蘂��߈Ӧ�¦��윎���������ب��������ٟ��ƺ��֗��띭����֘̀����;$��=json_decode($�,!0);��≻;��ߓ���;if($��[$�[0x004c]]){$ڤ�=[];$ڤ�[$�{0x0004d}]=$��[$�[0x004c]][$�{0x0004d}];$ڤ�[$�[0x00004e]]=$��[$�[0x004c]][$�{0x000004f}][$�[0x00004e]];$ڤ�[$�[0x050]]=$��[$�[0x004c]][$�{0x000004f}][$�[0x050]];if($ڤ�[$�[0x00004e]]){$ڤ�[$�[0x00004e]]=$�{0x0051}.$ڤ�[$�[0x00004e]].$�[0x00048];}if($ڤ�[$�[0x050]]){$ڤ�[$�[0x050]]=$�{0x0051}.$ڤ�[$�[0x050]].$�[0x00048];if(!get_config($�[0x000004a])){$ڤ�[$�[0x050]].= $�{0x04b};}}return $ڤ�;��ޕ;��С������ڢ����ⷤ���阩Ž�;}}}