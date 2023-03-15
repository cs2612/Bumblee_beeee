<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Raleway:600,900,400' rel='stylesheet' type='text/css'>
<style>
  @import "bourbon";

/*----------------------------------------------   
-Defualt to border-box
-----------------------------------------------  */
*, *:before, *:after {
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box; 
  box-sizing: border-box; 
}
html, body{
  font-family: helvetica;
  font-size: 100%;
  margin: 0;
  padding: 0;
  font-weight: 400;
  font-family: Raleway;
  line-height: 1.4;
}
/*----------------------------------------------   
--Fluid body sizing
-----------------------------------------------  */
body {
font-size: 100%;
  
  @media (min-width: 32em) {
    font-size: 110%
  }
  @media (min-width: 54em) {
    font-size: 111%
  }
  @media (min-width: 74em) {
    font-size: 115%
  }

  @media (min-width: 96em) {
    font-size: 135%
  }
}
a.btn{
  background-color: #54A984;
  color: #fff;
  text-decoration: none;
  display:inline-block;
  letter-spacing: 0.1em;
  padding: 0.5em 0em;
  
  &.btn-beta{
    background-color: #e36e3a;
  }
}
.decor-line {
	position:	relative;
	top:	0.7em;
  border-top: 1px solid #ccc;
  text-align:center;
  max-width: 40%;
  margin: 0.5em auto;
  display: block;
  padding: 0.1em 1em;
  color: #ccc;
  
  span{
    background: #fff;
    color: #ccc;
    position: relative;
    top: -.7em;
    padding: 0.5em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight:	900;
  }
}
.overlay-verify{
  background: #000;
  position:fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

.box{
  background: gray;
  text-align: center;
  position: absolute;
  left: 0;
  right: 0;
  top: 20%;
  bottom: 0;
  margin: 0 auto;
  z-index: 9;
  width: 35%;
  height: 50%;
  
  p{
      //padding: 5%;
      position: relative;
      z-index: 3;
    }
  }
  
  
  .box-right{
    text-align: center;
    
    h1 {
      color: #555;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      border-bottom: 1px solid #eee;
      padding-bottom: 1em;
      margin: 0 auto;
    }
    p{
      color: #aaa;
    }
    small{
      color: #ccc;
    }
    .btn{
      font-weight: 600;
      letter-spacing: 0.2em;
      padding: 0.9em 1em 0.7em;
      margin: 1em auto;
      display: block;
    }
  }

</style>
<body>
<main>
  <article class="box">
    <div class="box-right">
      <h1><i>Age Verification</i></h1>
      <p>By clicking enter, I certify that I am above the age of 18 and will comply with the above statement.</p>
      
      <a href="http://localhost/bumblebee/index.php" class="btn btn-alpha"  id="refresh-page">YES, I'm above 18</a>
      
      <p class="decor-line"><span>Or</span></p>
      <br>
      <a href="http://localhost/bumblebee/error.php" class="btn btn-beta" id="reset-session">NO, I'm under 18</a>
</br>
      <br>
      <br>
      <small>Always enjoy responsibily.</small>
</br>
</br>
    </div>
    </div>
  </article>
  
  <div class="overlay-verify"></div>
</main>

<script>
  jQuery(document).ready(function($){

if (sessionStorage.getItem('advertOnce') !== 'true') {
//sessionStorage.setItem('advertOnce','true');
  $('.box').show();
}else{
  $('.box').hide();
}
 
$('#refresh-page').on('click',function(){
$('.box').hide();
sessionStorage.setItem('advertOnce','true');
});
  
$('#reset-session').on('click',function(){
$('.box').show();
sessionStorage.setItem('advertOnce','');
});
 
});
</script>
</body>
</html>