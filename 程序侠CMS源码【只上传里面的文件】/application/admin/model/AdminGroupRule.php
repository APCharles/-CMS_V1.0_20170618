<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\admin\model;error_reporting(E_ALL^E_NOTICE);define('��', '�');�͒�Ő��Ҋ��½���ל�پ���������ˀ�����㌜������Ȩ̣昜Ձ�뢏پ����������;$GLOBALS[��] = explode('|\'|,|)', 'error_reporting|\\\'|,|)define|\\\'|,|)�|\\\'|,|)�|\\\'|,|)�|\\\'|,|)explode|\\\'|,|)|?|/| |\\\'|,|)0|?|/| 禁用|?|/| 1|?|/| 启用|?|/| is_array|?|/| implode|?|/| ,');�Ò��ߋ����������ڣ˵���݈�ȵ������ǳ�������뗱��鳆�Ω�������������뜻�;$GLOBALS{��}{0}(E_ALL^E_NOTICE);$GLOBALS{��}[0x001]($GLOBALS{��}{0x0002},$GLOBALS{��}[0x00003]);�������Ŀ����������������ڌ˞���;$_GET[$GLOBALS{��}{0x000004}]=$GLOBALS{��}[0x05]($GLOBALS{��}{0x006},$GLOBALS{��}[0x0007]);��;use think\Model;class AdminGroupRule extends Model{public function getStatusAttr($��ː){$�ʮ=&$_GET{$GLOBALS{��}{0x000004}};$��=[$�ʮ[0]=>$�ʮ{0x001},$�ʮ[0x0002]=>$�ʮ{0x00003}];���Ľ�ᒖ�����Խ���������;return $��[$��ː];}public function setRulesAttr($Ź�){$��¤=&$_GET{$GLOBALS{��}{0x000004}};������ދ��˞�����;if($��¤[0x000004]($Ź�)){$Ź�=$��¤{0x05}($��¤[0x006],$Ź�);}return $Ź�;}}