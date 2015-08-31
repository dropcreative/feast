<?php

function YOUR_PREFIX_add_nf_styles( $form_id ) {
    if( $form_id == 1 ) {
        echo '<style>
            .ninja-forms-form-wrap{background:red}
        </style>';
    }
}

?>
