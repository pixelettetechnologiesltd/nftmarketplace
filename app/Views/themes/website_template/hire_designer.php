<div class="profile-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="border rounded-5 p-3 p-sm-5">
                <?php  if(session()->has("message")){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong><?php echo display('Success'); ?>!</strong> <?php echo session("message"); ?>
                    </div>
            <?php    }  ?>
            <?php  if(session()->has("exception")){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong><?php echo display('Exception'); ?>!</strong> <?php echo session("Exception"); ?>
                    </div>
                <?php } ?>
                <?php  if(session()->has("error")){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong><?php echo display('error'); ?>!</strong> <?php echo session("error"); ?>
                    </div>
                <?php } ?> 
                <?php  echo form_open_multipart(base_url("nft/request_Designer")) ?>
                        <div class="mb-4">
                            <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Collection Name'); ?></label>
                            <input type="text" name="collection_name" class="form-control"  placeholder="<?php echo display('Collection Name'); ?>" required="required">
                        </div>
                        <div class="mb-4">
                            <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('No of Nfts'); ?></label>
                            <input type="text" name="no_nfts" class="form-control"  placeholder="<?php echo display('No of Nfts'); ?>" required="required">
                        </div>
                        <div class="mb-4">
                            <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('description'); ?></label>
                            <input type="text" name="description" class="form-control"  placeholder="<?php echo display('description'); ?>" required="required">
                        </div>
                         <div class="mb-4">
                        <div class="mint-submit">
                            <button type="submit" class="btn btn-dark w-100 btn-profile mt-4" ><?php echo display('Hire a Designer'); ?></button>
                        </div>
                    <?php echo form_close(); ?>
               </div>
            </div>
        </div>
    </div>
</div>
 