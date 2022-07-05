<?php 
session_start();
if(!isset($_SESSION["user"])){
  echo "<script>location.href='index.php';</script>";
}



?>
<script src="https://cdn02.jotfor.ms/static/prototype.forms.js?3.3.34334" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.34334" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/js/vendor/math-processor.js?v=3.3.34334" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;

   JotForm.setCalculations([{"decimalPlaces":"2","equation":"[{3}+{4}+{5}+{6}]","ignoreHiddenFields":"0","insertAsText":"0","newCalculationType":"1","operands":"3,4,5,6","readOnly":"1","replaceText":"","resultField":"7","showBeforeInput":"0","showEmptyDecimals":"0","useCommasForDecimals":"0"}]);
	JotForm.init(function(){
	/*INIT-START*/
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Math Quiz","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"2x","qid":"3","text":"2x + 6y = 22, x + y = 5 What is x?","type":"control_radio"},{"name":"findThe4","qid":"4","text":"Find the sum of numbers between 1 and 20 (1 and 20 included):","type":"control_radio"},{"name":"whatIs","qid":"5","text":"What is 1\u002F4 + 1\u002F5 + 1\u002F6 = ?","type":"control_radio"},{"name":"a","qid":"6","text":"a = 20\u002F37, b = 11\u002F37,  c = 30\u002F37 put the numbers in increasing order:","type":"control_radio"},{"name":"score","qid":"7","text":"Score","type":"control_calculation"},{"name":"input8","qid":"8","text":"Do not forget to hide the score field before you share the quiz.","type":"control_text"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Math Quiz","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"2x","qid":"3","text":"2x + 6y = 22, x + y = 5 What is x?","type":"control_radio"},{"name":"findThe4","qid":"4","text":"Find the sum of numbers between 1 and 20 (1 and 20 included):","type":"control_radio"},{"name":"whatIs","qid":"5","text":"What is 1\u002F4 + 1\u002F5 + 1\u002F6 = ?","type":"control_radio"},{"name":"a","qid":"6","text":"a = 20\u002F37, b = 11\u002F37,  c = 30\u002F37 put the numbers in increasing order:","type":"control_radio"},{"name":"score","qid":"7","text":"Score","type":"control_calculation"},{"name":"input8","qid":"8","text":"Do not forget to hide the score field before you share the quiz.","type":"control_text"}]);}, 20); 
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.34334" rel="stylesheet" type="text/css" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.34334" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.34334" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:590px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>
<link type="text/css" rel="stylesheet" href="sayici.css"/>
<title>Sorular</title>
<link rel="icon" href="/resim/altikod.jpg" type="image/x-icon" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }
    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }
    .form-label {
      font-family: Lucida Grande, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 590px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>
<div class="timer" id="countdown">10:00</div>
<div class="progress">
  <div class="progress-bar bg-danger" id="prog" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>   

<form class="jotform-form" action="kontrol.php" method="post" name="form_221792278469975" id="221792278469975" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="221792278469975" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Arduino Sınavı
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Hazırlayan:Emir AKSOY
            </div>
            <div id="subHeader_1" class="form-subHeader">
              Başarılar <?php echo $_SESSION["user"];?>
            </div>
          </div>
        </div>
      </li>
      <?php
      $sayac=1;
      include("db.php");
      $sec= "SELECT Soru,a,b,c,d FROM sorular";
      
      $sonuc= $baglan->query($sec);
      
      if ($sonuc->num_rows > 0) 
      {
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
          $soru=
          " 
          <li class='form-line' data-type='control_radio' id='id_3'>
    <label class='form-label form-label-top' id='label_3' for='input_3'>".$sayac.")".$cek['Soru']."</label>
    <div id='cid_3' class='form-input-wide'>
      <div class='form-single-column' role='group' aria-labelledby='label_3' data-component='radio'>
        <span class='form-radio-item' style='clear:left'>
          <span class='dragger-item'>
          </span>
          <input type='radio' aria-describedby='label_3' class='form-radio' id='question-1-answers' name='question-".$sayac."-answers' value='A' data-calcvalue='0' />
          <label id='label_input_3_0' for='input_3_0'>".$cek['a']."</label>
        </span>
        <span class='form-radio-item' style='clear:left'>
          <span class='dragger-item'>
          </span>
          <input type='radio' aria-describedby='label_3' class='form-radio' id='question-1-answers' name='question-".$sayac."-answers' value='B' data-calcvalue='25' />
          <label id='label_input_3_1' for='input_3_1'>".$cek['b']."</label>
        </span>
        <span class='form-radio-item' style='clear:left'>
          <span class='dragger-item'>
          </span>
          <input type='radio' aria-describedby='label_3' class='form-radio' id='question-1-answers' name='question-".$sayac."-answers' value='C' data-calcvalue='0' />
          <label id='label_input_3_2' for='input_3_2'>".$cek['c']."</label>
        </span>
        <span class='form-radio-item' style='clear:left'>
          <span class='dragger-item'>
          </span>
          <input type='radio' aria-describedby='label_3' class='form-radio' id='question-1-answers' name='question-".$sayac."-answers' value='D' data-calcvalue='0' />
          <label id='label_input_3_3' for='input_3_3'>".$cek['d']."</label>
        </span>
      </div>
    </div>
  </li>
          ";
          
      
          echo $soru;
          $sayac++;
         }
      } 
      
      ?>
      
 
      
      
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Sınavı Bitir
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script src="script.js"></script>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221792278469975" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='221792278469975'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "221792278469975-221792278469975";
}
  </script>

</form>