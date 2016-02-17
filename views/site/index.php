<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php

	/*якщо гість, то побачить кнопку для авторизації*/


	if(Yii::$app->user->isGuest){?>  

    <div class="jumbotron">
        <h1>Привіт!</h1>

        <p class="lead">Якщо ти хочеш побачити щось більше, а ніж просто білий екран - жми кнопку Авторизуватись.</p>

        <div class="body-content">

	        <div class="row"
	               	<p><a class="hinge btn btn-lg btn-info" href="login">Авторизуватись</a></p><br><br><br>
	        </div>

	    </div>

        <small>P.s. login & pass: admin</small>

    </div>

<?php } 

	/*Якщо авторизований - побачить кнопку для перегляду таблички*/

	else{?>

    <div class="jumbotron">
        <h1>Вітаю!</h1>

        <p class="lead">Ти авторизувався :).</p>
		
	    <div class="body-content">
	            <div class="row">

	            	<!--Для елегантності якір роблю не ../book/index , а за допомогою UrlManager-->

	               	<p><a class="btn btn-lg btn-info" href='<?php echo Yii::$app->UrlManager->createUrl(['book/index']);?>'>Переглянути табличку Book</a></p>
	        </div>
	    </div>
    </div> 
<?php } ?>
</div>
