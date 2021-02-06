<?php
ob_start(); // OUTPUT BUFFERING START
function lang($word) {

static $lang = array(

  //NAVBAR WORDS
  'الرئيسية' => 'Home',
  'الاقسام' => 'Categories',
  'حسابي' => 'My Profile',
  'الإعدادات' => 'Settings',
  'site' => 'View Site',
  'العناصر' => 'Items',
  'الاعضاء' => 'Members',
  'التعليقات' => 'Comments',
  'STATISTICS' => 'Statistics',
  'التسجيلات' => 'Logs',
  'المنشأة' => 'brand',
  'المركات' => 'Brands',
  'البحث' => 'Check Name',
  'ايجاد قسم' => 'Found Category',
  'ايجاد براند' => 'Found Brand',
  'ايجاد عضو' => 'Found Member',
  'ايجاد اعلان' => 'Found Item',
  'عرض خاص' => 'Offers',
  'الاعلانات' => 'Advertises',
  'الأسعار تشمل ضريبة القيمة المضافة' => 'Prices And Taxs',
  'ستوفر' => 'Saving',
  'جنيه' => 'EGP',
  'lord' => '',
  'lord' => '',
  'lord' => '',
  'تسجيل الخروج' => 'Logout!'


);
  return $lang[$word];
}

  ob_end_flush();

 ?>
