fis.config.set('modules.postpackager', 'simple');
fis.config.set('pack', {
    '/pkg/lib.js': [
        'js/bootstrap.min.js',
        'js/avalon.min.js',
    ],
    '/pkg/lib.css' : [
        'css/bootstrap.min.css',
        'css/bootstrap-grid-ms.min.css',
        'css/font-awesome.min.css'
    ],
    '/pkg/back.css' : [
        'css/main.css',
        'css/backstage_operate.css',
        'css/consumer_list.css'
    ],
    '/pkg/front.css' : [
        'css/truck.css',
        'css/applyof-insurance.css',
        'css/css.css',
        'css/fill_inf.css',
        'css/flowpath_introduce.css',
        'css/schedule.css',
        'css/upload_data.css',
        'css/validform.css'
    ]
});
fis.config.merge({
    roadmap : {
        //所有静态资源文件都使用 http://s1.example.com 或者 http://s2.example.com 作为域名
        domain : 'http://127.0.0.1:8083/test,http://127.0.0.1:8080'
    }
});
