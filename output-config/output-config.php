<?php
$file='./config/phone.php';


//参数 start

$domains = 'baidu.com,gooogle.com,sogou.com';
$domains= explode(',', $domains);

//hid
$hid = 1900;

$index_list_title = array('性故事集','性故事大全','性感睡衣吊带睡裙图片','邪恶动图','邪恶触手怪','邪恶动态图第九十一期','女生来月经可以啪啪吗','ladygaga最性感图片');
$cat_map_arr=array('另类美图','gif动态图片第五十二期','你懂的动态图','邪恶gif图','风云','好图');

$navlist = array(
		['jiqing','激情'],
		['fuli','福利'],
		['sizu','丝足'],
		['dongtai','动态图'],
		['zixun','资讯'],
	);

$group = 'fenzu19';
$mobile_tmpl = array('mlaonanren','mkang','mxiabb','mblbhxy','mdemo8');
$index_key = array('性故事集','性故事大全','性感睡衣吊带睡裙图片','邪恶动图','邪恶触手怪','邪恶动态图第九十一期','女生来月经可以啪啪吗','ladygaga最性感图片');

$randdesc = array('最新更新','热门推荐','TOP十条','爆料推荐');
//参数 end

$allhost = array();
foreach ($domains as $domain) {
	$hid = $hid+1;
	$allhost['www.'.$domain] = array(
        'hid' =>$hid,
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'muban' => array('blbhxy'),
        'index_list_title' =>''.$index_list_title[rand(0,count($index_list_title)-1)].'_'.$index_list_title[rand(0,count($index_list_title)-1)].'_'.$index_list_title[rand(0,count($index_list_title)-1)].'',
        'filename_templet' => '/{$cat}/{$temp_num_kid}/',
        'cat_url'=>'/{$cat}/',
        'detail_url'=>'/{$cat}/{$temp_num_kid}/{$cid}.html',
        'cat_seo_title'=>'{$cat.name}',
        'detail_seo_title'=>'{$tkey_$novel.name_$chapter.name}',
        'cat_map'=>[
            '另类美图'=>[
                'pinyin'=>'xin'.$navlist[rand(0,count($navlist)-1)][0].'',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
            'gif动态图片第五十二期'=>[
                'pinyin'=>'top'.$navlist[rand(0,count($navlist)-1)][0].'',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
            '你懂的动态图'=>[
                'pinyin'=>''.$navlist[rand(0,count($navlist)-1)][0].'hot',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
            '邪恶gif图'=>[
                'pinyin'=>''.$navlist[rand(0,count($navlist)-1)][0].'',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
            '风云'=>[
                'pinyin'=>''.$navlist[rand(0,count($navlist)-1)][0].'tu',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
            '好图'=>[
                'pinyin'=>'yo'.$navlist[rand(0,count($navlist)-1)][0].'',
                'name'=>''.$navlist[rand(0,count($navlist)-1)][1].'',
                'detail_url'=>'',
                'key_url'=>'',//暂时没有用处
                'key_seo_title'=>'{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
                'cat_seo_title'=>'{$cat.name}',
                'detail_seo_title'=>'',
            ],
        ],
        'group'=>''.$group.'',
        'inner_conf' => array(''.rand(10,800).'',''.rand(10,1200).''),//內链
        'outter_conf' => array(''.rand(10,500).'',''.rand(10,1500).''),//外链
        'srand_conf' => array(''.rand(10,2000).'',''.rand(10,2000).''),
        'seo_desc' => '{$SEOTITLE},'.$randdesc[rand(0,count($randdesc)-1)].'{$imgs[0].title},{$imgs[1].title}',
        'index_v_value' => $hid*10,
        'index_key' =>''.$index_key[rand(0,count($index_key)-1)].','.$index_key[rand(0,count($index_key)-1)].','.$index_key[rand(0,count($index_key)-1)].','.$index_key[rand(0,count($index_key)-1)].','.$index_key[rand(0,count($index_key)-1)].'',
        'mobile_tmpl'=>''.$mobile_tmpl[rand(0,count($mobile_tmpl)-1)].'',
    );
}



//固定变量 start

//域名后缀配置
$domain_regexp = '/([a-z0-9][a-z0-9\-]+?\.(?:com|cn|net|org|info|la|cc|co|gov|sx|gz|sh|sc|faith|date|space)(?:\.cn)?)$/';
//站长统计代码
$cnzz = '<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
$pc_cnzz = '<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
$wap_cnzz = '<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
//数字简替换成字母 配置
$n = array ('1','2','3','4','5','6','7','8','9','0');
$s = array ('d','e','a','m','o','r','u','n','i','t');


//内页的各个数据的配置
$key_info_count = [
    'videos_count'=>2, //存在视频数据时候视频数量
    'imgs_count'=>12,  //存在百度图片数据时，图片项的条数
    'txts_count'=>12,  //存在百度搜索文本数据时，文本项的条数
    'ques_count'=>0,  //存在百度问答数据时，文本项的条数
    'items_count'=>0, //存在淘客商品数据时，商品项的条数
    'comments_count'=>0, //存在商品评论时，商品详情页评论的条数
];

//域名及配置
//所有模板[按需自己定]
$alltmpl1 = ['11'];

//固定变量 end


//bk1,bk2,bk3...空替换[百度相关词]
$bk_replace = [
    '{$tkey}','{$tkey}','{$tkey}','{$tkey}',
    '{$tkey}','{$tkey}','{$tkey}','{$tkey}',
    '{$tkey}','{$tkey}'
];

//sk1,sk2,sk3....空替换[搜狗相关词]
$sk_replace = [
    '{$tkey}','{$tkey}','{$tkey}','{$tkey}',
    '{$tkey}','{$tkey}','{$tkey}','{$tkey}',
    '{$tkey}','{$tkey}'
];

//分类倒序域名列表
$cat_order_host = [
];

//详细页配置属性，公用详细页配置，如果单站里面没配置，则会随机选用一个
//请根据网站类型自行配置
$detail_configs = [
    '/{$cat}/{$temp_num_kid}/{$cid}.html',
];



//文件格式
$text='<?php 
//域名后缀配置
$domain_regexp='.var_export($domain_regexp,true).';
//站长统计代码
$cnzz='.var_export($cnzz,true).';
$pc_cnzz='.var_export($pc_cnzz,true).';
$wap_cnzz='.var_export($wap_cnzz,true).';
//数字简替换成字母 配置
$n='.var_export($n,true).';
$s='.var_export($s,true).';
//首页数量及泛域名支持
$ntkey_count = 0;//ntkey的数量,内页可以使用ntkey1,ntkey2....
$is_use_sogou_pic = false; //是否启用本地化图片地址[程序自动302到原图]

$is_random_muban = false; //内页是否启用随机模板
$is_extk_random_key = false; //extk采用固定随机词
$is_all_bwk = true; //是否需要bwk等数据

$is_key_random = false;  //内页是否随机模式[外链全部随机/extk为所有外链词及bwk的随机]
$is_use_unavail = false; //是否启用unavailable //启用它默认启用PC版本
$is_use_unavail_mobile = false; //是否启用手机版unavailable. 需要先启用PC版本
$is_part = false;   //是否启用分词模式 //本功能无用
$is_fan =  false;  //是否泛域名
$is_fan_www = false; //泛解析域名是否需要前导wwww, 如www.111.chihuo.date

$index_list_cache_time = 3600 * 4;      //列表缓存时间

$key_info_count='.var_export($key_info_count,true).';
//域名及配置
//所有模板[按需自己定]
$alltmpl1='.var_export($alltmpl1,true).';
//手机模板默认一定保留
$mobile_tmpl = "mobile";
$wap_tmpl = "wap";

$allhost='.var_export($allhost,true).';

$bk_replace='.var_export($bk_replace,true).';

$cat_order_host='.var_export($cat_order_host,true).';


$detail_configs='.var_export($detail_configs,true).';';



if(false!==fopen($file,'w+')){
	echo $text;
	file_put_contents($file,$text);
}else{
	echo '创建失败';
}