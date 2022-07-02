var config = {
    'config': {
        'mixins': {
           'Magento_Checkout/js/view/shipping': {
               'Btg_Checkout/js/view/shipping-payment-mixin': true
           },
           'Magento_Checkout/js/view/payment': {
               'Btg_Checkout/js/view/shipping-payment-mixin': true
           }
       }
    }
}
