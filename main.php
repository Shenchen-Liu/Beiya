 <?php
define('SITE_ROOT','d:/xampp/htdocs/beiya/');
include_once (SITE_ROOT."libs/Smarty.class.php");	  //����smarty������


$smarty = new Smarty(); 						//����smartyʵ������$smarty
$smarty->template_dir=SITE_ROOT."/templates/";  //����ģ��Ŀ¼
$smarty->compile_dir=SITE_ROOT."/templates_c/"; //���ñ���Ŀ¼
$smarty->cache_dir=SITE_ROOT."/cache/";			//���û���Ŀ¼
$smarty->caching=0; 							//���淽ʽ
$smarty->cache_lifetime=60*60*24*7;				//������7��

$smarty->left_delimiter = "{{";					//����smarty�����
$smarty->right_delimiter = "}}";
?> 