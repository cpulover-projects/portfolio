<?php
function createProgressBar($label, $percent){
    echo '
        <div class="row-lg">
            <h5 class="progress-label">'.$label.'</h5>
            <div class="progress">
                <div class="progress-bar bg-dark" style="width:'.$percent.'%"></div>
            </div>
        </div>
        <br>
    ';
}
?>