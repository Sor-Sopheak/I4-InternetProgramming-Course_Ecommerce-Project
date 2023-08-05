<template>
    <section class="login-main-wrapper">
      <div class="main-container">
          <div class="login-process">
              <div class="login-main-container">
                  <div class="thankyou-wrapper">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vectorstock.com%2Froyalty-free-vector%2Fonline-order-purchase-completed-icon-vector-25794993&psig=AOvVaw2L-341BULr29eaDbwEwnUI&ust=1691312068470000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIDzxcqSxYADFQAAAAAdAAAAABAM" alt="">
                      <h1>Thank You!</h1>
                        <div>
                          <p class="thank-success">Your order is completed</p>
                          <p class="thank-success">Successfully</p>
                        </div>
                      
                        <RouterLink to="/">Back to Store</RouterLink>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </section>
    <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
    <Footer />
</template>
<script>
import Footer from "@/components/Footer.vue";

export default {
    name: "ThankYou",

     components: { Footer },  
}
</script>
<style>
.thankyou-wrapper{
  width:100%;
  height:auto;
  margin:auto;
  background:#ffffff; 
  padding:10px 0px 50px;
}
.thankyou-wrapper h1{
  font:100px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#f28219;
  padding:0px 10px 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.thankyou-wrapper .thank-success{
  font:70px Arial, Helvetica, sans-serif;
  display: flex;
  text-align:center;
  align-self: center;
  color:#0a0a0a;
  padding:0px 10px 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.thankyou-wrapper p{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:5px 10px 10px;
}
.thankyou-wrapper a{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#F96700;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;
  border-radius: 50px;
}
.thankyou-wrapper a:hover{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#000000;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #000000;
}
</style>