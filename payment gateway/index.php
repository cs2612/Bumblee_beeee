
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="payment gateway/css/style.css">

</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: linear-gradient(90deg, #3C566A 60%, #455A6A 40.1%);
}

.container form{
  padding:20px;
  width:700px;
  background: #C0C0C0;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #156E50;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #2ecc71;
}
    </style>
<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                
                <h4 class="title">Pay with Installment</h4>
                <p>If product is upto 15,000 LKR you can pay with installments<p><a href="installment.php">More About Installment Payment</a>
                <label for="cards">Choose a card:</label>
                <select name ="cards" id="cards">
                    <option value="Pay with KOKO">Not paying with installments </option>
                    <option value="Pay with KOKO">Pay with KOKO </option>
                    <option value="Pay with Visa card">Pay with Visa card</option>
                    <option value="Pay with PayPal">Pay with PayPal</option>
</select>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" required>
                    </div>
                </div>

            </div>
    
</div>



        <a href="placeorder.php" value="proceed to checkout" input type="submit" class="submit-btn" >proceed to checkout</a>
     
    </form>

</div>    
    
</body>
</html>