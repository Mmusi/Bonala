<?php require_once 'shared/header.php' ?>

    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="load_more">
                <div class="row">

                    <div class="col-lg-8 col-lg-offset-2">

                        <h1 style="font-weight:bold; margin-bottom:25px;">Login</h1>

                        <?php if (!empty($this->msgError)): ?>
                            <p class="msg"><?=$this->msgError?></p>
                        <?php endif ?>

                        <?php if (!empty($this->msgSuccess)): ?>
                            <b><p class="msg"><?=$this->msgSuccess?></p></b>
                        <?php endif ?>


                            <form method="post" action="" role="form">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
											<div style="width:45%; float:left;">
                                                <label style="color: #111; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: left;" for="username">Username * </label><br/>
								            </div>
											<div style="width:45%; float:left;">
                                                <input style="" id="username" type="text" name="username" class="form-control" placeholder="Please enter your username." required="required" data-error="Username is required.">
											</div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  class="row">
                                        <div  class="col-md-12">
                                            <div style="margin:-25px;"  class="form-group">
											
											<div style="width:45%; float:left;">
                                                <label style="color: #111; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: left;" for="password">Password *</label><br/>
											</div>
                                                <small style="display:none;"><a href="<?=ROOT_URL?>?p=BonalaController&amp;a=changePwd">Change password?</a></small>
												
											<div style="width:45%; float:left;">
                                                <input id="password" type="password" name="password" class="form-control" placeholder="Please enter your password." required="required" data-error="Author is required.">
											</div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div style="margin-top:35px;" class="col-md-12">
                                            <input type="submit" name="add_submit" class="btn btn-success btn-send" value="Login">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="text-align:center;" class="text-muted"><strong>*</strong> Please provide the fields as required.</p>
                                            </div>
                                        </div>
                                    </div>

                            </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content -->

<?php require_once 'shared/footer.php' ?>
