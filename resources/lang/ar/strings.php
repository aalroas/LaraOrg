<?php

return array (
  'backend' => 
  array (
    'access' => 
    array (
      'users' => 
      array (
        'delete_user_confirm' => 'هل أنت متأكد من رغبتك في حذف هذا المستخدم نهائياً؟ إذا إخترت المتابعة سيتم ظهور خطأ في أي مكان يتعلق برقم ID هذا المستخدم.تابع بحذر وعلى مسؤوليتك الكاملة. لايمكن إستعادة المستخدم مرة أخرى إذا إخترت المتابعة.',
        'if_confirmed_off' => '(إذا كان خيار التفعيل مفعلاً في الإعدادات)',
        'restore_user_confirm' => 'إستعادة هذا المستخدم إلى حالته الأصلية؟',
        'no_deactivated' => 'لا يوجد مستخدمين غير نشطين.',
        'no_deleted' => 'لا يوجد مستخدمين محذوفين.',
      ),
    ),
    'dashboard' => 
    array (
      'title' => 'لوحة تحكم الإدارة',
      'welcome' => 'أهلاً وسهلاً',
    ),
    'general' => 
    array (
      'all_rights_reserved' => 'جميع الحقوق محفوظة.',
      'are_you_sure' => 'هل أنت متأكد؟',
      'boilerplate_link' => 'جمعية تنمية الاعمال والمستثمرين | الرئيسية',
      'continue' => 'متابعة',
      'member_since' => 'عضو منذ',
      'minutes' => 'دقيقة',
      'search_placeholder' => 'بحث...',
      'timeout' => 'تم تسجيل خروجك تلقائيًا لأسباب أمنية نظرًا لعدم وجود نشاط لك فيها',
      'see_all' => 
      array (
        'messages' => 'رؤية جميع الرسائل',
        'notifications' => 'عرض الكل',
        'tasks' => 'عرض جميع المهمات',
      ),
      'status' => 
      array (
        'online' => 'موجود',
        'offline' => 'غير موجود',
      ),
      'you_have' => 
      array (
        'messages' => '{0} ليس لديك أي رسائل|{1} لديك رسالة واحدة|{2} لديك رسالتان|[3,10] لديك :number رسائل|[11,inf] لديك :number رسالة',
        'notifications' => '{0} ليس لديك أي إشعارات|{1} لديك إشعار واحد|{2} لديك إشعاران|[3,10] لديك :number إشعارات|[11,inf] لديك :number إشعاراً',
        'tasks' => '{0} ليس لديك أي مهمات|{1} لديك مهمة واحدة|{2} لديك مهمتان|[3,10] لديك :number مهمات|[11,inf] لديك :number مهمة',
      ),
    ),
    'search' => 
    array (
      'empty' => 'Please enter a search term.',
      'incomplete' => 'You must write your own search logic for this system.',
      'title' => 'Search Results',
      'results' => 'Search Results for :query',
    ),
    'welcome' => '

<p>kodatik.com</p>',
  ),
  'emails' => 
  array (
    'auth' => 
    array (
      'account_confirmed' => 'Your account has been confirmed.',
      'error' => 'Whoops!',
      'greeting' => 'مرحبا!',
      'regards' => 'مع تحيات،',
      'trouble_clicking_button' => 'إذا كنت تواجه مشكلة في النقر فوق الزر ": action_text" ، فانسخ عنوان URL أدناه والصقه في متصفح الويب الخاص بك:',
      'thank_you_for_using_app' => 'شكرا لك على استخدام التطبيق!',
      'password_reset_subject' => 'رابط إعادة تعيين كلمة المرور',
      'password_cause_of_email' => 'أنت تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك.',
      'password_if_not_requested' => 'إذا لم تطلب إعادة تعيين كلمة المرور ، فلا يلزم اتخاذ أي إجراء آخر.',
      'reset_password' => 'إضغط هنا لإعادة تعيين كلمة مرورك',
      'click_to_confirm' => 'إضغط هنا لتفعيل account:',
    ),
    'contact' => 
    array (
      'email_body_title' => 'لديك طلب نموذج اتصال جديد: فيما يلي التفاصيل:',
      'subject' => 'جديد:app_name تقديم نموذج الاتصال!',
    ),
  ),
  'frontend' => 
  array (
    'test' => 'تجربة',
    'tests' => 
    array (
      'based_on' => 
      array (
        'permission' => 'صلاحية بناء ًعلى - ',
        'role' => 'دور بناء ًعلى - ',
      ),
      'js_injected_from_controller' => 'Javascript Injected from a Controller',
      'using_blade_extensions' => 'إستخدام Blade Extensions',
      'using_access_helper' => 
      array (
        'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
        'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
        'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
        'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
        'permission_id' => 'Using Access Helper with Permission ID',
        'permission_name' => 'Using Access Helper with Permission Name',
        'role_id' => 'Using Access Helper with Role ID',
        'role_name' => 'Using Access Helper with Role Name',
      ),
      'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
      'you_can_see_because' => 'أنت ترى هذا لأن لديك دور \':role\'!',
      'you_can_see_because_permission' => 'أنت ترى هذا لإن لديك صلاحية \':permission\'!',
    ),
    'general' => 
    array (
      'joined' => 'انضم',
    ),
    'user' => 
    array (
      'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
      'email_changed_notice' => 'You must confirm your new e-mail address before you can log in again.',
      'profile_updated' => 'تم تحديث الملف الشخصي بنجاح.',
      'password_updated' => 'تم تحديث كلمة المرور بنجاح.',
    ),
    'welcome_to' => 'مرحبا بك في :place',
  ),
);
