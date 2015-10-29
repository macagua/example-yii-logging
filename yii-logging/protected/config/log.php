<?php
return array(
    'class'=>'CLogRouter',
    'routes'=>array(
        array(
            'class'=>'CFileLogRoute',
            'enabled'=>YII_DEBUG,
            'levels'=>'trace, profile',
        ),
        array(
            'class'=>'CFileLogRoute',
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            //'levels'=>'trace, info, profile',
            'levels'=>'info',
            'logFile'=>'info.log',
        ),
        array(
            'class'=>'CFileLogRoute',
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            'levels'=>'error, warning',
            'filter'=>'CLogFilter',
            'logFile'=>'error.log',
        ),
        array(
            'class'=>'FileLogRouter',
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            'levels'=>'error, warning',
            'logFile'=>'mycustom.log',
        ),
        // sending a email with log
        /*array(
            'class'=>'CEmailLogRoute',
            #'enabled'=>!YII_DEBUG,
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            'levels'=>'error, warning',
            'categories'=>'system.*',
            'emails'=>'me@example.com',
        ),*/
        /*array(
            // uncomment the following to show log messages on web pages
            'class'=>'CWebLogRoute',
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            'levels'=>'error, warning, trace, info, profile',
            // categories are those you used in the call to Yii::trace
            'categories'=>'*',
            // This is self-explanatory right? but also works in Chrome!
            'showInFireBug'=>true
        ),*/
        /*array(
            'class'=>'CProfileLogRoute',
            'enabled'=>YII_DEBUG,
            // you can include more levels separated by commas
            'levels'=>'error, warning, trace, info, profile',
        ),*/
    ),
);
