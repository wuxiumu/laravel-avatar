<?php

Route::get('/avatar-wu', function () {
    Avatar::output('吴','wu.png');
    echo '<img src="wu.png">';
});