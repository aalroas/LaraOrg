<?php

return array (
  'backend' =>
  array (
    'access' =>
    array (
      'roles' =>
      array (
        'already_exists' => 'Bu rol zaten var. Lütfen farklı bir isim seçin.',
        'cant_delete_admin' => 'Yönetici rolünü silemezsiniz.',
        'create_error' => 'Bu rolü oluştururken bir sorun oluştu. Lütfen tekrar deneyin.',
        'delete_error' => 'Bu rolü silerken bir sorun oluştu. Lütfen tekrar deneyin.',
        'has_users' => 'İlişkili kullanıcı içeren bir rolü silemezsiniz.',
        'needs_permission' => 'Bu rol için en az bir yetki seçmelisiniz.',
        'not_found' => 'Bu rol yok.',
        'update_error' => 'Bu rolü güncelleştirirken bir sorun oluştu. Lütfen tekrar deneyin.',
      ),
      'users' =>
      array (
        'already_confirmed' => 'Bu kullanıcı zaten onaylandı.',
        'cant_confirm' => 'Kullanıcı hesabı doğrulanırken bir sorun oluştu.',
        'cant_deactivate_self' => 'Kendinize bu işlemi yapamazsınız.',
        'cant_delete_admin' => 'Süper yöneticiyi silemezsiniz.',
        'cant_delete_self' => 'Kendinizi silemezsiniz.',
        'cant_delete_own_session' => 'Kendi oturumunuzu silemezsiniz.',
        'cant_restore' => 'Bu kullanıcı silinmediği için geri yüklenemez.',
        'cant_unconfirm_admin' => 'Süper yöneticinin onayını kaldıramazsınız.',
        'cant_unconfirm_self' => 'Kendinizin onayını kaldıramazsınız.',
        'create_error' => 'Bu kullanıcı oluşturulurken bir sorun oluştu. Lütfen tekrar deneyin.',
        'delete_error' => 'Bu kullanıcı silinirken bir sorun oluştu. Lütfen tekrar deneyin.',
        'delete_first' => 'Bu kullanıcı kalıcı olarak yokedilmeden önce önce silinmelidir.',
        'email_error' => 'Bu e-posta adresi farklı bir kullanıcıya ait.',
        'mark_error' => 'Bu kullanıcıyı güncellerken bir sorun oluştu. Lütfen tekrar deneyin.',
        'not_confirmed' => 'Bu kullanıcı onaylanmadı.',
        'not_found' => 'Bu kullanıcı bulunamadı.',
        'restore_error' => 'Bu kullanıcı geri yüklenirken bir sorun oluştu. Lütfen tekrar deneyin.',
        'role_needed_create' => 'En az bir rol seçmelisiniz.',
        'role_needed' => 'En az bir rol seçmelisiniz.',
        'social_delete_error' => 'Sosyal hesap kullanıcıdan kaldırılırken bir sorun oluştu.',
        'update_error' => 'Bu kullanıcı güncellenirken bir hata oluştu. Lütfen tekrar deneyin.',
        'update_password_error' => 'Bu kullanıcının şifresini değiştirirken bir sorun oluştu. Lütfen tekrar deneyin.',
      ),
    ),
  ),
  'frontend' =>
  array (
    'auth' =>
    array (
      'confirmation' =>
      array (
        'already_confirmed' => 'Hesabınız zaten doğrulanmış.',
        'confirm' => 'Hesabınızı onaylayın!',
        'created_confirm' => 'Hesabınız başarıyla oluşturuldu. Hesabınızı onaylamak için size bir e-posta gönderdik.',
        'created_pending' => 'Hesabınız başarıyla oluşturuldu ve onay bekliyor. Hesabınız onaylandığında bir e-posta gönderilecektir.',
        'mismatch' => 'Onay kodunuz uyuşmuyor.',
        'not_found' => 'Onay kodu mevcut değil.',
        'pending' => 'Hesabınız şu anda onay bekliyor.',
        'resend' => 'Hesabınız doğrulanmadı. Lütfen e-postanızdaki onay bağlantısını tıklayın veya onay e-postasını yeniden göndermek için <a href=":url">buraya tıklayın</a>',
        'success' => 'Hesabınız başarıyla onaylandı!',
        'resent' => 'Kayıtlı e-posta adresine yeni bir onay e-postası gönderildi.',
      ),
      'deactivated' => 'Hesabınız onay bekliyor',
      'email_taken' => 'Bu e-posta adresi zaten alınmış.',
      'password' =>
      array (
        'change_mismatch' => 'Bu şifre eski şifrenizle uyuşmuyor.',
        'reset_problem' => 'Şifrenizi sıfırlarken bir sorun oluştu. Lütfen şifre sıfırlama e-postasını tekrar gönderin.',
      ),
      'registration_disabled' => 'Kayıt şu anda kapalıdır.',
    ),
  ),
);
