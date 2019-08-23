<?php
/**
 * Twispay Helpers
 *
 * Redirects user to the thank you page.
 *
 * @author   Twistpay
 * @version  1.0.0
 */

/* Security class check */
if (! class_exists('Twispay_Thankyou')) :
    /**
     *Class that redirects user to the thank you page.
     */
    class Twispay_Thankyou
    {
         /**
          * Redirect to default thank you page
          *
          * @return void
          */
         public static function default()
         {
             Twispay_Thankyou::twispay('index.php?route=checkout/success');
         }

         /**
          * Redirect to custom page
          *
          * @param $page: custom page url - Ex: /index.php?route=checkout/cart.
          *
          * @return void
          */
         public static function twispay($page)
         {
            $page_to_redirect = HTTPS_SERVER.$page;
            echo '<meta http-equiv="refresh" content="1;url='. $page_to_redirect .'" />';
            header('Refresh: 1;url=' . $page_to_redirect);
         }

    }
endif; /* End if class_exists. */
