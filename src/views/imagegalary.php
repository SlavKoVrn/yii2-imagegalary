<div class="row <?= $class ?>" style="width:<?= $div_width ?>px;height:<?= $div_height ?>px;text-align:center;">
    <div id="<?= $id ?>-main-image" class="col-xs-12" style="text-align:center;margin:7px">
        <?php
		$first=true;
        foreach ($images as $img) {
			if ($first){
				$first=false;
				$vid='';
			}else
				$vid='style="display:none"';
        ?>
    		<a <?= $vid; ?> href="<?= $img['src'] ?>" itemprop="image" class="zoom" title="<?= $img['title'] ?>" data-rel="prettyPhoto[<?= $id ?>]">
                <img src="<?= $img['src'] ?>" title="<?= $img['title'] ?>" style="width:<?= $image_width ?>px;height:<?= $image_height ?>px;" />
            </a>
        <?php } ?>
    </div>
    <div class="col-xs-1" style="padding:0;margin:0;">
        <img style="width:22px;cursor:pointer;" id="<?= $id ?>-left" src="<?= $left ?>" />
    </div>
    <div id="<?= $id ?>" class="col-xs-10">
        <?php foreach ($images as $img) { ?>
            <img src="<?= $img['src'] ?>" style="width:<?= $thumb_width ?>px;height:<?= $thumb_height ?>px;cursor:pointer;" alt="<?= $img['title'] ?>">
        <?php } ?>
    </div>
    <div class="col-xs-1" style="padding:0;margin:0;">
        <img style="width:22px;cursor:pointer;padding:0;margin:0;" id="<?= $id ?>-right" src="<?= $right ?>" />
    </div>
</div>
