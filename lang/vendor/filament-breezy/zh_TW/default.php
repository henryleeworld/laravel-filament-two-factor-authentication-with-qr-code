<?php

return [
    'password_confirm' => [
        'heading' => '確認密碼',
        'description' => '請確認您的密碼以完成此操作。',
        'current_password' => '當前密碼',
    ],
    'two_factor' => [
        'heading' => '雙重挑戰',
        'description' => '請輸入您的認證器應用程式提供的驗證碼以存取您的帳號。',
        'code_placeholder' => 'XXX-XXX',
        'recovery' => [
            'heading' => '雙重挑戰',
            'description' => '請輸入您的緊急恢復碼以存取您的帳號。',
        ],
        'recovery_code_placeholder' => 'abcdef-98765',
        'recovery_code_text' => '裝置遺失？',
        'recovery_code_link' => '使用恢復碼',
        'back_to_login_link' => '返回登入',
    ],
    'profile' => [
        'account' => '帳號',
        'profile' => '個人資料',
        'my_profile' => '我的個人資料',
        'subheading' => '在這裡管理您的使用者個人資料。',
        'personal_info' => [
            'heading' => '個人資訊',
            'subheading' => '管理您的個人資訊。',
            'submit' => [
                'label' => '更新',
            ],
            'notify' => '個人資料更新成功！',
        ],
        'password' => [
            'heading' => '密碼',
            'subheading' => '長度必須至少為 8 個字元。',
            'submit' => [
                'label' => '更新',
            ],
            'notify' => '密碼更新成功！',
        ],
        '2fa' => [
            'title' => '雙重認證',
            'description' => '管理您帳號的雙重認證（推薦）。',
            'actions' => [
                'enable' => '啟用',
                'regenerate_codes' => '重新產生恢復碼',
                'disable' => '停用',
                'confirm_finish' => '確認並完成',
                'cancel_setup' => '取消設定',
                'confirm' => '確認',
            ],
            'setup_key' => '設定金鑰',
            'must_enable' => '您必須啟用雙重認證才能使用此應用程式。',
            'not_enabled' => [
                'title' => '您尚未啟用雙重認證。',
                'description' => '當啟用雙重認證時，在認證過程中會提示您輸入一個安全且隨機的權杖 (token)。您可以從手機的認證器應用程式（例如 Google 認證應用程式或 Microsoft 認證應用程式）中獲得此權杖 (token)。',
            ],
            'finish_enabling' => [
                'title' => '完成啟用雙重認證。',
                'description' => '為了完成雙重認證設定，請使用您手機的認證器應用程式掃描以下的 QR code，或輸入設定金鑰並提供產生的 OTP 碼。',
            ],
            'enabled' => [
                'notify' => '啟用雙重認證。',
                'title' => '您已啟用雙重認證！',
                'description' => '現已啟用雙重認證。 這有助於使您的帳號更加安全。',
                'store_codes' => '如果您的裝置遺失，恢復碼可用於恢復對您帳號的訪問權限。 警告！恢復碼只會顯示一次。',
            ],
            'disabling' => [
                'notify' => '雙重認證已被停用。',
            ],
            'regenerate_codes' => [
                'notify' => '新的恢復碼已產生。',
            ],
            'confirmation' => [
                'success_notification' => '驗證碼已驗證。 啟用雙重認證。',
                'invalid_code' => '您輸入的驗證碼無效。',
            ],
        ],
        'sanctum' => [
            'title' => 'API 權杖 (token)',
            'description' => '管理允許協力廠商與我們的應用程式進行認證的 API 權杖 (token)。',
            'create' => [
                'notify' => '權限 (token) 建立成功！',
                'message' => '您的權限 (token) 在建立時僅顯示一次。 如果您遺失了權限 (token)，則需要將其刪除並建立一個新權限 (token)。',
                'submit' => [
                    'label' => '建立',
                ],
            ],
            'update' => [
                'notify' => '權限 (token) 更新成功！',
                'submit' => [
                    'label' => '更新',
                ],
            ],
            'copied' => [
                'label' => '我已經複製了我的權限 (token)',
            ],
        ],
    ],
    'clipboard' => [
        'link' => '複製到剪貼板',
        'tooltip' => '已複製！',
    ],
    'fields' => [
        'avatar' => '頭像',
        'email' => '電子郵件',
        'login' => '登入',
        'name' => '名稱',
        'password' => '密碼',
        'password_confirm' => '密碼確認',
        'new_password' => '新的密碼',
        'new_password_confirmation' => '確認密碼',
        'token_name' => '權杖 (token) 名稱',
        'token_expiry' => '權杖 (token) 過期',
        'abilities' => '權限',
        '2fa_code' => '驗證碼',
        '2fa_recovery_code' => '恢復碼',
        'created' => '建立',
        'expires' => '過期',
    ],
    'or' => '或',
    'cancel' => '取消',
    'login' => [
        'username_or_email' => '使用者名稱或電子郵件',
        'forgot_password_link' => '忘記密碼了嗎？',
        'create_an_account' => '註冊帳號',
    ],
    'registration' => [
        'title' => '註冊',
        'heading' => '註冊新的帳號',
        'submit' => [
            'label' => '註冊',
        ],
        'notification_unique' => '此電子郵件的帳號已存在。請登入。',
    ],
    'reset_password' => [
        'title' => '忘記密碼了嗎？',
        'heading' => '重設您的密碼',
        'submit' => [
            'label' => '傳送',
        ],
        'notification_error' => 'Error: 請稍後再試。',
        'notification_error_link_text' => '再試一次',
        'notification_success' => '檢查您的電子郵件以取得進一步說明！',
    ],
    'verification' => [
        'title' => '驗證您的電子郵件',
        'heading' => '需要電子郵件驗證',
        'submit' => [
            'label' => '登出',
        ],
        'notification_success' => '檢查您的電子郵件以取得進一步說明！',
        'notification_resend' => '新的驗證電子郵件已傳送。',
        'before_proceeding' => '在繼續之前，請檢查您的電子郵件中的驗證連結。',
        'not_receive' => '如果您沒有收到郵件，',
        'request_another' => '按一下這裡來要求另一個',
    ],
];
