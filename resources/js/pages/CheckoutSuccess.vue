<template>
  <div class="payment-success">
    <div class="content">
        <img src="/img/logo_yellow.png" alt="logo">
        <h1>Il pagamento è andato a buon fine.</h1>
        <div>Riceverai presto una mail con i dati del tuo ordine.<br>
        Grazie per aver scelto Deliveboo <span class="heart">&#10084;</span>
        </div>
        <router-link :to="{name:'home'}"><button>Vai alla home</button></router-link>
      </div>
        <div class="color"><img class="delivery" src="/img/delivery.png" alt="delivery"></div>
  </div>
</template>

<script>
export default {
   name:"CheckoutSuccess",
}
</script>

<style lang="scss" scoped>
@import "../../sass/vars.scss";
@import "../../sass/mixins.scss";

.payment-success{
  background: $d-primary;
  background: linear-gradient(176deg, $d-primary  21.8%, rgba(244,246,245,1) 22%);
  height: 100vh;
  padding-top: 135px;
  .content{
    text-align: center;
    max-width: 30%;
    margin: 0 auto;
    img{
      width: 30%;
      margin-bottom: 30px;
    }
    h1{
      font-size: 40px;
    }
    & > div{
      font-size: 16px;
      margin-bottom: 30px;
      .heart{
        color:  #e2484f;
      }
    }
    button{
      padding: 0.5em 1em;
      border-radius: 4px;
      background-color: $d-primary;
      color: #fff;
      font-weight: bold;
    }
  }
  .color{
    width: 80%;
    margin: 0 auto;
    margin-top: 50px;
    .delivery{
      position: relative;
      width: 10%;
      animation-name: move;
      animation-duration: 4s;
      animation-fill-mode: forwards;
      animation-timing-function: linear;
    }
  }
  @keyframes move {
  0% {left:0px}
  90% {left:80%}
  100% {left:80%}
  }
}

@media screen and (max-width: 822px){
  .payment-success{
    padding-top: 90px;
    .content{
      max-width: 60%;

      h1{
        font-size: 36px;
      }

      img{
        width: 20%;
      }
    }
  }
}
 
@media screen and (max-width: 548px){
  .payment-success{
    .content{

      h1{
        font-size: 34px
      }

      img{
        width: 30%;
      }
    }
  }
}


</style>