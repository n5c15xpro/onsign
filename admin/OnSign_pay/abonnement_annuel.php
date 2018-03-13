<?php
$title = "Payement annuel";
include('header_paypal.php') ?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>


<h1 class="black-text center-align">Abonnement annuel</h1>

<a id="paypal"></a>

<script>
    paypal.Button.render({
        env: 'sandbox', // Or 'sandbox',

        locale: 'fr_FR',

      style: {
        color: 'blue',
        size: 'medium'
      },

        payment: function(data, actions) {

            return paypal.request.post('payment_annuel.php').then(function(data)
            {
               return data.id;
            });
        },

        onAuthorize: function(data, actions) {

            return paypal.request.post('pay.php',
            {
                paymentID: data.paymentID,
                payerID: data.payerID
            }).then(function(data)
            {
                console.log(data);
            }).catch(function (err)
            {
                console.log('erreur', err);
            });
        }
    }, '#paypal');
</script>
<?php include('footer_paypal.php') ?>