<?php require_once 'shared/header.php' ?>

	<div class="details">
		<div class="container">
			<div  class="">
				<h2 style=" margin-bottom:10px; margin-bottom:0px; color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 35px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: left"  ><?=htmlspecialchars($this->post->title)?></h2>
			    <br>
				<h3 style=" color: #111; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: 300; line-height: 32px; margin: 0 0 2px; text-transform:none; " ><?=nl2br(htmlspecialchars($this->post->small_desc))?></h3>
			</div>
	
		
			<div class="det_text">
				<p><?=nl2br(htmlspecialchars($this->post->content))?></p>
			</div>
			<ul class="links">
				<li><i class="date"> </i><span class="icon_text"><?=$this->post->date?></span></li>
				<li><a href="#"><i class="admin"> </i><span class="icon_text"><?=$this->post->author?></span></a></li>
			</ul>
			<br/><br/>
            <!-- If user is not logged in -->
            <?php if(!empty($_SESSION['active'])) : ?>
                <a href="<?=ROOT_URL?>?p=BonalaController&amp;a=edit&amp;id=<?=$this->post->id?>" class="link">Edit</a>
                <form name="delete" action="<?=ROOT_URL?>?p=BonalaController&amp;a=delete&amp;id=<?=$this->post->id?>" method="post" class="link">
                    <button type="submit" name="delete" value="1" class="bold">
                        Delete
                    </button>
                </form>
            <?php elseif(empty($_SESSION['active'])) : ?>
                <p style="display:none;" class="addFirstPost">Please <a style="display:none;"  href="<?=ROOT_URL?>?p=BonalaController&amp;a=login">login</a> to edit/delete.</p>
            <?php endif ?>
		</div>
	</div>
	
<?php require_once 'shared/footer.php' ?>