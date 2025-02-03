<video 
src="<?php echo Yii::$app->request->baseUrl.'/'.$video;  ?>" 
preload="metadata" 
class="img-responsive ad_video" 
style='display:none' 
id="<?php echo "video_".$index?>"
autoplay loop></video>