<?php  echo form_open_multipart(base_url("backend/nft/req_form")) ?>
      <div> 
        <div class="form-group row"> 
          <div class="col-sm-6">
            <label><?php echo display('Name'); ?> <i class="text-danger">*</i></label>
              <input name="name" value="" class="form-control" type="text" id="name" autocomplete="off" placeholder="<?php echo display('name'); ?>" required>
          </div> 
          <div class="col-sm-6">
            <label><?php echo display('VAT Number'); ?> <i class="text-danger">*</i></label>
              <input name="vat_number" value="" class="form-control" type="text" id="VAT_Number" autocomplete="off" placeholder="<?php echo display('VAT Number'); ?>" required>
          </div> 
          <div class="col-sm-6">
            <label><?php echo display('Email'); ?> <i class="text-danger">*</i></label>
              <input name="email" value="" class="form-control" type="email" id="email" autocomplete="off" placeholder="<?php echo display('Email'); ?>" required>
          </div> 
          <div class="col-sm-6">
            <label><?php echo display('Phone'); ?> <i class="text-danger">*</i></label>
              <input name="phone" value="" class="form-control" type="number" id="number" autocomplete="off" placeholder="<?php echo display('number'); ?>" required>
          </div> 
          <div class="col-sm-6">
            <label><?php echo display('Project scope'); ?> <i class="text-danger">*</i></label>
              <textarea name="project_scope" value="" class="form-control" type="textarea" id="project_scope" autocomplete="off" placeholder="<?php echo display('Project Scope'); ?>" required></textarea>
          </div> 
          <div class="col-sm-6">
            <label><?php echo display('Reason to Create a Project'); ?> <i class="text-danger">*</i></label>
              <textarea name="reason_to_create_project" value="" class="form-control" type="textarea" id="project" autocomplete="off" placeholder="<?php echo display('Reason to Create a Project'); ?>" required></textarea>
          </div>
          <div class="form-group row"> 
          <div class="col-sm-6 aftersubmit">  
              <button type="submit" class="btn btn-success" style="transform: translate(10px, 10px);"><?php echo display('Submit'); ?></button>
            </div> 
        </div>  
        </div> 
        <?php echo form_close() ?>
