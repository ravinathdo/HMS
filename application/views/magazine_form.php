<?php echo validation_errors();?>
<form method="post" action="">
    <div>
        <label for="publication_id">Publication Name</label>
        <select name="publication_id">
            <?php 
            foreach ($publication_form_options as $publication_id => $publication_name) {
                echo '<option value="'.$publication_id.'">'.$publication_name.'</option>' ;
            }
            ?>
        </select>
    </div>
    <div>
        <label for="issue_number">Issue Number</label>
        <input type="text" name="issue_number" value=""/>
    </div>
    <div>
        <label for="issue_number">Issue Date</label>
        <input type="text" name="issue_date_publication" value=""/>
    </div>
    <div>
        <input type="submit"/>
    </div>
    
</form>