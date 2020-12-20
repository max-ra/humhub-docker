<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<?php $this->beginContent('@user/views/account/_userProfileLayout.php'); ?>
    <div class="help-block">
         <?php echo Yii::t('UserModule.account', 'Pleas change your password with Mainfranken Racing account management tool') ?>
    </div>
<?php $this->endContent(); ?>
