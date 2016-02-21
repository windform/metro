<?php

$word_first=get_theme_mod('word_first', __(' 我很期待与同龄人的交流。你的留言会被发布在我博客的留言板上，我会在有空时尽快回复你。') );
$word_second=get_theme_mod('word_second', __('你可以在这些社交网络上关注我,希望我们能够在有共同兴趣爱好的基础之上志同道合地走在一起！'));

echo '<div class="container">';
   echo ' <br>';
     echo '<p class="text-accent1 margin-topBottom40">';
        echo esc_html($word_first);
     echo '</p>';
        echo '<form action="" method="post">';
       echo ' <div class="grid">';
            echo '<div class="row cells3">';
                echo '<div class="cell">';
                    echo '<div class="input-control text" style="width:100%">';
                        echo '<span class="mif-user prepend-icon"></span>';
                        echo '<input class="text-accent" type="text" placeholder="你的称呼">';
                    echo '</div>';
                echo '</div>';
                echo '<div class="cell">';
                   echo' <div class="input-control text" style="width:100%">';
                       echo' <span class="mif-mail prepend-icon"></span>';
                       echo' <input class="text-accent" type="email" placeholder="你的邮箱">';
                   echo' </div>';
               echo' </div>';
               echo' <div class="cell">';
                   echo' <div class="input-control text" style="width:100%">';
                       echo' <span class="mif-vpn-publ prepend-icon"></span>';
                       echo' <input class="text-accent" type="url" placeholder="你的个人网址或社交网站">';
                   echo' </div>';
               echo' </div>';
           echo' </div>';
           echo' <div class="row cell">';
               echo' <div class="cell">';
                   echo' <div class="input-control textarea" data-role="input" data-text-auto-resize="true" data-text-max-height="400" style="width:100%">';
                       echo' <textarea class="textarea-leave text-accent" placeholder="有什么想说的吗？"></textarea>';
                   echo' </div>';
               echo' </div>';
           echo' </div>';
           echo' <div class="row cell">';
               echo' <div class="cell" style="text-align:center">';
                   echo' <button class="button primary loading-pulse big-button">提交留言</button>';
               echo' </div>';
           echo' </div>';

       echo' </div>';     
       echo' </form>';
       echo' <p class="text-accent1 margin-topBottom40">';
            echo esc_html($word_second);
       echo' </p>';
       echo' <div class="grid">';
           echo' <div class="row cells7 social-icon">';
               echo' <div class="cell">';
                   echo' <a class="social-link social-qq" onclick="javascript:window.open(\'http://b.qq.com/webc.htm?new=0&sid=867185661&o=www.ldyna.com&q=7\', \'_blank\', \'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no\');"  border="0" SRC=http://wpa.qq.com/pa?p=1:867185661:1 alt="qq-talk"></a>';
               echo' </div>';
               echo' <div class="cell">';
                    echo' <a class="social-link social-wechat"></a>';
               echo' </div>';
               echo' <div class="cell">';
                    echo' <a class="social-link social-webo" href="http://weibo.com/2338489331/profile?topnav=1&wvr=6&is_all=1" target="_blank"></a>';
               echo' </div>';
               echo' <div class="cell">';
                    echo' <a class="social-link social-google" href="https://plus.google.com/u/0/100134270141757264914" target="_blank"></a>';
               echo' </div>';
               echo' <div class="cell">';
                    echo' <a class="social-link social-github" href="https://github.com/windform" target="_blank"></a>';
               echo' </div>';
           echo' </div>';
       echo' </div>';
   echo' </div>';

?>

    
