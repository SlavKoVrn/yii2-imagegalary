<div class="row <?= $class ?>" >
    <div id="<?= $id ?>-main-image" class="col-xs-12" style="text-align:center;margin:7px">
        <?php
		$first=true;
        foreach ($images as $img) {
			if ($first){
				$first=false;
				$vid='';
                $image_id = 'id="main-image"';
			}else{
				$vid='style="display:none"';
                $image_id = '';
            }
        ?>
    		<a data-clicked="1" <?= $vid; ?> href="<?= $img['src'] ?>"" data-lightbox="<?= $id ?>" data-title="<?= $img['title'] ?>" >
                <img <?= $image_id ?> src="<?= $img['src'] ?>" alt="<?= $img['title'] ?>"  style="width:<?= $image_width ?>;height:<?= $image_height ?>;" />
            </a>
        <?php } ?>
    </div>
    <div class="col-xs-1" style="padding:0;margin:0;">
        <img style="width:22px;cursor:pointer;" id="<?= $id ?>-left" src="<?= $left ?>" alt="Left" />
    </div>
    <div id="<?= $id ?>" class="col-xs-10">
        <?php foreach ($images as $img) { ?>
            <img src="<?= $img['src'] ?>" style="width:<?= $thumb_width ?>px;height:<?= $thumb_height ?>px;cursor:pointer;" alt="<?= $img['title'] ?>">
        <?php } ?>
    </div>
    <div class="col-xs-1" style="padding:0;margin:0;">
        <img style="width:22px;cursor:pointer;padding:0;margin:0;" id="<?= $id ?>-right" src="<?= $right ?>" alt="Right" />
    </div>
</div>
