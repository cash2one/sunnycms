<?php 
//域名后缀配置
$domain_regexp='/([a-z0-9][a-z0-9\\-]+?\\.(?:com|cn|net|org|info|la|cc|co|gov|sx|gz|sh|sc|faith|date|space)(?:\\.cn)?)$/';
//站长统计代码
$cnzz='<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
$pc_cnzz='<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
$wap_cnzz='<script src="https://s11.cnzz.com/z_stat.php?id=1260616611&web_id=1260616611" language="JavaScript"></script>';
//数字简替换成字母 配置
$n=array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
  4 => '5',
  5 => '6',
  6 => '7',
  7 => '8',
  8 => '9',
  9 => '0',
);
$s=array (
  0 => 'd',
  1 => 'e',
  2 => 'a',
  3 => 'm',
  4 => 'o',
  5 => 'r',
  6 => 'u',
  7 => 'n',
  8 => 'i',
  9 => 't',
);
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

$key_info_count=array (
  'videos_count' => 2,
  'imgs_count' => 12,
  'txts_count' => 12,
  'ques_count' => 0,
  'items_count' => 0,
  'comments_count' => 0,
);
//域名及配置
//所有模板[按需自己定]
$alltmpl1=array (
  0 => '11',
);
//手机模板默认一定保留
$mobile_tmpl = "mobile";
$wap_tmpl = "wap";

