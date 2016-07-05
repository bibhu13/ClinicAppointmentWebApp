<div class="slidtxt">Category :</div>

<div class="slidfield">
  <select name="category" id="sc_get">
    <option value="ap">Andhrapradesh</option>
    <option value="tn">Tamilnadu</option>
    <option value="kr">Karnataka</option>
    <option value="kl">Kerala</option>
  </select>
</div>

<div class="slidtxt">Sub Category :</div>
<div class="slidfield">
  <select name="subcat" id="sc_show">

  </select>
</div>

<script>
//Script for getting the dynamic values from database using jQuery and AJAX
$(document).ready(function() {
    $('#sc_get').change(function() {
 
  var form_data = {
  name: $('#sc_get').val()
  };
  
  $.ajax({
  url: "<?php echo site_url('controller_name/method'); ?>",
  type: 'POST',
  dataType: 'json',
  data: form_data,
  success: function(msg) {
    var sc='';
    $.each(msg, function(key, val) {
     sc+='<option value="'+val.sub_cat+'">'+val.sub_cat+'</option>';
    });
   $("#sc_show option").remove();
   $("#sc_show").append(sc);
  }
 });
});
});
</script>
