<div class="well">
    <fieldset>
        <div class="form-group">
            <label class="col-lg-2 control-label"><h4>Attach multiple images here</h4></label>
            <div class="col-lg-10">
                <?php                
                $this->widget('CMultiFileUpload', array(
                    'name' => 'attachment',
                    'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
                    'duplicate' => 'Duplicate file!', // useful, i think
                    'denied' => 'Invalid file type', // useful, i think                    
                ));
                ?>
            </div>
        </div> 	
    </fieldset>
</div>