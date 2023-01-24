<?php  echo form_open_multipart(base_url("backend/nft/stake_reward")) ?>
      <div> 
        <div class="form-group row"> 
          <div class="col-sm-4">
            <label><?php echo display('Daily Reward'); ?> <i class="text-danger">*</i></label>
              <input name="daily_reward" value="" class="form-control" type="text" id="daily_reward" autocomplete="off" placeholder="<?php echo display('Daily Reward'); ?>" required>
          </div> 
          <div class="col-sm-4">
            <label><?php echo display('Claim Reward'); ?> <i class="text-danger">*</i></label>
              <input name="claimed_reward" value="" class="form-control" type="text" id="claimed_reward" autocomplete="off" placeholder="<?php echo display('Claim Reward'); ?>" required>
          </div> 
          <div class="col-sm-4">
            <label><?php echo display('Unstake Days'); ?> <i class="text-danger">*</i></label>
              <input name="Unstake_Days" value="" class="form-control" type="number" id="email" autocomplete="off" placeholder="<?php echo display('Unstake Days'); ?>" required>
          </div> 
          <div class="form-group row"> 
          <div class="col-sm-6 aftersubmit">  
              <button type="submit" class="btn btn-success" style="transform: translate(10px, 10px);"><?php echo display('Submit'); ?></button>
            </div> 
        </div>  
        </div> 
        <?php echo form_close() ?>
