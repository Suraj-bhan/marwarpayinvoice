<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
*{box-sizing: border-box;
  align-content:center;
  font-family: Calibri; 
}
.bold{ font-weight: bold; }
.center{text-align: center;}
.left{border-left: 1px solid black;}
.right{border-right: 1px solid black;}
.top{border-top:1px solid black;}
.bottom{border-bottom:1px solid black;}

.r div{border-bottom:1px solid black;
       border-collapse: collapse;
       float: left;
       height:auto;
       }
.r div p{ padding:5px;
          margin:0; }

.container{ margin-left:auto;
            margin-right: auto; 
            width: 820px;}
.r5 div{height: 300px;} 
.r4 div{height: 40px;}
.r14 div{height:50px;}           



.container div p{
   padding: 10px;
}

</style>

<body>
<div class="container">  
<p class="center">
 <strong> <?php
    if ( isset($_REQUEST['bill']) ) {
    echo htmlentities($_REQUEST['bill']);
    }
    ?>
  </strong>
</p>
<div class="r r2">
<div class="left top right" style="width:400px; height:120px; "> 
  <p><strong>MARWARPAY INFO SOLUTION PRIVATE LIMITED HIRAPURA, JAIPUR, RAJASTHAN</strong><br>
             Company's GST No: <strong>08AANCM5105E1ZL</strong><br>
             Company's PAN: <strong>AANCM5105E</strong><br>
             Email: MARWARPAY@GMAIL.COM
</p> </div>

<div class="right top center" style="width:400px; height:40px;">
  <p> Date:
    <?php
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[mday] $mydate[month], $mydate[year]";
    ?></p> </div>

<div class="right center" style="width:200px; height:40px;"> 
  <p>Dealer Code (Member ID) </p> </div>
    
    <div class="right center" style="width:200px; height:40px;"> 
    <p>    
 <strong> <?php
    if ( isset($_REQUEST['d_code']) ) {
    echo htmlentities($_REQUEST['d_code']);
    }
    ?></strong></p> </div>

    <div class="right center" style="width:200px; height:40px;"> <p>Buyer's PAN No:</p> </div>
    <div class="right center" style="width:200px; height:40px;"> 
    <p>
 <strong> <?php
    if ( isset($_REQUEST['b_pan_num']) ) {
    echo htmlentities($_REQUEST['b_pan_num']);
    }
    ?></strong> </p> </div>
</div> 


<div class="r r3">
  <div class="left right" style="width:400px; height:120px; "> <p>Buyer <br>
  <strong> <?php
    if ( isset($_REQUEST['buyer']) ) {
    echo htmlentities($_REQUEST['buyer']);
    }
    ?>
    </strong>
    <br>

   <?php
    if ( isset($_REQUEST['address']) ) {
    echo htmlentities($_REQUEST['address']);
    }
    ?>
  </p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Buyer's GST No:</p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
 <strong>  <?php
    if ( isset($_REQUEST['b_gst_num']) ) {
    echo htmlentities($_REQUEST['b_gst_num']);
    }
    ?></strong>
  </p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Mode/Terms of Payment </p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
   <?php
    if ( isset($_REQUEST['payment']) ) {
    echo htmlentities($_REQUEST['payment']);
    }
    ?></p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Place Of Supply</p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
    <?php
    if ( isset($_REQUEST['place']) ) {
    echo htmlentities($_REQUEST['place']);
    }
    ?>
    </p> </div>

</div> 

<div class="r r4 center">
  <div class="left right" style="width:60px;  "> <p>S. No.</p> </div>
  <div class="right" style="width:300px; "> <p>Particulars</p> </div>
  <div class="right" style="width:120px;"> <p>Quantity</p> </div>
  <div class="right" style="width:80px; "> <p>Rate</p> </div>
  <div class="right" style="width:60px; "> <p>Per</p> </div>
  <div class="right" style="width:180px; "> <p>Amount</p> </div>
</div> 

<div class="r r5">
  <div class="left right" style="width:60px;  "> <p>--</p> </div>
  <div class="right" style="width:300px; "> <p>--</p> </div>
  <div class="right" style="width:120px; "> <p>--</p> </div>
  <div class="right" style="width:80px; "> <p>--</p> </div>
  <div class="right" style="width:60px; "> <p>--</p> </div>
  <div class="right" style="width:180px;"> <p>--</p> </div>
</div> 

<div class="r r2 ">
  <div class="right left" style="width:360px; height:40px; text-align: right; padding-right: 5px;">
    <p>Total</p></div>
  <div class="right" style="width:120px; height:40px;"> </div>
  <div class="right" style="width:80px; height:40px;"> </div>
  <div class="right" style="width:60px; height:40px;"> </div>
  <div class="right center" style="width:180px; height:40px;"> <p>--</p> </div>
</div> 
<div class="r r2">
  <div class="left right" style="width:800px; height:200px;">
  <p><strong>Total Amount in words</strong> <br>
     <strong>INR --</strong>
  </p> 

  </div>
</div>
<div class="r r2">
  <div class="left right" style="width:400px; height:80px;"></div>
  <div class="right" style="width:400px; height:80px;">
    <p><strong>For MARWARPAY INFO SOLUTION PRIVATE LIMITED</strong></p>  
    <p style="text-align: right">Authorised Signatory</p>
  </div>
</div>

<div class="r r18">
   <div class="left right" style="width:800px;"> <p><button onclick="window.print()">Print this page</button></p> </div>
</div>

<div class="r r19 center">
   <div class="bottom left right" style="width:800px;"> <p> <span class="bold">Note: </span> This is a Computer Generated Slip and does not Require Signature.</p> </div>
</div>

</div>
</body>
</html>