<h2><?php _e('shop86 Reports', 'shop86'); ?></h2>

<div class='wrap'>
  
  <h3 style="margin-top: 50px;"><?php _e( 'Product Sales' , 'shop86' ); ?></h3>
  
  <?php
    echo '<p class="description">' . __('Sales reports are only available in <a href="http://shop86.com">shop86 Professional</a>.','shop86') . '</p>';
  ?>
  
  <br/>
  
  <h3><?php _e('Export Orders', 'shop86'); ?></h3>
  
  <?php
    $firstDayLastMonth =  date("m/1/Y", strtotime('-1 month', shop86Common::localTs()));
    $lastDayLastMonth =  date("m/d/Y", strtotime('-1 day', strtotime('+1 month', strtotime($firstDayLastMonth))));
  ?>
  <form action="" method="post" style="margin-bottom: 25px;">
    <input type="hidden" name="shop86-action" value="export_csv" />
    <table class="">
      <tr>
        <th style="text-align: left; padding: 0px 5px;"><?php _e( 'Start Date' , 'shop86' ); ?></th>
        <th style="text-align: left; padding: 0px 5px;"><?php _e( 'End Date' , 'shop86' ); ?></th>
        <th>&nbsp;</th>
      </tr>
      <tr>
        <td><input type="text" name="start_date" value="<?php echo $firstDayLastMonth; ?>" id="start_date" /></td>
        <td><input type="text" name="end_date" value="<?php echo $lastDayLastMonth; ?>" id="end_date" /></td>
        <td><input type="submit" name="submit" value="<?php _e('Export', 'shop86'); ?>" id="submit" class="button-secondary" /></td>
      </tr>
      <tr>
        <td style="text-align: left; padding: 0px 5px;"><span class="description">mm/dd/yyyy</span></td>
        <td style="text-align: left; padding: 0px 5px;"><span class="description">mm/dd/yyyy</span></td>
        <td style="text-align: left; padding: 0px 5px;">&nbsp;</td>
      </tr>
    </table>
  </form>
</div>

<script type="text/javascript">
 (function($){
   $(document).ready(function(){
     $("#start_date,#end_date").datepicker();
   })
 })(jQuery);
</script>