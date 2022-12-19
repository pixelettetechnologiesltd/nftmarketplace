<div class="profile-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="border rounded-5 p-3 p-sm-5">
                    <?php if (session()->has("message")) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><?php echo display('Success'); ?>!</strong> <?php echo session("message"); ?>
                        </div>
                    <?php    }  ?>
                    <?php if (session()->has("exception")) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><?php echo display('Exception'); ?>!</strong> <?php echo session("Exception"); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->has("error")) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><?php echo display('error'); ?>!</strong> <?php echo session("error"); ?>
                        </div>
                    <?php } ?>
                    <?php echo form_open_multipart("", "id='requestCreateNftform'") ?>
                    <input type="text" name="wallet" class="form-control" required="required">
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Name'); ?></label>
                        <input type="text" name="name" class="form-control" placeholder="<?php echo display('Name'); ?>" required="required">
                    </div>
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('VAT Number'); ?></label>
                        <input type="text" name="vat_number" class="form-control" placeholder="<?php echo display('VAT Number'); ?>" required="required">
                    </div>
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Email'); ?></label>
                        <input type="text" name="email" class="form-control" placeholder="<?php echo display('Email'); ?>" required="required">
                    </div>
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Phone'); ?></label>
                        <input type="text" name="phone" class="form-control" placeholder="<?php echo display('Phone'); ?>" required="required">
                    </div>
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Project scope'); ?></label>
                        <textarea type="textarea" name="project_scope" class="form-control" placeholder="<?php echo display('Project scope'); ?>" required="required"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="nft-title" class="form-label fw-semi-bold text-black mb-1"><?php echo display('Reason to Create a Project'); ?></label>
                        <textarea type="textarea" name="reason_to_create_project" class="form-control" placeholder="<?php echo display('Reason to Create a Project'); ?>" required="required"></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="request-mint-submit">
                            <button type="submit" class="btn btn-dark w-100 btn-profile mt-4"><?php echo display('Request For NFT'); ?></button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>