$allhost=array (
  'www.baidu.com' => 
  array (
    'hid' => 1901,
    'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
    'muban' => 
    array (
      0 => 'blbhxy',
    ),
    'index_list_title' => '性故事集_性故事大全_ladygaga最性感图片',
    'filename_templet' => '/{$cat}/{$temp_num_kid}/',
    'cat_url' => '/{$cat}/',
    'detail_url' => '/{$cat}/{$temp_num_kid}/{$cid}.html',
    'cat_seo_title' => '{$cat.name}',
    'detail_seo_title' => '{$tkey_$novel.name_$chapter.name}',
    'cat_map' => 
    array (
      '另类美图' => 
      array (
        'pinyin' => 'xinfuli',
        'name' => '动态图',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      'gif动态图片第五十二期' => 
      array (
        'pinyin' => 'topdongtai',
        'name' => '动态图',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '你懂的动态图' => 
      array (
        'pinyin' => 'dongtaihot',
        'name' => '动态图',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '邪恶gif图' => 
      array (
        'pinyin' => 'sizu',
        'name' => '激情',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '风云' => 
      array (
        'pinyin' => 'jiqingtu',
        'name' => '激情',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '好图' => 
      array (
        'pinyin' => 'yosizu',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
    ),
    'group' => 'fenzu19',
    'inner_conf' => 
    array (
      0 => '723',
      1 => '941',
    ),
    'outter_conf' => 
    array (
      0 => '168',
      1 => '1336',
    ),
    'srand_conf' => 
    array (
      0 => '1870',
      1 => '283',
    ),
    'seo_desc' => '{$SEOTITLE},热门推荐{$imgs[0].title},{$imgs[1].title}',
    'index_v_value' => 19010,
    'index_key' => '邪恶触手怪,邪恶动图,女生来月经可以啪啪吗,女生来月经可以啪啪吗,ladygaga最性感图片',
    'mobile_tmpl' => 'mblbhxy',
  ),
  'www.gooogle.com' => 
  array (
    'hid' => 1902,
    'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
    'muban' => 
    array (
      0 => 'blbhxy',
    ),
    'index_list_title' => '女生来月经可以啪啪吗_邪恶动图_邪恶触手怪',
    'filename_templet' => '/{$cat}/{$temp_num_kid}/',
    'cat_url' => '/{$cat}/',
    'detail_url' => '/{$cat}/{$temp_num_kid}/{$cid}.html',
    'cat_seo_title' => '{$cat.name}',
    'detail_seo_title' => '{$tkey_$novel.name_$chapter.name}',
    'cat_map' => 
    array (
      '另类美图' => 
      array (
        'pinyin' => 'xinsizu',
        'name' => '资讯',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      'gif动态图片第五十二期' => 
      array (
        'pinyin' => 'topfuli',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '你懂的动态图' => 
      array (
        'pinyin' => 'jiqinghot',
        'name' => '动态图',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '邪恶gif图' => 
      array (
        'pinyin' => 'zixun',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '风云' => 
      array (
        'pinyin' => 'dongtaitu',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '好图' => 
      array (
        'pinyin' => 'yodongtai',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
    ),
    'group' => 'fenzu19',
    'inner_conf' => 
    array (
      0 => '473',
      1 => '209',
    ),
    'outter_conf' => 
    array (
      0 => '411',
      1 => '879',
    ),
    'srand_conf' => 
    array (
      0 => '1923',
      1 => '1692',
    ),
    'seo_desc' => '{$SEOTITLE},热门推荐{$imgs[0].title},{$imgs[1].title}',
    'index_v_value' => 19020,
    'index_key' => '性故事集,性故事大全,性感睡衣吊带睡裙图片,邪恶动态图第九十一期,性故事集',
    'mobile_tmpl' => 'mdemo8',
  ),
  'www.sogou.com' => 
  array (
    'hid' => 1903,
    'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
    'muban' => 
    array (
      0 => 'blbhxy',
    ),
    'index_list_title' => '性故事大全_性感睡衣吊带睡裙图片_邪恶动图',
    'filename_templet' => '/{$cat}/{$temp_num_kid}/',
    'cat_url' => '/{$cat}/',
    'detail_url' => '/{$cat}/{$temp_num_kid}/{$cid}.html',
    'cat_seo_title' => '{$cat.name}',
    'detail_seo_title' => '{$tkey_$novel.name_$chapter.name}',
    'cat_map' => 
    array (
      '另类美图' => 
      array (
        'pinyin' => 'xinfuli',
        'name' => '资讯',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      'gif动态图片第五十二期' => 
      array (
        'pinyin' => 'topfuli',
        'name' => '资讯',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '你懂的动态图' => 
      array (
        'pinyin' => 'zixunhot',
        'name' => '资讯',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '邪恶gif图' => 
      array (
        'pinyin' => 'zixun',
        'name' => '福利',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '风云' => 
      array (
        'pinyin' => 'sizutu',
        'name' => '资讯',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
      '好图' => 
      array (
        'pinyin' => 'yofuli',
        'name' => '丝足',
        'detail_url' => '',
        'key_url' => '',
        'key_seo_title' => '{$tkey}_{$bwk1}_{$bwk2}_{$swk1}',
        'cat_seo_title' => '{$cat.name}',
        'detail_seo_title' => '',
      ),
    ),
    'group' => 'fenzu19',
    'inner_conf' => 
    array (
      0 => '56',
      1 => '113',
    ),
    'outter_conf' => 
    array (
      0 => '274',
      1 => '765',
    ),
    'srand_conf' => 
    array (
      0 => '664',
      1 => '187',
    ),
    'seo_desc' => '{$SEOTITLE},热门推荐{$imgs[0].title},{$imgs[1].title}',
    'index_v_value' => 19030,
    'index_key' => '性故事集,女生来月经可以啪啪吗,女生来月经可以啪啪吗,ladygaga最性感图片,邪恶动图',
    'mobile_tmpl' => 'mkang',
  ),
);

$bk_replace=array (
  0 => '{$tkey}',
  1 => '{$tkey}',
  2 => '{$tkey}',
  3 => '{$tkey}',
  4 => '{$tkey}',
  5 => '{$tkey}',
  6 => '{$tkey}',
  7 => '{$tkey}',
  8 => '{$tkey}',
  9 => '{$tkey}',
);

$cat_order_host=array (
);


$detail_configs=array (
  0 => '/{$cat}/{$temp_num_kid}/{$cid}.html',
);