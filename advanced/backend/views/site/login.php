<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\captcha\Captcha;
 ?>
        <div class="main ">
            <!--登录-->
            <div class="login-dom login-max">
                <div class="logo text-center">
                    <a href="#">
                    <img src="../../CDN/Images/logo.png" width="180px" height="180px">
                    </a>
                </div>
                <div class="login container " id="login">
                    <p class="text-big text-center logo-color">
                        同一个账号，连接一切
                    </p>
                    <p class=" text-center margin-small-top logo-color text-small">
                        控制台 | 云平台 | 论坛 | 云市场
                    </p>
                    <?php $form = ActiveForm::begin([
                                    'id'=>'login-form',
                                    'validateOnBlur' => false,
                                    'options'=>['class'=>'login-form','autocomplete'=>'off'],
                    ]) ?>
                        

                    

                        <div class="login-box border text-small" id="box">

                            <?= $form->field($model, 'username',['template'=>'<div class="name " style="margin-top:8px;">{input}</div><div class="error-block">{error}</div>'])->textInput(['autofocus'=>true])?>

                            <!-- <div class="name border-bottom">
                                <input type="text" placeholder="手机 / 邮箱 / 某某账号" id="username" name="username" datatype="*" nullmsg="请填写帐号信息" autocomplete="new-password">

                            </div> -->

                            <?= $form->field($model, 'password',['template'=>'<div class="pwd">{input}</div><div class="error-block">{error}</div>'])->passwordInput()?>
            
                            <!-- <div class="pwd">
                                <input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码" autocomplete="new-password">
                            </div> -->


                        </div>

                        <!-- <input type="hidden" name="formhash" value="5abb5d21"/> -->
                        <?= Html::submitButton('立即登录',['class'=>'btn text-center login-btn','value'=>'立即登陆']) ?>
                        

                       <!--  <input type="submit" class="btn text-center login-btn" value="立即登录"> -->


                    <?php ActiveForm::end(); ?>
                    <div class="forget">
                        <a href="repassword.html" class="forget-pwd text-small fl">忘记登录密码？</a><a href="register.html" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>
                    </div>
                </div>
            </div>

            <div class="footer text-center text-small ie">
                Copyright 2013-2016 某某科技科技有限公司 版权所有 <a href="#" target="_blank">滇ICP备13005806号</a>
                <span class="margin-left margin-right">|</span>
                <script src="#" language="JavaScript"></script>
            </div>
            <div class="popupDom">
            <div class="popup text-default">
            </div>
        </div>
    </div>

