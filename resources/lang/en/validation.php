<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    // Specify validation messages
    'api_sashok_auth_format_regex' => 'Field "Format" must be contains a marker {username}',
    'valid_regex' => 'Field ":attribute" must be a valid regular expression.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'username' => 'Username',
        'email' => 'Email',
        'password' => 'Password',
        'balance' => 'Balance',
        'skin' => 'Skin',
        'cloak' => 'Cloak',
        'block_duration' => 'Duration of blocking',

        'min_sum' => 'Minimum balance recharge amount',
        'currency' => 'Currency name',
        'currency_html' => 'HTML representation of currency',

        'robokassa_login' => 'Robkassa. Login',
        'robokassa_password1' => 'Robkassa. Password №1',
        'robokassa_password2' => 'Robkassa. Password №2',
        'robokassa_algo' => 'Robkassa. Algorithm for calculating the checksum',
        'robokassa_test' => 'Robokassa. Test mode',

        'interkassa_checkout_id' => 'Interkassa. Checkout identifier',
        'interkassa_key' => 'Interkassa. Key',
        'interkassa_test_key' => 'Interkassa. Test key',
        'interkassa_currency' => 'Interkassa. Currency',
        'interkassa_algo' => 'Interkassa. Algorithm for calculating the checksum',
        'interkassa_test' => 'Interkassa. Test mode',

        'page_title' => 'Page title',
        'page_content' => 'Contents of the page',
        'page_url' => 'Page address',

        'news_title' => 'News title',
        'news_content' => 'Content of news',

        'server_name' => 'Server name',

        'products_per_page' => 'Quantity of goods on 1 page of the store',
        'payments_per_page' => 'Number of items on the payment history page in the user profile',
        'cart_per_page' => 'Number of items on the page of the in-game shopping cart in the user\'s profile',
        'news_first_portion' => 'Number of news items on the screen at page load time',
        'news_per_page' => 'Number of downloads at a time',
        'cart_capacity' => 'Maximum capacity of the cart',
        'ttl_statistic' => 'The lifetime of the statistics cache',
        'ttl_statistic_pages' => 'The lifetime of the static page cache',
        'ttl_news' => 'The lifetime of the news cache',
        'ttl_monitoring' => 'The lifetime of the server monitoring cache',
        'sashok_launcher_auth_error_message' => 'Message when the user enters the data incorrectly',
        'sashok_launcher_auth_format' => 'Format',
        'separator' => 'Separator',
        'recaptcha_public_key' => 'Public key reCAPTCHA',
        'recaptcha_secret_key' => 'Secret key reCAPTCHA',
        'test_mail_address' => 'E-mail address to which the letter will be sent',
        'sort_priority' => 'Sort priority',
        'server_ip' => 'Server IP address',
        'server_port' => 'Server port',
        'server_password' => 'RCON password',
        'rcon_connection_timeout' => 'Connection timeout',
        'rcon_monitoring_pattern' => 'Response format',
        'enable_monitoring' => 'Enable server monitoring',
        'signup_redirect' => 'Redirect user to custom URL after registration',
        'signup_redirect_url' => 'Custom URL',

        'character_skin_enabled' => 'Allow users to set skins',
        'character_cloak_enabled' => 'Allow users to set cloaks',
        'character_hd_skin_enabled' => 'Allow users to set HD skins',
        'character_hd_cloak_enabled' => 'Allow users to set HD cloaks',
        'character_skin_max_file_size' => 'Maximum size of the skin file',
        'character_cloak_max_file_size' => 'Maximum size of the cloak file',

        'categories.*.*' => 'Category name'
    ],

];
