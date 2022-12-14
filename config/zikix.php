<?php
return [
    'region_id'         => env('ALIYUN_REGION_ID', 'cn-hangzhou'),
    'access_key_id'     => env('ALIYUN_ACCESS_KEY_ID'),
    'access_key_secret' => env('ALIYUN_ACCESS_KEY_SECRET'),

    'slow_query_min_adb'   => env('SLOW_QUERY_MIN_ADB', 800),
    'slow_query_min_mysql' => env('SLOW_QUERY_MIN_MYSQL', 300),

    /**
     * https://help.aliyun.com/document_detail/29008.html
     */
    'sls_access_key'       => env('SLS_ACCESS_KEY'),
    'sls_access_secret'    => env('SLS_ACCESS_SECRET'),
    'sls_endpoint'         => env('SLS_ENDPOINT'),
    'sls_project'          => env('SLS_PROJECT'),
    'sls_store'            => env('SLS_STORE', ''),
    'sls_topic'            => env('SLS_TOPIC'),
    'ding_token'           => env('DING_TOKEN'),

    'weixin_url' => env('WEIXIN_URL'),

    'api_error_with_time'       => true,
    'api_error_with_request_id' => false,
    'api_key_case'              => CASE_LOWER,
];
