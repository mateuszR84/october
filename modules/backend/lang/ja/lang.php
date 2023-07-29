<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => '無効なフィールドタイプ :type が使用されています。',
    'options_method_not_exists' => 'モデルクラスの:modelは、":field"フォームフィールドのためにオプションを返す、:method()メソッドを定義しなくてはなりません。',
  ],
  'widget' => [
    'not_registered' => '\':name\'は、ウィジット名として登録されていません。',
    'not_bound' => 'ウィジットクラス名の\':name\'は、コントローラーと結び付けられていません。',
  ],
  'page' => [
    'untitled' => 'タイトル無し',
    'access_denied' => [
      'label' => 'アクセスが拒否されました',
      'help' => 'このページを表示するために必要な権限がありません。',
      'cms_link' => 'CMSのバックエンドに行く',
    ],
  ],
  'partial' => [
    'not_found_name' => '\':name\'パーシャルは見つかりません。',
  ],
  'account' => [
    'sign_out' => 'ログアウト',
    'login_placeholder' => 'ユーザー名',
    'password_placeholder' => 'パスワード',
    'enter_email' => 'メールアドレスを入力してください',
    'email_placeholder' => 'メールアドレス',
    'apply' => '適用',
    'cancel' => 'キャンセル',
    'delete' => '削除',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'ダッシュボード',
    'widget_inspector_title' => 'ウィジェットの設定',
    'widget_inspector_description' => 'リポートウィジェットを設定します。',
    'widget_columns_label' => '幅 :columns',
    'widget_columns_description' => 'ウィジェット幅は1〜10の数字で指定してします。',
    'widget_columns_error' => 'ウィジェット幅は1〜10の数字で指定してください。',
    'columns' => '{1} カラム|[2,Inf] カラム',
    'widget_new_row_label' => '次の行に配置',
    'widget_new_row_description' => 'ウィジェットを次の行に配置します。',
    'widget_title_label' => 'ウィジェットタイトル',
    'widget_title_error' => 'ウィジェットタイトルを指定してください。',
    'status' => [
      'widget_title_default' => 'システム状態',
      'update_available' => '{0}個のアップデートが見つかりました。|{1} 個のアップデートが見つかりました。|[2,Inf] 個のアップデートが見つかりました。',
    ],
  ],
  'user' => [
    'name' => 'システム管理者',
    'menu_label' => 'システム管理者',
    'menu_description' => 'バックエンドの管理ユーザーとグループ、権限の管理。',
    'list_title' => 'システム管理者の管理',
    'new' => '新規システム管理者',
    'first_name' => '名',
    'last_name' => '姓',
    'full_name' => '姓名',
    'email' => 'メールアドレス',
    'groups' => 'グループ',
    'groups_comment' => 'このユーザーが所属するグループを指定してください。',
    'avatar' => 'アバター',
    'password' => 'パスワード',
    'password_confirmation' => 'パスワード確認',
    'permissions' => '権限',
    'superuser' => 'スーパーユーザー',
    'superuser_comment' => '全領域へのアクセスをこのユーザーに許可する場合、ボックスをチェックしてください。',
    'send_invite' => 'メールにより招待送信',
    'send_invite_comment' => 'このユーザーに、メールで招待状を送る場合、ボックスをチェックしてください。',
    'delete_confirm' => 'この管理者を本当に削除しますか？',
    'return' => 'システム管理者リストに戻る',
    'allow' => '許可',
    'inherit' => '継承',
    'deny' => '拒否',
    'group' => [
      'name' => 'グループ',
      'name_field' => '名前',
      'description_field' => '説明',
      'is_new_user_default_field' => 'デフォルトで新しいシステム管理者をこのグループに追加する。',
      'code_field' => 'コード',
      'code_comment' => 'もしあなたがAPIでアクセスしたい場合は、ユニークなコードを入力してください。',
      'menu_label' => 'グループ',
      'list_title' => 'グループ管理',
      'new' => '新規グループ',
      'delete_confirm' => '本当にこの管理者グループを削除しますか？',
      'return' => 'グループリストへ戻る',
    ],
    'preferences' => [
      'not_authenticated' => '設定を読み込み／保存する、認証されたユーザーが存在していません。',
    ],
  ],
  'list' => [
    'default_title' => 'リスト',
    'search_prompt' => '検索...',
    'no_records' => 'このビューにはレコードがありません。',
    'missing_model' => ':classクラスの中のリストビヘイビアーにモデルがありません。',
    'missing_column' => ':columnsに対する、カラム定義がありません。',
    'missing_columns' => ':classクラスの中のリストには、リストするカラムが定義されていません。',
    'missing_definition' => 'リストビヘイビアーは、\':field\'に対するカラムを持っていません。',
    'behavior_not_ready' => 'リストビヘイビアーは初期化されていません。コントローラーで、makeLists()を呼び出しているか確認してください。',
    'invalid_column_datetime' => 'カラムの値 \':column\' はDateTimeオブジェクトではありません。モデル内の $dates に指定していますか？',
    'pagination' => '表示中のレコード: :from-:to / :total',
    'prev_page' => '前のページ',
    'next_page' => '次のページ',
    'loading' => 'ロード中...',
    'setup_title' => 'リストのセットアップ',
    'setup_help' => 'リストの表示したいカラムをチェックボックスで選択してください。カラムの位置は上下にドラッグして変更できます。',
    'records_per_page' => 'ページ中のレコード数',
    'records_per_page_help' => 'ページあたりの表示レコード数を選択してください。1ページにたくさん表示するとパフォーマンスに影響があるので留意してください。',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => '新規 :name',
    'update_title' => '編集 :name',
    'preview_title' => 'プレビュー :name',
    'create_success' => ':nameを作成しました。',
    'update_success' => ':nameを更新しました。',
    'delete_success' => ':nameを削除しました。',
    'missing_id' => 'フォームのレコードIDが指定されていません。',
    'missing_model' => ':classクラスで使用している、フォームビヘイビアーは、モデル定義を持っていません。',
    'missing_definition' => 'フォームビヘイビアーは、\':field\'フィールドを持っていません。',
    'not_found' => 'IDが:idのフォームレコードが見つかりません。',
    'action_confirm' => '削除していいですか？',
    'create' => '作成',
    'create_and_close' => '作成後閉じる',
    'creating' => '作成中...',
    'creating_name' => ':name を作成中...',
    'save' => '保存',
    'save_and_close' => '保存後閉じる',
    'saving' => '保存中...',
    'saving_name' => ':name を保存中...',
    'delete' => '削除',
    'deleting' => '削除中...',
    'deleting_name' => ':name を削除中...',
    'reset_default' => '初期値にリセット',
    'resetting' => 'リセット',
    'resetting_name' => ':name を初期値にリセット中...',
    'undefined_tab' => 'その他',
    'field_off' => '無効',
    'field_on' => '',
    'add' => 'Add',
    'apply' => '適用',
    'cancel' => 'キャンセル',
    'close' => '閉じる',
    'confirm' => '確認',
    'reload' => 'リロード',
    'ok' => 'OK',
    'or' => 'または',
    'confirm_tab_close' => '本当にタブを閉じますか？ 保存されていない変更は消えてしまいます。',
    'behavior_not_ready' => 'フォームビヘイビアーは初期化されていません。コントローラーでinitForm()を呼び出しているか確認してください。',
    'preview_no_files_message' => 'ファイルはアップロードされません。',
    'select' => '選択',
    'select_all' => 'すべて選択',
    'select_none' => 'どれも選択しない',
    'insert_row' => '行を挿入',
    'delete_row' => '行を削除',
    'concurrency_file_changed_title' => 'ファイルは変更されていません。',
    'concurrency_file_changed_description' => '編集中のファイルが他のユーザーにより変更されました。リロードして加えた変更を破棄するか、そのまま上書きできます。',
  ],
  'relation' => [
    'missing_config' => 'リレーションビヘイビアは、\':config\'に対する設定を持っていません。',
    'missing_definition' => 'リレーションビヘイビアは、\':field\'フィールドに対する定義を持っていません。',
    'missing_model' => ':classクラスで使用している、リレーションビヘイビアは、モデル定義を持っていません。',
    'invalid_action_single' => 'このアクションは、単一リレーションでは実行できません。',
    'invalid_action_multi' => 'このアクションは、複数リレーションでは実行できません。',
    'help' => '項目をクリックすると追加されます。',
    'related_data' => '関連するデータ :name',
    'add' => '追加',
    'add_name' => '追加 :name',
    'add_selected' => '追加は選択されています',
    'add_a_new' => '新しい追加 :name',
    'link_selected' => 'リンクは選択されています',
    'link_a_new' => '新しいリンク :name',
    'cancel' => 'キャンセル',
    'close' => '閉じる',
    'create' => '作成',
    'create_name' => '作成 :name',
    'update' => '更新',
    'update_name' => '更新 :name',
    'preview' => 'プレビュー',
    'preview_name' => 'プレビュー :name',
    'remove' => '削除',
    'remove_name' => '削除 :name',
    'delete' => '削除',
    'delete_name' => '削除 :name',
    'delete_confirm' => '削除していいですか？',
    'link' => 'リンク',
    'link_name' => 'リンク :name',
    'unlink' => 'リンク解除',
    'unlink_name' => 'リンク解除 :name',
    'unlink_confirm' => 'リンクを解除していいですか？',
  ],
  'model' => [
    'name' => 'モデル',
    'not_found' => 'IDが:idの、\':class\'モデルは見つかりません。',
    'missing_id' => 'モデルレコードを探すためのIDが、指定されていません。',
    'missing_relation' => '\':class\'モデルは、\':relation\'の定義を持っていません。',
    'missing_method' => 'モデル \':class\' にメソッド \':method\' は定義されていません。',
    'invalid_class' => ':classクラスで使用している、:modelモデルは正しくありません。\\Modelクラスを継承してください。',
    'mass_assignment_failed' => 'モデル属性\':attribute\'の一括設定に失敗しました。',
  ],
  'warnings' => [
    'tips' => 'システム構成のチップス',
    'tips_description' => 'あなたが、システムを適切に設定するために注意を払う必要がある問題があります。',
    'permissions' => 'ディレクトリ":name"またはそのサブディレクトリは、PHPから書き込みできません。このディレクトリのパーミッションを設定してください。',
    'extension' => 'PHP拡張":name"はインストールされていません。PHP拡張をインストールして有効にしてください。',
  ],
  'editor' => [
    'menu_label' => 'エディタ',
    'menu_description' => 'コードエディタ設定の管理',
  ],
  'tooltips' => [
    'preview_website' => 'Webサイトをプレビューする',
  ],
  'mysettings' => [
    'menu_label' => 'マイ設定',
    'menu_description' => 'この管理者アカウントの設定をします。',
  ],
  'myaccount' => [
    'menu_label' => 'アカウント',
    'menu_description' => '名前、電子メールアドレス、パスワードなどのあなたのアカウント詳細をアップデートしてください。',
    'menu_keywords' => 'セキュリティ ログイン',
  ],
  'branding' => [
    'menu_label' => 'バックエンドのカスタマイズ',
    'menu_description' => 'システム管理者領域を設定します。例えば、名前や色、ロゴ。',
    'accent_color' => 'Accent color',
  ],
  'backend_preferences' => [
    'menu_label' => 'バックエンド',
    'menu_description' => '言語の設定などを行います。',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'すべて',
  ],
];
